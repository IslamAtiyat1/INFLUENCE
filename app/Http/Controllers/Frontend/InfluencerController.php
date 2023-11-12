<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Influencer;


class InfluencerController extends Controller
{
    //
   public function index()
    {
        $influencer  = Influencer::all() ;
        return view('frontend.index', compact('influencer'));
    }



}
