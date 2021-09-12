<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3']
        ]);

        dd($validated);
    }
}
