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
    
    
    public function dashboard_mainSection(Request $request)
    {
        $this->validate($request, [

            'title'=> "required|string",
            'sub_title'=> "required|string",
        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if($request->file('bg_img')){
            $img_file = $request->file('bg_img');
            $img_file->storeAs('public/img/','header_bg.' . $img_file->getClientOriginalExtension());
            $main->bg_img = 'storage/img/header_bg.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/','cv.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/cv.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect()->route('dashboard.main_section')->with('msg', 'Update Successfull !');

    }


}
