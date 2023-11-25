<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;

class ChildGirlsController extends Controller
{
    public function index(Request $request){
      $categoryCurrent = Categories::where('Slug',$request->path())->first();
      $categoryParent = Categories::where('CategoryID',$categoryCurrent->ParentId)->first();
      $categoryBigParent = Categories::where('CategoryID',$categoryParent->ParentId)->first();
      return view('productbycategorieschild', [
        'title' => $categoryCurrent->Name,
        'categoryParent' => $categoryParent,
        'categoryCurrent'=>$categoryCurrent,
        'categoryBigParent'=>$categoryBigParent,
      ]);
    }
    public function getProduct(Request $request){
      $listProducts = Categories::where('Slug', 'LIKE', '%'.$request->path().'%')->get();
    }
}
