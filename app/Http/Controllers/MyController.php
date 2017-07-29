<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ortu;
use App\budak;
class MyController extends Controller
{
    //
    public function index()
    {
    	$a="Dani Ramdani";
    	return "Nami Sing Kuring Nyaeta <b>".$a."</b>";
    }
    public function tampilan()
    {
    	return view('about');
    }
    public function model()
    {
    	$ortu=ortu::all();
    	return view('about', compact('ortu'));
    }
    public function model1()
    {
    	$budak=budak::all();
    	return view('anak', compact('budak'));
    }
}
