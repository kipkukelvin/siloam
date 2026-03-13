<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    public function dean()
    {
        return view('school.dean');
    }

    public function contacts()
    {
        return view('partials.contacts');
    }

    public function career()
    {
        return view('school.career');
    }

    public function news()
    {
        $likes = DB::table('news')->where('id', 1)->value('likes');

        return view('partials.news-update', compact('likes'));
    }

    public function like()
    {
        DB::table('news')->where('id', 1)->increment('likes');

        $likes = DB::table('news')->where('id', 1)->value('likes');

        return response()->json([
            'likes' => $likes,
        ]);
    }
}
