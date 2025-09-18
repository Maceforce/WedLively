<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class CometChatService
{
    protected $client;
    protected $apiKey;
    protected $appId;
    protected $region;
    protected $authKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.cometchat.api_key');
        $this->appId = config('services.cometchat.app_id');
        $this->region = config('services.cometchat.region');
        $this->authKey = config('services.cometchat.auth_key');
        $this->baseUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/messages";
    }

    public function sendMessage($message, $receiverUid)
    {
        try {
            // Check if the message is not empty
            if (empty($message)) {
                return ['error' => 'Message text should not be empty.'];
            }

            // Build the payload
            $payload = [
                'message' => "test", //$message,
                'receiver' => $receiverUid,  
                'receiverType' => 'user', 
            ];           

            //  echo '<pre>';
            //  print_r($payload);
            //  echo '</pre>';

            // Send the request
            $response = $this->client->request('POST', $this->baseUrl, [
                'body' => '{"category":"message","type":"text"}',
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'apiKey' => $this->apiKey,  // Ensure apiKey is included here
                ],
                'json' => $payload,  
            ]);

            // Return the response
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Handle request exceptions
            return ['error' => $e->getMessage()];
        }

    }

    public function getUsers($perPage = 100, $page = 1)
    {
        $url = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users?perPage={$perPage}&page={$page}";

        try {
            $response = $this->client->request('GET', $url, [
                'headers' => [
                    'accept' => 'application/json',
                    'apikey' => $this->apiKey,  // Pass the API Key here
                ]
            ]);

            // Return the response body as an array (decoded JSON)
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Handle any errors (e.g., network issues, invalid API key)
            return ['error' => $e->getMessage()];
        }
    }        

    public function createUser($uid, $name, $avatar, $link, $role, $metadata, $tags, $withAuthToken = false)
    {

        $createUserUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";

        // Prepare the request data
        $data = [
            'uid' => $uid, 
            'name' => $name, 
            'avatar' => $avatar, 
            'link' => $link, 
            'role' => $role,
            'metadata' => $metadata,
            'tags' => $tags,
            'withAuthToken' => $withAuthToken,
        ];

        // Ensure metadata format is correct
        if (isset($metadata['@private']) && is_array($metadata['@private'])) {
            // Sanitize private fields as needed, if necessary
            $metadata['@private'] = array_filter($metadata['@private'], function($value) {
                return !empty($value);
            });
        }

        try {
            $response = $this->client->request('POST', $createUserUrl, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => $data,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    
    }

    public function updateUser($uid, $name = null, $avatar = null, $link = null, $role = null, $metadata = [], $tags = [], $unset = [])
    {

        $updateUserUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";
    
        // Prepare the request data, include only non-null parameters
        $data = [];
        
        if ($name) $data['name'] = $name;
        if ($avatar) $data['avatar'] = $avatar;
        if ($link) $data['link'] = $link;
        if ($role) $data['role'] = $role;
        if (!empty($metadata)) $data['metadata'] = $metadata;
        if (!empty($tags)) $data['tags'] = $tags;
        if (!empty($unset)) $data['unset'] = $unset;

        try {
            $response = $this->client->request('PUT', "{$updateUserUrl}/{$uid}", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => $data,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function deleteUser($uid, $permanent = false)
    {
        $deleteUserUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";

        try {
            $response = $this->client->request('DELETE', "{$deleteUserUrl}/{$uid}", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => [
                    'permanent' => $permanent
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function deactivateUsers(array $uidsToDeactivate)
    {

        $deactivateUsersUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";
 
        try {
            $response = $this->client->request('DELETE', $deactivateUsersUrl, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => [
                    'uidsToDeactivate' => $uidsToDeactivate
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function reactivateUsers(array $uidsToActivate)
    {

        $reactivateUsersUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";
  
        try {
            $response = $this->client->request('PUT', $reactivateUsersUrl, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => [
                    'uidsToActivate' => $uidsToActivate
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getUser($uid)
    {

        $getUserUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/users";
    
        try {
            $response = $this->client->request('GET', "{$getUserUrl}/{$uid}", [
                'headers' => [
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function createGroup($groupData)
    {
        $createGroupUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/groups";
  
        try {
            $response = $this->client->request('POST', $createGroupUrl, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'json' => $groupData,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function listGroups($perPage = 100, $page = 1)
    {

        $listGroupsUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/groups";
 
        try {
            $response = $this->client->request('GET', $listGroupsUrl, [
                'headers' => [
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'query' => [
                    'perPage' => $perPage, // Number of groups per page
                    'page' => $page,        // Page number
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getGroupDetails($guid)
    {

        $getGroupDetails = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/groups";
  
        try {
            $response = $this->client->request('GET', "{$getGroupDetails}/{$guid}", [
                'headers' => [
                    'Accept' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function updateGroupDetails($guid, $data)
    {

        $updateGroupDetailsUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/groups";
    
        try {
            $response = $this->client->request('PUT', "{$updateGroupDetailsUrl}/{$guid}", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
                'body' => json_encode($data),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function deleteGroup($guid)
    {

        $deleteGroupUrl = "https://{$this->appId}.api-{$this->region}.cometchat.io/v3/groups";
   
        try {
            $response = $this->client->request('DELETE', "{$deleteGroupUrl}/{$guid}", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'apikey' => $this->apiKey,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }


}
