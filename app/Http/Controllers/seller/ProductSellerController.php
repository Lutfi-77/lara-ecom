<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;

class ProductSellerController extends Controller
{
    //

    public function index()
    {
        $idUser = Auth::user()->id;
        $getProduct = Product::where('user_id', $idUser)->with('image')->get();
        return view('seller.allProduct', compact('getProduct'));
    }

    public function addProduct()
    {
        $categories = Category::all();
        return view('seller.addProduct', compact('categories'));
    }

    public function detailProduct($id)
    {
        $detailProduct = Product::find($id)->with('image')->first();
        return view('seller.detailProduct', compact('detailProduct'));
    }

    public function storeProduct(Request $request)
    {
        $product = new Product;

        $product->product_name = $request->productName;
        $product->product_desc = $request->productDesc;
        $product->stock = $request->productStock;
        $product->price = $request->productPrice;
        $product->category_id = $request->productCategory;
        $product->user_id = $request->user()->id;

        $product->save();
        return response()->json(['product_id'=>$product->id]);
    }

    public function storeImg(Request $request)
    {
        // dd($request->all());
        // STORE TO STORAGE
        $userId = $request->user()->id;
        $gambars = $request->file('images')->store(
            'public/product/img/'.$userId
        );
        $imgUrl = explode('/', $gambars);
        $imgUrl = end($imgUrl);

        // INSERT TO DATABASE
        $img = new Image;
        $img->product_id = $request->productId;
        $img->url = "product/img/$userId/$imgUrl";
        $img->save();
        return response()->json(['id'=>$request->productId, 'all' => $request->all()]);
    }

    public function addImageProduct($id)
    {
        return view('seller.productAddNewImage', compact('id'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('seller.products');
    }

}
