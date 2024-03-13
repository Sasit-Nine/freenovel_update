<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Novels;

class writtercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function novel(){
        $novel=novels::paginate(6);
        return view('blog',compact('novel'));
    }
    function about(){
        $name="นายศศิศ สวนแสดง";
        $date="29 ธันวาคม 2566";
        return view('about',compact('name','date'));
    }
    function write(){
        return view('write');
    }
    
    function insert(Request $request){
        $request->validate(
            [
                'img'=>'required',
                'title'=>'required|max:30',
                'category'=>'required|max:30',
                'content'=>'required'
            ],
            [
                'img'=>'กรุณาอัปโหลดปกนิยาย',
                'title.required'=>'กรุณาป้อนชื่อเรื่อง',
                'title.max:30'=>'ชื่อเรื่องไม่เกิน 30 ตัวอักษร',
                'content.required'=>'กรุณาป้อนเนื้อหา'
            ]
        );
        if ($request->hasFile('img')) {
            $filename=$request->getSchemeAndHttpHost().'/assets/img/'.time().'.'.$request->img->extension();
            $request->img->move(public_path('/assets/img/'),$filename);
        }
        
        $data=[
            'img'=>$filename,
            'title'=>$request->title,
            'category'=>$request->category,
            'content'=>$request->content,
            'status'=>$request->status
        ];
        novels::insert($data);
        return redirect('/author/blog');
    }

    function delete($id){
        novels::find($id)->delete();
        return redirect()->back();
    }
    function change($id){
        $blog=novels::find($id);
        $data=[
            'status'=>!$blog->status
        ];
        novels::find($id)->update($data);
        return redirect('/author/blog');
    }
    function edit($id){
        $novel=novels::find($id);
        return view('edit',compact('novel'));
    }

    function update(Request $request,$id){
        $request->validate(
            [
                'title'=>'required|max:50',
                'category'=>'required|max:40',
                'content'=>'required'
            ],
            [
                'title.required'=>'กรุณาป้อนชื่อเรื่อง',
                'title.max:30'=>'ชื่อเรื่องไม่เกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาป้อนเนื้อหา'
            ]
        );
        $data=[
            'title'=>$request->title,
            'category'=>$request->category,
            'content'=>$request->content,
            'status'=>$request->status
        ];
        novels::find($id)->update($data);
        return redirect('/author/blog');
    }
    
}
