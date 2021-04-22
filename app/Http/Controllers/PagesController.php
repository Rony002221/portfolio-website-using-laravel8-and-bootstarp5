<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;

class PagesController extends Controller
{
    public function welcomePage()
    {
        $data = Main::first();
        $showData = Service::all();
        return view('pages.index', compact('data','showData'));
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

    //service section

    public function show_edit_service()
    {
        return view('pages.editService');
    }
    
    public function dashboard_serviceSection()
    {
        return view('pages.service.createService');
    }
    public function dashboard_serviceDataCreate(Request $req)
    {
        $this->validate($req, [

            'icon'=> "required|string",
            'title'=> "required|string",
            'description'=> "required|string",
        ]);

        $service = new Service();
        $service->icon = $req->icon;
        $service->title = $req->title;
        $service->description = $req->description;

        $service->save();

        return redirect()->route('service_create')->with('msg', 'Change Data successfully !!');
    }

    public function dashboard_serviceList()
    {
        $list = Service::all();
        return view('pages.service.serviceList', compact('list'));
    }
    public function dashboard_delete_serviceList($id)
    {
        Service::destroy($id);
        return redirect()->route('service_list')->with('msg', "Deleted Successfully !!");
    }

    
    public function dashboard_edit_serviceList($id)
    {
        $x['edit_data'] = Service::where('id', $id)->first();
        return view('pages.service.editList', $x);
    }
    public function dashboard_update_serviceList(Request $req, $id)
    {
        Service::findOrFail($id)->update([
            'icon' => $req->icon,
            'title' => $req->title,
            'description' => $req->description,

        ]);

        return redirect()->route('service_list');
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

            'title'=> 'required|string',
            'sub_title'=> 'required|string',
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
