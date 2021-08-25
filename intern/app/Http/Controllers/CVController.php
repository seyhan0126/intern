<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index(){
        $cv = CV::all();
        return view('cv.index',['cv' => $cv]);
    }

    public function create(){
        return view('cv.create');
    }

    public function show(CV $cv){
        return view('cv.show',['cv'=>$cv]);
    }

    public function edit(CV $cv){
        return view('cv.edit',['cv'=>$cv]);
    }

    public function update(Request $request,CV $cv){
        $request->validate([
            'first_name' => 'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
            'university_name'=>'required',
            'grade'=>'required',
            'technologies'=>'required',
        ]);
        $technologies = $request->input('technologies');
        $request['technologies']=implode(',',$technologies);
        $cv->update($request->all());

        return redirect()->route('cv.index')->with('success', 'Post updated successfully!');

    }

    public function store(Request $request){
       $request->validate([
            'first_name' => 'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
            'university_name'=>'required',
            'grade'=>'required',
            'technologies'=>'required',
        ]);

        $technologies = $request->input('technologies');
        $request['technologies']=implode(',',$technologies);

        $cv = CV::create($request->all());

        # Redirect back with success message
        return back()->with('success', 'Post created successfully!');

    }

    public function destroy(CV $cv){
        $cv->delete();
        return back()->with('success', 'Post deleted successfully!');
    }

}
