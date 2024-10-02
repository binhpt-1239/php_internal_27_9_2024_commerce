<?php

namespace App\Traits;

trait ApiResponse
{
    /**
     * Format the response in {message: "", data: ""} format.
     *
     * @param string $message
     * @param mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function formatResponse(string $message, $data = [])
    {
        return response()->json([
            "message" => $message,
            "data" => $data ?: (object)[],
        ]);
    }
}
