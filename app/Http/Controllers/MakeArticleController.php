<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeArticleController extends Controller
{
    public function create() {
        return view('writer.makeArticle', [
            "title" => "Make Article"
        ]);
    }
}
