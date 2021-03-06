<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Http\Requests\StoreProductRequest;
use File;
use Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('status',1)->paginate(5);
        return view('admin.pages.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
       $category = Categories::where('status',1)->get();
       $producttype = ProductTypes::where('status',1)->get();
       return view('admin.pages.product.add',compact('producttype','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {     
            $data = $request->all();
        if($request->hasFile('image'))
        {
              $file = $request->image;
              $file_name = $file->getClientOriginalName();
              $file_type = $file-> getMimeType();
              $file_size = $file->getSize();
     if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg'|| $file_type =='image/gif')
             {
                if($file_size <= 1048576)
                {    
                    $file_name = date('DD.mm.yyyy').'_'.rand().'_'.utf8tourl($file_name);
                     
                    if($file->move('img/upload/product',$file_name)){
                         $data = $request ->all();
                         $data['slug'] = utf8tourl($request->name);
                         $data['image'] = $file_name;
                          Product::create($data);
                          return redirect()->route('product.index')->with('thongbao','???? th??m th??nh c??ng s???n ph???m m???i');
                    }
                }else{
                  return back()->with('error','B???n kh??ng th??? upload ???nh qu?? 1mb ');
                     }
              }
              else{
            return back()->with('error','File ch???n kh??ng l?? h??nh ???nh ');
                  }
        }else{
            return back()->with('error','B???n ch??a ch???n ???nh minh h???a cho s???n ph???m ');
             }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $category = Categories::where('status',1)->get();
       $producttype = ProductTypes::where('status',1)->get();
       $product = Product::find($id);
       return response()->json(['category'=> $category ,'producttype' => $producttype,'product' => 
        $product],200);
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
             'name' => 'required|min:2|max:255',
            'description' => 'required|min:2',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'promotional' => 'numeric',
            'image' =>'image',
         ],
         [
            'required' => ':attribute kh??ng ???????c b??? tr???ng',
            'min' => ':attribute t???i thi???u c?? 2 k?? t???',
            'max' => ':attribute t???i ??a c?? 255 k?? t???',
            'numeric' => ':attribute ph???i l?? m???t s??? ',
            'image' => ':attribute kh??ng l?? h??nh ???nh',
            'unique' => ':attribute ???? t???n t???i trong h??? th???ng'
         ],
         [
            'name' => 'T??n s???n ph???m',
            'description' => 'M?? t??? s???n ph???m',
            'quantity' => 'S??? l?????ng s???n ph???m',
            'price' => '????n gi?? s???n ph???m',
            'promotional' => 'Gi?? khuy???n m???i',
            'image' => '???nh minh h???a',
         ]);
         if($validator->fails()){
            return response()->json(['error' => 'true','message' => $validator->errors()],200);
         }
        $data = $request ->all();
        $data['slug'] = utf8tourl($request->name);
        $product = Product::find($id);
        if($request->hasFile('image'))
        {
              $file = $request->image;
              $file_name = $file->getClientOriginalName();
              $file_type = $file-> getMimeType();
              $file_size = $file->getSize();
     if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg'|| $file_type =='image/gif')
             {
                if($file_size <= 1048576)
                {    
                    $file_name = date('DD.mm.yyyy').'_'.rand().'_'.utf8tourl($file_name);
                     
                    if($file->move('img/upload/product',$file_name)){
                            $data['image'] = $file_name;
                        if(File::exists('img/upload/product'.$product->image)){
                            unlink('img/upload/product'.$product->image);
                        }
                    }
                }else{
                  return response()->json(['error'=> '???nh c???a b???n qu?? l???n ch??? ???????c upload d?????i 1mb '.$id],200);
                     }
              }
              else{
              return response()->json(['error'=> 'File b???n ch???n kh??ng ph???i l?? h??nh ???nh '.$id],200);
                  }
        }else{
            $data['image'] = $product->image;
        }
        $product->update($data);
  return response()->json(['result'=> '???? s???a th??nh c??ng s???n ph???m c?? id l?? '.$id],200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(File::exists('img/upload/product/'.$product->image)){
            unlink('img/upload/product/'.$product->image);
        }
        $product->delete();
        return response()->json(['result'=> '???? x??a s???n ph???m c?? id l?? '.$id],200);
     }
   
}
