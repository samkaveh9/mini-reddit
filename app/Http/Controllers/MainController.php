<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the application main(Home) page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        return view('main', [
            'topics' => Topic::all()
        ]);
    }
}
