<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    use HasFactory;
    private static $course, $image, $imageName, $directory, $extension, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getCLientOriginalExtension();
        self::$imageName = 'ssmsb7_'.time().'.'.self::$extension;
        self::$directory = 'website/img/course/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addCourse($request)
    {
        self::$course = new Course();
        self::$course->teacher_id = Session::get('teacher_id');
        self::$course->title = $request->title;
        self::$course->fee = $request->fee;
        self::$course->starting_date = $request->starting_date;
        self::$course->duration = $request->duration;
        self::$course->description = $request->description;
        self::$course->image = self::getImageUrl($request);
        self::$course->save();
    }
    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::$course->teacher_id = Session::get('teacher_id');
        self::$course->title = $request->title;
        self::$course->fee = $request->fee;
        self::$course->starting_date = $request->starting_date;
        self::$course->duration = $request->duration;
        self::$course->description = $request->description;
        self::$course->image = self::getImageUrl($request);
        self::$course->save();
    }
    public static function deleteCourse($id)
    {
        self::$course = Course::find($id);
        if(file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
    }
}
