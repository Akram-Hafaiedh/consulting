<?php

namespace App\Http\Controllers;

use App\Models\Conseil;
use App\Models\FAQ;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{

    public function welcome(): View
    {
        return view('welcome');
    }

    public function admin(): View
    {
        $adminUserCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->count();

        $regularUserCount = User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'admin');
        })->count();
        $conseillerUserCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'conseiller');
        })->count();

        $conseilsCount = Conseil::count();

        $quizCount = FAQ::count();

        return view('admin.dashboard', compact('quizCount', 'conseilsCount', 'adminUserCount', 'regularUserCount', 'conseillerUserCount'));
    }

    public function about(): View
    {
        return view('about');
    }

    public function conseils(): View
    {
        $types = ['santé', 'education', 'relation'];

        $conseilsByType = [];

        foreach ($types as $type) {
            $conseilsByType[$type] = Conseil::where('type', $type)
                ->latest()
                ->take(9)
                ->paginate(6);
        }

        return view('conseils', compact('conseilsByType'));
    }

    public function conseillers(): View
    {
        return view('conseillers');
    }

    public function contact(): View
    {
        return view('contact');
    }
    public function faq(): View
    {
        $faqs = FAQ::all();
        return view('faq', compact('faqs'));
    }
    public function privatePolicy(): View
    {
        return view('privacy-policy');
    }

    public function termsAndConditions(): View
    {
        return view('terms-and-conditions');
    }

    public function singleService(): View
    {
        return view('single-service');
    }

    public function news(): View
    {
        return view('news');
    }
}
