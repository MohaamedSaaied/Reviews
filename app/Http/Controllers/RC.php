<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class RC extends Controller
{
    public function home(){
        return view('review.home');
    }
    public function about(){
        return view('review.aboutus');
    }    
    public function contact(){
        return view('review.contactus');
    }  
    public function new(){
        return view('review.newpost');
    }   
    public function catigoures(){
        return view('review.catigoures');
    }
    public function newpost(){
        return view('review.newpost');
    }
    public function book(){
        $data=posts::all();
        return view('catigoures.book',['posts'=>$data]);
    }
    public function car(){
        $data=posts::all();
        return view('catigoures.car',['posts'=>$data]);
    }
    public function mov(){
        $data=posts::all();
        return view('catigoures.mov',['posts'=>$data]);
    }
    public function rest(){
        $data=posts::all();
        return view('catigoures.rest',['posts'=>$data]);
    }
    public function add(Request $request){
        $nameext=$request->file('path')->getClientOriginalName();
        $name=pathinfo($nameext,PATHINFO_FILENAME);
        $ext=$request->file('path')->getClientOriginalExtension();
        $sname=$name.'_'.time().'.'.$ext;
        $path=$request->file('path')->storeAs('public\posts',$sname);
        $data=$request->input();
        $post=new posts;
        $post->title=$data['title'];
        $post->catigoure=$data['catigoure'];
        $post->path=$sname;
        $post->review=$data['review'];
        $post->save();
        return view('review.catigoures');
    }
    
}
