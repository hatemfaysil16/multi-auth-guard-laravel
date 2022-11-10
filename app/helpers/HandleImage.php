<?php
namespace App\helpers;

use App\Http\Requests;
trait HandleImage
{

	public function storeImage($data,$model,$nameImage){
        if (!empty($data['image'])) {
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}

	public function UpdateImage($data,$model,$nameImage){
        if (!empty($data['image'])) {
            $model->clearMediaCollection($nameImage);
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}


}