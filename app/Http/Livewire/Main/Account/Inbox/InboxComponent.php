<?php

namespace App\Http\Livewire\Main\Account\Inbox;

use App\Http\Livewire\Admin\Settings\ChatComponent;
use Livewire\Component;
use Cookie;
use App\Models\User;
use App\Utils\Chat\ChatApi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChMessage as Message;
use App\Models\ChFavorite as Favorite;
use Illuminate\Support\Facades\Response;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class InboxComponent extends Component
{

    use SEOToolsTrait;

    //public $chat;
    public $perPage = 30;

    protected $chat;

    public function mount()
    {
        $this->chat = new ChatComponent();
        $this->chat = new ChatApi();
    }

    public function pusherAuth(Request $request)
    {
        return $this->chat->pusherAuth(
            $request->user(),
            auth()->user(),
            $request->get('channel_name'),
            $request->get('socket_id')
        );
    }

    public function render($id = null)
    {
        $user = User::where('id', '!=', auth()->id())
            ->where('uid', $id)
            ->whereIn('status', ['active', 'verified'])
            ->first();

        $this->setupSeo($user);
        
        return view('livewire.main.account.inbox.inbox-component', [
            'id' => $user ? $user->id : 0,
            'uid' => $user ? strtolower($user->uid) : 0,
            'type' => 'user',
            'messengerColor' => settings('appearance')->colors['primary'],
            'dark_mode' => current_theme(),
        ])->extends('livewire.main.layout.app')->section('content');
    }

    // public function render()
    // {        
    //     return view('livewire.main.account.inbox.inbox-component')->extends('livewire.main.layout.app')->section('content');
    // }

    private function setupSeo($user)
    {
        $separator   = settings('general')->separator;
        $title       = __('messages.t_messages') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage     = src(settings('seo')->ogimage);

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->opengraph()->setUrl(url()->current());
        $this->seo()->opengraph()->setType('website');
        $this->seo()->opengraph()->addImage($ogimage);
        $this->seo()->twitter()->setImage($ogimage);
        $this->seo()->twitter()->setUrl(url()->current());
        $this->seo()->twitter()->setSite("@" . settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');
    }

    public function idFetchData($id, $type = 'user')
    {
        $favorite = $this->chat->inFavorite($id);

        $fetch = ($type === 'user') ? User::where('id', $id)
            ->select('id', 'uid', 'username', 'fullname', 'avatar_id', 'active_status')
            ->with('avatar:id,file_extension,file_folder,uid')
            ->first() : null;

        return [
            'favorite' => $favorite,
            'fetch' => $fetch ?? [],
            'user_avatar' => isset($fetch) ? src($this->chat->getUserWithAvatar($fetch)->avatar) : null,
        ];
    }

    public function download($fileName)
    {
        $path = config('chatify.attachments.folder') . '/' . $fileName;

        if ($this->chat->storage()->exists($path)) {
            return $this->chat->storage()->download($path);
        }

        abort(404, __('messages.t_sorry_file_chat_does_not_exist'));
    }

    public function send(Request $request)
    {
        $error = (object)['status' => 0, 'message' => null];
        $attachment = null;
        $attachment_title = null;

        if ($request->hasFile('file') && settings('live_chat')->enable_attachments) {
            $file = $request->file('file');
            if ($file->getSize() < $this->chat->getMaxUploadSize()) {
                $allowed = array_merge($this->chat->getAllowedImages(), $this->chat->getAllowedFiles());
                if (in_array(strtolower($file->extension()), $allowed)) {
                    $attachment_title = $file->getClientOriginalName();
                    $attachment = Str::uuid() . "." . $file->extension();
                    $file->storeAs(config('chatify.attachments.folder'), $attachment, config('chatify.storage_disk_name'));
                } else {
                    $error->status = 1;
                    $error->message = __('messages.t_selected_file_extension_is_not_allowed');
                }
            } else {
                $error->status = 1;
                $error->message = __('messages.t_selected_file_size_big');
            }
        } else {
            $get_message = clean($request->get('message'));
            if (!$get_message) {
                $error->status = true;
                $error->message = __('messages.t_enter_your_message');
            }
        }

        if (!$error->status) {
            $message_id = mt_rand(9, 999999999) + time();
            $this->chat->newMessage([
                'id' => $message_id,
                'type' => 'user',
                'from_id' => auth()->id(),
                'to_id' => $request->get('id'),
                'body' => $request->get('message') ? clean($request->get('message')) : null,
                'attachment' => ($attachment) ? json_encode((object)[
                    'new_name' => $attachment,
                    'old_name' => htmlentities(trim(clean($attachment_title)), ENT_QUOTES, 'UTF-8'),
                    'size' => $file->getSize(),
                    'extension' => $file->extension()
                ]) : null,
            ]);

            $messageData = $this->chat->fetchMessage($message_id);
            $this->chat->push("private-chat." . $request->get('id'), 'messaging', [
                'from_id' => auth()->id(),
                'to_id' => $request->get('id'),
                'message' => $this->chat->messageCard($messageData, 'default')
            ]);
        }

        return Response::json([
            'status' => '200',
            'error' => $error,
            'message' => $this->chat->messageCard(@$messageData),
            'tempID' => $request->get('temporaryMsgId'),
        ]);
    }
   
}
