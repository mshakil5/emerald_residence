<?php

namespace App\Http\Controllers;

use App\Models\Servey;
use Illuminate\Http\Request;

class ServeryController extends Controller
{
    public function index()
    {
        $data = Servey::orderby('id', 'DESC')->get();
        return view('admin.servey.index', compact('data'));
    }

}
