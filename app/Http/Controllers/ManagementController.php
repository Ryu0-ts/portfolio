<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FormCheckRequest;
use  App\Models\Pet;

class ManagementController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
        return view("management.index");
    }

    public function list()
    {
        $list = Pet::paginate(30);
        return view("management.list",compact("list"));
    }

    public function show($id)
    {
        $id = Pet::find($id);
        return view("management.show",compact("id"));
    }

    public function add()
    {
        return view('management.add');
    }

    public function store(FormcheckRequest $request)
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

    public function edit($id)
    {
        $id = Pet::find($id);
        return view("management.edit",compact("id"));
    }

    public function update(FormcheckRequest $request,$id)
    {
        $image = $request->file("image");
        $path = isset($image)?$image->store("image","public"):"";

        $param = [
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
        ];

        $id = Pet::find($id);
        $id->update($param);

        return back()->with('message','更新しました');
    }

    public function delete($id)
    {
        $id = Pet::find($id);
        $id->delete();
        Storage::disk("public")->delete($id->image);
        return redirect()->route("management.list");

    }

}
