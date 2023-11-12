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
      $influencers = Influencer::latest()->take(7)->get();
        return view('frontend.index', compact('influencers'));
    }
 public function create()
    {
        return view('frontend.register');
    }

    public function store(InfluencerFormRequest $request)
    {
        $validatedData = $request->validated();
        $influencer = new Influencer;
        $influencer->name = $validatedData['name'];
        $influencer->email = $validatedData['email'];
        $influencer->phone = $validatedData['phone'];
        $influencer->description = $validatedData['description'];
        $uploadPath = 'uploads/influencer/';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/influencer/', $filename);
            $influencer->image = $uploadPath . $filename;
        }

        $influencer->save();

        return redirect('/register')->with('message', 'Influencer Added Successfully');
    }


}
