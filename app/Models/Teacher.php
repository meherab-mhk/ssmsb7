<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher, $image, $directory, $imageName, $extension, $imageUrl;

    public static function getImage($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getCLientOriginalExtension();
        self::$imageName = 'ssmsb7_'.time().'.'.self::$extension;
        self::$directory = 'website/img/teacher/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function addTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        self::$teacher->password = sha1($request->password);
        self::$teacher->mobile = $request->mobile;
        self::$teacher->image = self::getImage($request);
        self::$teacher->save();
    }
}
