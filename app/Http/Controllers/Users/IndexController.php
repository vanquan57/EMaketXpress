<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $arrayCategoriesGirls =$this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2));
    //     $arrayCategoriesBoys =$this->getCategoryItems(18, 3)->concat( $this->getCategoryItems(59, 4))->concat( $this->getCategoryItems(4, 1));
    //     $arrayCategoriesChildrens =$this->getCategoryItems(90, 6)->concat( $this->getCategoryItems(97, 2));

    //     return view('index', 
    //     [
    //         'title'=> 'Trang Chủ',
    //          'arrayCategoriesGirls' => $arrayCategoriesGirls,
    //          'arrayCategoriesBoys' => $arrayCategoriesBoys,
    //          'arrayCategoriesChildrens' => $arrayCategoriesChildrens,
    //     ]);
        
      
    // }
    
    // private function getCategoryItems($parentId, $number){
    //     return Categories::where('ParentId', $parentId);
    // }


    // private function getCategoryItems($parentId, $number){
    //     return Categories::where('ParentId', $parentId)->take($number)->get();
    // }
    
    public function index()
    {
        $arrayCategoriesGirls = $this->getCategoryItems(10, 6)->merge($this->getCategoryItems(26, 2))->all();
        $arrayCategoriesBoys = $this->getCategoryItems(18, 3)->merge($this->getCategoryItems(59, 4))->merge($this->getCategoryItems(4, 1))->all();
        $arrayCategoriesChildrens = $this->getCategoryItems(90, 6)->merge($this->getCategoryItems(97, 2))->all();
    
        return view('index', [
            'title'=> 'Trang Chủ',
            'arrayCategoriesGirls' => $arrayCategoriesGirls,
            'arrayCategoriesBoys' => $arrayCategoriesBoys,
            'arrayCategoriesChildrens' => $arrayCategoriesChildrens,
        ]);
    }
    
    private function getCategoryItems($parentId, $number){
        return Categories::where('ParentId', $parentId)->take($number)->get();
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
