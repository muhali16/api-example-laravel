<?php 

namespace App\Traits;

/**
 * 
 */
trait HttpResponse
{
    protected function success($data, $message = null, $code = 200)
    {
        return response()->json([
            "status" => "Success.",
            "message" => $message,
            "data" => $data
        ], $code);
    }

    protected function error($data, $message, $code)
    {
        return response()->json([
            "status" => "Error was occured.",
            "message" => $message,
            "data" => $data
        ], $code);
    }
}
