<?php

namespace App\Http\Controllers\Admin;

use app\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::whereBetween('ParentId', [0, 9])->get();
        return view('admin.category.category', [
            'title' => 'Category',
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ], [
            'category_name.required' => 'Tên danh mục không được để trống'
        ]);
        try {
            $slug = Str::of($request->input('category_description'))->slug('-');
            Categories::create([
                'Name' => (string)$request->input('category_name'),
                'Description' => (string)$request->input('category_description'),
                'Slug' => (string)$slug,
                'ParentId' => (int)$request->input('parentId'),
                'Active' => (int)$request->input('active'),
                'Image' => (string)$request->input('newAvatar'),
                'CategoryProductAvatar' => (string)$request->input('urlCategoryProductAvatar'),
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorInsertCategory', 'Thêm Danh mục thất bại vui lòng thử lại sau');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Categories::whereBetween('ParentId', [0, 9])->get();

        $category = Categories::where('CategoryID', $id)->first();
        return view('admin.category.editcategories', ['title' => 'Edit Category', 'category' => $category, 'categories' => $categories]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required'
        ], [
            'category_name.required' => 'Tên danh mục không được để trống'
        ]);
        try {
        $slug = Str::of($request->input('category_description'))->slug('-');

            Categories::where('CategoryID', $id)->update([
                'Name' => (string)$request->input('category_name'),
                'Description' => (string)$request->input('category_description'),
                'Slug' => (string)$slug,
                'ParentId' => (int)$request->input('parentId'),
                'Active' => (int)$request->input('active'),
                'Image' => (string)$request->input('newAvatar'),
                'CategoryProductAvatar' => (string)$request->input('urlCategoryProductAvatar'),

            ]);
            return redirect()->route('listCategories');
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorUpdateCategory', 'Thêm Danh mục thất bại vui lòng thử lại sau');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $categoryId = $request->input('id');
        $category = Categories::where('CategoryID', $categoryId)->first();

        $this->deleteCategoryAndChildren($categoryId);
        return response()->json(['success' => true]);
    }
    protected function deleteCategoryAndChildren($categoryId)
    {
        $category = Categories::where('CategoryID', $categoryId)->first();
        if (!$category) {
            return response()->json(['success' => false]);
        }
        $children = Categories::where('ParentId', $categoryId)->get();

        foreach ($children as $child) {
            $this->deleteCategoryAndChildren($child->CategoryID);
        }

        $category = Categories::where('CategoryID', $categoryId)->delete();

    }

    public function showViewListCategories()
    {
        $listCategories = Categories::get();
       
        return view('admin.category.listcategories', ['title' => 'List categories', 'listCategories' => $listCategories]);
    }
}
