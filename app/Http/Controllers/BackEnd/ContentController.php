<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use App\Video;
use App\Post;
use Session;
use Image;
use Illuminate\Support\Facades\File;
class ContentController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('backEnd.pages.create');
    }
    public function store(Request $request){
	    	$this->validate($request,[
	    		'type'=>'required',
	    		'title'=>'required',
	    		'desc'=>'required',
	    		'position'=>'required',
	    		'brief'=>'required'

	    	]);
	    	if($request->type == 1){
		    		$this->validate($request,[
		    		'link'=>'required'

	    		]);
	    	}
	    	else{
	    		$this->validate($request,[
		    		'image'=>'required'

	    		]);
	    	}

	    	$content = new Content();
	    	$content->type = $request->type;
	    	$content->position = $request->position;
	    	if($content->type==1){
	    		$title = Video::where('title', $request->title)->first();	
	    		if(is_null($title)){
	    			$content->save();
	    			$video = new Video();
			    	$video->content_id = $content->id;
			    	$video->title = $request->title;
			    	$video->brief = $request->brief;
			    	$video->desc = $request->desc;
			    	$video->link = $request->link;
			    	$video->save();
			    	Session::flash('success','New Video Content has been added Sucessfully');
	    		}	
	    		else
	    			Session::flash('error','video is already uploaded!Duplicate Entry is not allowed');
	    		
	    			
	    	}
	    	if($content->type==2){
	    		$title = Post::where('title', $request->title)->first();
	    		if(is_null($title)){
	    			$content->save();
		    		$post = new Post();
		    		$post->content_id = $content->id;
		    		$post->title = $request->title;
		    		$post->brief = $request->brief;
		    		$post->desc = $request->desc;
		    		if(!is_null($request->image)){
		                $img = time().'.'.$request->file('image')->getClientOriginalExtension();
		                $location = public_path('images/posts/'.$img);
		                Image::make($request->image)->save($location);
		                $post->image = $img;
	                
	        		}
		  
		    		$post->save();
		    		Session::flash('success','New Post Content has been added Sucessfully');
		    	}
		    	else
	    			Session::flash('error','Post is already uploaded! Duplicate Entry is not allowed');
	    	}
	    	return back();
    	}
    	public function manage(){
    		$contents = Content::all();
    		return view('backEnd.pages.manage',compact('contents', $contents));
    	}
    	public function update($id){
    		$content = Content::find($id);
    		if($content->action){
    			$content->action=0;
    		}
    		else
    			$content->action=1;
    		$content->save();
    		return back();
    	}
   }

