<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Influencer;
class InfluencerController extends Controller
{
 public function index()
    {
    return view('admin.influencer.index');
    }

    public function create()
    {
        return view('admin.influencer.create');
    }
   public function store(InfluencerFormRequest $request)
    {
        /* It accepts an instance of InfluencerFormRequest as a parameter.
         This class  contains validation rules for incoming data*/

        $validatedData = $request->validated();
        $influencer = new Influencer;
        $influencer->name = $validatedData['name'];
        $influencer->email = $validatedData['email'];
        $influencer->phone =$validatedData['phone'];
        //  this line of code is responsible for generating and assigning a URL-friendly slug for the influencer based on the validated data.
    //    his means it converts spaces to hyphens, removes special characters, and makes the string lowercase.
        $influencer->description = $validatedData['description'];

        $uploadPath = 'uploads/influencer/';
        if ($request->hasFile('image')) {
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            //current timestamp
            $file->move('uploads/influencer/', $filename);
            $influencer->image = $uploadPath . $filename;
        }

        $influencer->save();

        return redirect('/admin/influencer')->with('message', 'influencer Added Successfully');
    }
    public function edit(Influencer $influencer)
    {
        return view('admin.influencer.edit', compact('influencer'));
    }
    public function update(InfluencerFormRequest $request, $influencer)
    {
        //dd($request->all());
        $influencer = Influencer::findOrFail($influencer);
        //retrieve and work with specific records from the database for further manipulation
        $validatedData = $request->validated();
        $influencer->name = $validatedData['name'];
        $influencer->email = $validatedData['email'];
        $influencer->phone =$validatedData['phone'];
        $influencer->description = $validatedData['description'];
        if ($request->hasFile('image')) {

            $uploadPath = 'uploads/influencer/';

            $path = 'uploads/influencer/' . $influencer->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file(('image'));
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/influencer/', $filename);
            $influencer->image =$uploadPath.$filename;


        }
      

        $influencer->update();
        return redirect('/admin/influencer')->with('message', 'influencer updated Successfully');
    }
}

