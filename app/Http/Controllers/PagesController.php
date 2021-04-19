<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class PagesController extends Controller
{
    public function welcomePage()
    {
        return view('pages.index');
    }
    
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    //main section on dashboard
    public function show_main_section()
    {
        $main = Main::first();
        return view('pages.mainSection', compact('main'));
    }



    public function show_edit_service()
    {
        return view('pages.editService');
    }
    public function show_edit_aboutMe()
    {
        return view('pages.editAboutMe');
    }
    public function show_edit_contactMe()
    {
        return view('pages.editContactMe');
    }
    public function show_edit_portfolio()
    {
        return view('pages.editPortfolio');
    }


}
