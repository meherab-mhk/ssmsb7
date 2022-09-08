<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $new, $image, $directory, $imageName, $imageUrl;

    public static function getImage($request)
    {

    }
    public static function addTeacher($request)
    {
        self::$new = 
    }
}
