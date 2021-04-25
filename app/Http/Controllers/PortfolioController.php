<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function dashboard_portfolio_create()
    {
        return view('pages.portfolio.createPortfolio');
    }
    public function dashboard_portfolio_list()
    {
        return view('pages.portfolio.portfolioList');
    }
    public function dashboard_portfolio_insert(Request $req)
    {
        $img = time(). '-'. $req->photo->getClientOriginalName();
        $req->photo->move(public_path('img'),$img);
        $d = Portfolio::create([
            'p_name' => $req->input('p_name'),
            'p_title' => $req->input('p_title'),
            'p_description' => $req->input('p_description'),
            'p_img' => $img
        ]);
        return redirect()->route('portfolio_create')->with('msg', 'New Portfolio created successfully !!!');
        
    }
}
