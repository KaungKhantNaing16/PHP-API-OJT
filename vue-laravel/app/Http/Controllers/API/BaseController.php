<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    /**
     * success response method
     * 
     * @return \Illuminate\Http\Response
     */
    public function sendResponse ($result, $message) 
    {
        $response = [
            'success'   => true,
            'data'      => $result,
            'message'   => $message
        ];

        return response()->json($response);
    }

    /**
     * return error response
     * 
     * @return \Illuminate\Http\Response
     */
    public function sendError ($error, $errorMsg = [], $code = 404)
    {
        $response = [
            'success'   => false,
            'message'   => $error
        ];

        if(!empty($errorMsg)) {
            $response['data'] = $errorMsg;
        }

        return response()->json($response, $code);
    }
}
