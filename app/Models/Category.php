<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function add($request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
    }
}
