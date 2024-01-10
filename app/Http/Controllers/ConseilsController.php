<?php

namespace App\Http\Controllers;

use App\Models\Conseil;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConseilsController extends Controller
{
    public function index(): View
    {

        return view('conseils' );
    }
}
