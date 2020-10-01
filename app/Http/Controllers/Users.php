<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function home(Request $req){
        return view('public/home');
    }

    public function add(Request $req){
        $data = DB::table('category')->get();
        return view("public/add_post",["category"=>$data]);
    }
    
    public function addPost(Request $req){
        $req->validate([
            'title'=>'required',
            'city'=>'required',
            'state'=>'required',
            'description'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'model'=>'required',
            'name'=>'required',
            'contact'=>'required',
            'image'=>'required',
        ]);

        $filename = time() .".".$req->image->extension();
        $req->image->move(public_path('image'),$filename);

        $run = DB::table('product')->insert(
            [
                'title'=>$_POST['title'],
                'image' => $filename,
                'category'=>$_POST['category'],
                'address'=>$_POST['address'],
                'city'=>$_POST['city'],
                'state'=>$_POST['state'],
                'brand'=>$_POST['brand'],
                'model'=>$_POST['model'],
                'description'=>$_POST['description'],
                'name'=>$_POST['name'],
                'contact'=>$_POST['contact'],
                'price'=>$_POST['price'],
            ]
            );

        return redirect()->back();
    }
}
