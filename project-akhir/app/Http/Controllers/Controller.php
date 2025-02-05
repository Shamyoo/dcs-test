<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
   
    public function index()
    {
        return view('pelanggan.page.home',[
        'title'  => 'Home',
        ]);
        
    }

    
    public function shop()
    {
        return view('pelanggan.page.shop',[
        'title'  => 'Shop',
        ]);
        
    }

    
    public function transaksi()
    {
        return view('pelanggan.page.transaksi',[
        'title'  => 'transaksi',
        ]);
        
    }

   
    public function contact()
    {
        return view('pelanggan.page.contact',[
        'title'  => 'Contact Us',
        ]);
        
    }


    public function admin()
    {
        return view('admin.layout.login',[
        'title'  => 'Admin',
        ]);
        
    }

    public function checkOut()
    {
        return view('pelanggan.page.checkOut',[
        'title'  => 'Check Out',
        ]);
        
    }

    
    

}