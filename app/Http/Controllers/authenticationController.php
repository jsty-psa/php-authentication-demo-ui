<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class authenticationController extends Controller
{
    public function requestOTP(Request $request) {
        $individual_id = $request->get('individual_id');
        $individual_id_type = $request->get('individual_id_type');

        return response()->json([
            'individual_id' => date("c"),
            'individual_id_type' => $individual_id_type,
        ]);
    }

    function getAuthorization() {
        $authorization_request_body = [
            "requestTime" => date("c"),
            "request" => [
                "clientId" => env("PHILSYS_CLIENT_ID"),
                "secretKey" => env("PHILSYS_SECRET_KEY"),
                "appId" => env("PHILSYS_APP_ID")
            ]
        ];

        $authorization_request_header = [
            "content-type" => "application/json"
        ];

        $response = Http::withHeaders($authorization_request_header)
                    ->withBody(json_encode($authorization_request_body))
                    ->post(env("PHILSYS_ID_AUTH_MANAGER"));

        return response()->json($response);
    }
}