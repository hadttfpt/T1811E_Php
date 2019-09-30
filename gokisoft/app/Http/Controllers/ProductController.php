<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class ProductController extends Controller {
    public function add(Request $request) {
        # code...
//         var_dump($request->all());
        $name = $request->name;
        $image = $request->image;
        $price = $request->price;
        $sale = $request->sale;
        $description = $request->description;
        //insert into database
        DB::table('products')->insert([
            'name'=>$name,
            'image'=>$image,
            'price'=>$price,
            'sale'=>$sale,
            'description'=>$description
        ]);
        //nhap xong tro lai trang de nhap tiep

//        return redirect()->route('view');

        //hien thi thong tin da nhap
//        echo $name.' '.$image.' '.$price.' '.$sale.' '.$description;

        if($name !=''&&$image !=''){
            return redirect()->route('view');
        }
    }
    public function showAll(Request $request) {
        # code...
        $productList = DB::table('products')->get();

        return view('product.viewProduct')->with([
            'productList' => $productList
        ]);
    }
}