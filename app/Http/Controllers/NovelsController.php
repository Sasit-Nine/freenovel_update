<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novels;

class NovelsController extends Controller
{
    function welcome(){
        $novel=novels::orderByDesc('id')->where('status',true)->get();
        return view('welcome',compact('novel'));
    }
    function catlist(){
        return view('catlist');
    }
    function resume(){
        return view('resume');
    }
    function allnovel(){
        $novel=novels::orderByDesc('id')->where('status',true)->get();
        return view('allnovel',compact('novel'));
    }
    function read($id){
        $novel=novels::find($id);
        return view('read',compact('novel'));
    }
    function category($cat){
        if ($cat=='love') {
            $novelcat=novels::orderByDesc('id')->where('category',"นิยายรัก")->where('status',true)->get();
            $namecat="นิยายรัก";
            return view('category',compact('novelcat','namecat'));
        } 
        elseif ($cat=='horror') {
            $novelcat=novels::orderByDesc('id')->where('category',"สยองขวัญ")->where('status',true)->get();
            $namecat="นิยายสยองขวัญ";
            return view('category',compact('novelcat','namecat'));
        }
        elseif ($cat=='fantasy') {
            $novelcat=novels::orderByDesc('id')->where('category',"แฟนตาซี")->where('status',true)->get();
            $namecat="นิยายแฟนตาซี";
            return view('category',compact('novelcat','namecat'));
        }
        elseif ($cat=='investigate') {
            $novelcat=novels::orderByDesc('id')->where('category',"สืบสวน")->where('status',true)->get();
            $namecat="นิยายสืบสวน";
            return view('category',compact('novelcat','namecat'));
        }
        else {
            $novelcat=novels::orderByDesc('id')->where('category',"ตลก")->where('status',true)->get();
            $namecat="นิยายตลก";
            return view('category',compact('novelcat','namecat'));
        }
        
        
        return view('novelcat');
    }
}
