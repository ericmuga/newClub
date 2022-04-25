<?php

namespace App\Http\Controllers;

use App\Models\Instance;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use GuzzleHttp\Client;
use App\Models\Meeting;
use Illuminate\Support\Carbon;

class ZoomController extends Controller
{



    public static function  getZoomAccessToken() {
            $key = env('JWT_APP_SECRET','');
            $payload = array(
                "iss" =>env('JWT_APP_KEY',''),
                "exp" =>1681638780,
                // "exp" =>date_create('0:53 04/16/2023')->format('U'),
            );

           return JWT::encode($payload, $key,'HS256');
            // return 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IlRUdkUzOW5iUi1LajZrWDdiNXgyc1EiLCJleHAiOjE2NDk5Mzg5ODgsImlhdCI6MTY0OTMzNDE4OH0.So0mJbQAipZi5azENcU1yMNtsbODG4OKvcRdILA0E54';


    }


    public  static function createZoomMeeting() {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'https://api.zoom.us',
            ]);

            $response = $client->request('POST', '/v2/users/me/meetings', [
                "headers" => [
                    "Authorization" => "Bearer " .ZoomController::getZoomAccessToken()
                ],
                'json' => [
                    "topic" => "Test JWT Auth",
                    "type" => 2,
                    "start_time" => "2022-05-30T20:30:00",
                    "duration" => "30", // 30 mins
                    "password" => "123456"
                ],
            ]);

            $data = json_decode($response->getBody());
            echo "Join URL: ". $data->join_url;
            echo "<br>";
            echo "Meeting Password: ". $data->password;
        }

public static function list_meetings($next_page_token = '') {
    $client = new Client(['base_uri' => 'https://api.zoom.us']);

    $arr_request = [
        "headers" => [
            "Authorization" => "Bearer ".ZoomController::getZoomAccessToken()
        ]
    ];

    if (!empty($next_page_token)) {
        $arr_request['query'] = [

                                  "next_page_token" => $next_page_token,
                                  "type"=>'scheduled',

                                ];
    }

    $response = $client->request('GET', '/v2/users/me/meetings/?type=scheduled&from=2022-03-01&to=2022-03-31', $arr_request);

    $data = json_decode($response->getBody());

    if ( !empty($data) ) {
        foreach ( $data->meetings as $d ) {
            //fetch instances of that meeting

                    $arr_request2 = [
                            "headers" => [
                                "Authorization" => "Bearer ".ZoomController::getZoomAccessToken()
                            ]
                        ];
                    $client2 = new Client(['base_uri' => 'https://api.zoom.us']);
                    $response2 = $client2->request('GET', '/v2/past_meetings/'.$d->id.'/instances', $arr_request2);
                    $data2 = json_decode($response2->getBody());
                    foreach($data2->meetings as $i)
                    {
                        if(!Instance::where('uuid',$i->uuid)
                                    ->where('meeting_id',$d->id)
                                    ->exists()
                          )
                        // Carbon::parse($participant["leave_time"])->timezone('Africa/Nairobi');
                        Instance::create(['meeting_id'=>$d->id,
                                          'uuid'=>$i->uuid,
                                          'start_time'=>Carbon::parse($i->start_time)->timezone('Africa/Nairobi')]);
                    }
            if(!Meeting::where('meeting_id',$d->id)->exists())
                Meeting::create([
                    'topic'=>$d->topic?:'',
                    'meeting_id'=>$d->id?:0,
                    'uuid'=>((str_contains($d->uuid,'/'))?urlencode(urlencode($d->uuid)):$d->uuid)?:'',
                    ]);
            if ( !empty($data->next_page_token) ) {
                ZoomController::list_meetings($data->next_page_token);


    }
        }

    }
    return 'done!';
}

public static function deleteZoomMeeting($meeting_id) {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);

    $response = $client->request("DELETE", "/v2/meetings/$meeting_id", [
        "headers" => [
            "Authorization" => "Bearer " .ZoomController::getZoomAccessToken()
        ]
    ]);

    if (204 == $response->getStatusCode()) {
        echo "Meeting deleted.";
    }
}


public static function getMeetingParticipants($meeting_id)
{
        $client = new Client(['base_uri' => 'https://api.zoom.us']);

        $response = $client->request('GET', '/v2/past_meetings/'.$meeting_id.'/participants', [
            "headers" => [
                "Authorization" => "Bearer ". ZoomController::getZoomAccessToken()
            ]
        ]);

        $data = json_decode($response->getBody());
        if ( !empty($data) ) {
            foreach ( $data->participants as $p ) {
                $name = $p->name;
                $email = $p->user_email;
                echo "Name: $name";
                echo "Email: $email";
            }
        }
}



}
