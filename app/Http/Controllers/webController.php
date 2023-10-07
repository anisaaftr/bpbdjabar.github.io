<?php

namespace App\Http\Controllers;

use App\Models\web_bpbd;
use Illuminate\Http\Request;


class webController extends Controller
{
    public function index()
    {
        $bpbdjabar = web_bpbd::latest()->paginate(10);
        return view('web_bpbd.index', compact('bpbdjabar'));
    }
    public function profilpenjabat()
    {
        return view('web_bpbd.profilpenjabat');
    }
}
