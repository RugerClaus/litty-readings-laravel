<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function create(Request $request) {
        $file = uniqid('image') . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $file);
        $name = $request->name;
        $desc = $request->desc;
        $price = $request->price;
        DB::table('products')->insert([
            "image" => "http://localhost:8000/uploads/" . $file,
            "name" => $name,
            "description" => $desc,
            "price" => $price
        ]);
        return redirect(route('add.services'));
    }
    public function delete(Request $request) {
        try {
            $id = $request->id;
            DB::table('products')->where('id',$id)->delete();
            return redirect(route('service.manager'));
        } catch (\Exception $e) {
        // handle error
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function update(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $desc = $request->desc;
        $price = $request->price;
        DB::table('products')->where('id',$id)->update([
            "name" => $name,
            "description" => $desc,
            "price" => $price
        ]);
        return redirect(route('service.manager'));
    }
    public function updateImage(Request $request) {
        $id = $request->id;

        $file = uniqid('image') . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('uploads'), $file);

        DB::table('products')->where('id',$id)->update([
            "image" => "http://localhost:8000/uploads/" . $file 
        ]);
        return redirect(route('service.manager'));

    }
}
