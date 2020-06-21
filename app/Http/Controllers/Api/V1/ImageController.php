<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    private function displayImage($image_path) {

        if (file_exists($image_path)) {
            $file = \File::get($image_path);
            $type = \File::mimeType($image_path);
            $response = \Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        } else {
            return 'Image not found';
        }
    }

    public function displayAPIImages($image_file_name){
        return $this->displayImage(storage_path('app/images/') . $image_file_name);
    }
}
