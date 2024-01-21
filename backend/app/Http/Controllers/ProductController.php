<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //อ่านข้อมูลทั้งหมด
        return Product::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //ร้องขอการ validate ตรวจสอบ
        $request->validate([
            'name'=>'required|min:5',
            'slug'=>'required',
            'price'=>'required'
        ]);
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //แก้ไขข้อมูล
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //ค้นหา
        $product = Product::find($id);
        //สั่งแก้ไข
        $product->update($request->all());
        //ส่งออกไป
        return $product;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //ลบ
        return Product::destroy($id);
    }
}
