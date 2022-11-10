<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;


class Category extends Model implements  HasMedia
{
    use HasFactory , InteractsWithMedia , HasTranslations;
    public $translatable = ['name','description'];

    protected $fillable = [
        'name',
        'description',
    ];

   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(5);
        }else{
        return $query->orWhere('name', 'like' , "%{$search}%")->orWhere('description', 'like' , "%{$search}%")->paginate(5);
        }
   }
   
}
