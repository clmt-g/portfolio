<?php

namespace App\Http\Controllers;

use App\Models\Certification;

class DefaultController extends Controller
{
    /**
     * display the dashboard page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index()
    {
        $certifications = Certification::all();

        return view('dashboard', [
            'certifications' => $certifications,
        ]);
    }
}
