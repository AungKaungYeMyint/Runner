<?php

namespace App\Utils;
use Carbon\Carbon;

class ImageUpload {

    public static function uploadImage($request)
    {
        $despath = 'images/';
        if($request->hasfile('image')){

            $fileName ='Image-' . Carbon::now()->timestamp;
            $image = $fileName . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs($despath, $image);
            $completeUrl = 'api/v1/' . $despath . $image;

            // $optimizerChain = OptimizerChainFactory::create();
            $image_path = storage_path('app/' . $despath) . $image;
            // if (file_exists($image_path)):
            //     $optimizerChain->optimize($image_path);
            // endif;
             return url($completeUrl);
        }else{

            return 'hello';
        }
    }
}