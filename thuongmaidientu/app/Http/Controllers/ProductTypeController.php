<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;
use App\Models\ProductTypes;
use App\Models\Categories;
use App\Http\Requests\StoreProductTypeRequest;
use Validator;
class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $producttype = ProductTypes::paginate(5);
        return view('admin.pages.producttype.list',compact('producttype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $category = Categories::where('status',1)->get();
        return view('admin.pages.producttype.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( StoreProductTypeRequest $request)
    {
           $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        if(ProductTypes::create($data)){
            return redirect()->route('producttype.index')->with('thongbao','Đã thêm thành công loại sản phẩm');
        }else{
            return back()->with('thongbao','Có lỗi xảy ra xin kiểm tra lại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $producttype = ProductTypes::find($id);
      $category = Categories::where('status',1)->get();
    return response()->json(['category'=>$category,'producttype'=>$producttype],200);
   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validator = Validator::make($request->all(),
        [
           'name' => 'required|min:2|max:255|unique:producttype,name',
        ],
        [
            'name.required' => 'Tên loại sản phẩm không được để trống',
            'name.min' =>'Tên loại sản phẩm phải tối thiểu từ 2 ký tự',
            'name.max' =>'Tên loại sản phẩm phải tối đa từ 2255 ký tự',
            'name.unique'=>'Tên loại sản phẩm đã tồn tại trong hệ thống'
        ]);
        if($validator->fails()){
        return response()->json(['error' => 'true','massenge' => $validator->errors()],200);
        }
         $producttype = ProductTypes::find($id);
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
       if( $producttype->update($data)){
        return response()->json(['result'=>'Đã sửa thành công sản phẩm có id'.$id],200);
       }else{
      return response()->json(['result'=>'Đã sửa không thành công sản phẩm có id'.$id],200);
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producttype = ProductTypes::find($id);
        if($producttype->delete()){
        return response()->json(['result'=>'Đã xóa thành công sản phẩm có id'.$id],200); 
        }else{
      return response()->json(['result'=>'Đã xóa không thành công sản phẩm có id'.$id],200);
     } 
    }
}
