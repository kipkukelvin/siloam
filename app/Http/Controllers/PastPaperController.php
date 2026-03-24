<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class PastPaperController extends Controller
{
    public function index()
    {
        return view('pastpapers.exampastpapers');
    }
    public function year($department, $year)
    {
        $path = storage_path("app/public/pastpapers/$department/$year");

        if (!File::exists($path)) {
            abort(404, 'No papers found');
        }

        $files = File::files($path);

        return view('pastpapers.exam', compact('files', 'department', 'year'));
    }
}
