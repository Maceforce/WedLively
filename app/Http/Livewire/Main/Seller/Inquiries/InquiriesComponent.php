<?php

namespace App\Http\Livewire\Main\Seller\Inquiries;

use Livewire\Component;
use App\Models\Inquiry;
use App\Mail\InquiryAccepted;
use Illuminate\Support\Facades\Mail;

class InquiriesComponent extends Component
{
    public $inquiries;

    public function mount()
    {
        // Fetch inquiries for the authenticated seller
        $this->inquiries = Inquiry::where('vendor_id', auth()->id())->get();
    }

    public function acceptInquiry($inquiryId)
    {
        $inquiry = Inquiry::find($inquiryId);

		/*echo '<pre>';
        print_r($inquiry);
        echo '</pre>';
        die('mail test');
        $inquiry->planner_email*/
        if ($inquiry && $inquiry->vendor_id == auth()->id()) {
            $inquiry->status = 'accepted';
            $inquiry->save();

            // Notify the planner via email
           Mail::to("sukoonzplanner1@sharklasers.com")->send(new InquiryAccepted($inquiry));

            session()->flash('success', 'Inquiry accepted and notification sent.');
        }
    }

    public function render()
    {
        return view('livewire.main.seller.inquiries.inquiries', [
            'inquiries' => $this->inquiries,
        ])->extends('livewire.main.seller.layout.app')->section('content');

    }
}
