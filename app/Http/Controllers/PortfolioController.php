<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


use  App\Models\Pet;

class PortfolioController extends Controller
{
    public function common()
    {
        return view("main.common");
    }

    public function check()
    {
        return view("main.check");
    }

    public function index()
    {
        return view('main.index');
    }

    public function about()
    {
        return view('main.about');
    }

    public function search_dog()
    {
        $pet = Pet::where('type','==',0)->orderBy('id','desc')->paginate(9);
        return view('main.search_dog',compact('pet'));
    }

    public function search_cat()
    {
        $pet = Pet::where('type','!=',0)->orderBy('id','desc')->paginate(9);
        return view('main.search_cat',compact('pet'));
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function add()
    {
        return view('management.add');
    }

    public function store(Request $request)
    {

        $image = $request->file("image");
        $path = isset($image)?$image->store("image","public"):"";

        $post = Pet::create([
            "type"=>$request->type,
            "gender"=>$request->gender,
            "kind"=>$request->kind,
            "old"=>$request->old,
            "size"=>$request->size,
            "vaccine"=>$request->vaccine,
            "surgery"=>$request->surgery,
            "background"=>$request->background,
            "terms"=>$request->terms,
            "others"=>$request->others,
            "image"=>$path,
            "situation"=>$request->situation,
            "receipt"=>$request->invoice,
            "total_price"=>$request->total_price,
        ]);
        return back()->with('message','新規登録しました。');
    }

    public function show($id){
        $id = Pet::find($id);
        return view("main.show",compact("id"));
    }
}
