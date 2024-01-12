<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Post
{

  public static function all()
  {
    $posting = DB::table('posting')->get();
    return collect($posting);
  }


  public static function find($slug)
  {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}
