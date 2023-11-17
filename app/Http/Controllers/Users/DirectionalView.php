<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;

class DirectionalView extends Controller
{
    public function directionalView($slug){
        if($slug == 'coupon-xin'){
            return view('discountevent', ['title' => 'COUPON XỊN']);
        }
        if($slug == 'emaketxpress-yeu'){
            return view('specialtyevent', ['title' => 'EmaketXpress Yêu']);
        }
        if($slug == 'nu'){
            $arrayCategories =$this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2));
    
            return view('productbycategoriesparent', ['title' => 'Nữ', 'arrayCategories'=> $arrayCategories]);
        }
        if($slug == 'nam'){
            $arrayCategories=$this->getCategoryItems(18, 3)->concat( $this->getCategoryItems(59, 4))->concat( $this->getCategoryItems(4, 1));

            return view('productbycategoriesparent', ['title' => 'Nam', 'arrayCategories'=> $arrayCategories]);
        }
        if($slug == 'tre-em'){
            $arrayCategories =$this->getCategoryItems(90, 6)->concat( $this->getCategoryItems(97, 2));

            return view('productbycategoriesparent', ['title' => 'Trẻ Em', 'arrayCategories'=> $arrayCategories]);
        }
    }
    private function getCategoryItems($parentId, $number){
        return Categories::where('ParentId', $parentId)
                        ->whereNotNull('Image')
                        ->take($number)
                        ->get();
    }
}
