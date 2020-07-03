<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use App\Video;
use App\Post;

class ContentController extends Controller
{
    public function index(){
    	$s1 = Content::orderBy('id','desc')->where('action',1)->where('position',1)->get();
    	$s2 = Content::orderBy('id','desc')->where('action',1)->where('position',2)->get();
    	return view('FrontEnd.pages.index')->with(['section1'=>$s1,'section2'=>$s2]);

    }
    public function show($id){
    	$video = Video::where('content_id', $id)->get();
    	$post = Post::where('content_id', $id)->get();
    	return view('FrontEnd.pages.show')->with(['video'=>$video,'post'=>$post]);
    }
}
