<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreateRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Str;

class ProductController extends Controller
{
    use FileUploadTrait;

    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        /**Thy Category ID */
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request) : RedirectResponse
    {
        /** Image File*/

        $imagePath = $this->uploadImage($request, 'image');

        $product = new Product();
        $product->thumb_img = $imagePath;
        $product->name = $request->name; //Cake Buttercream
        $product->slug = generateUniqueSlug('Product', $request->name);//Cake-buttercream
        $product->category_id= $request->category;
        $product->price = $request->price;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->sku = $request->sku;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->show_at_home = $request->show_at_home;
        $product->status = $request->status;
        $product->save();


        toastr()->success('Product Created Successfully');
        return to_route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('categories', 'product'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, string $id)
    {
        $product=Product::findOrFail($id);

                $imagePath = $this->uploadImage($request, 'image', $product->thumb_img);
                $product->thumb_img = !empty($imagePath) ? $imagePath : $product->thumb_img;
                $product->name = $request->name;
                $product->category_id = $request->category;
                $product->price = $request->price;
                $product->short_description = $request->short_description;
                $product->long_description = $request->long_description;
                $product->sku = $request->sku;
                $product->seo_title = $request->seo_title;
                $product->seo_description = $request->seo_description;
                $product->show_at_home = $request->show_at_home;
                $product->status = $request->status;
                $product->save();

                toastr()->success('Update Successfully');
                return to_route('admin.product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : Response
    {
        try{
            $product = Product::findOrFail($id);
            $this->removeImage($product->thumb_img);
            $product->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        }catch(\Exception $e){
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
