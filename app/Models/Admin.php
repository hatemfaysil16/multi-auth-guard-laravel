<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable implements  HasMedia
{
    use HasFactory , InteractsWithMedia, HasRoles;
    
    protected $fillable = [
        'name',
        'status',
        'email',
        'password',
    ];

   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->orderBy('id','DESC')->paginate(5);
        }else{
        return $query
        ->orWhere('name', 'like' , "%{$search}%")
        ->orWhere('email', 'like' , "%{$search}%")
        ->orderBy('id','DESC')->paginate(5);
        }
   }

}
