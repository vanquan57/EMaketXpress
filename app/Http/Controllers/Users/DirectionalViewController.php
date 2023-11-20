<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;

class DirectionalViewController extends Controller
{
    public function directionalView(Request $request, $slug)
    {
        $categoryName = Categories::where('Slug', $request->path())->first();
        if ($categoryName) {
            $mapping = [
                'coupon-xin' => ['view' => 'discountevent', 'title' => $categoryName->Name],
                'emaketxpress-yeu' => ['view' => 'specialtyevent', 'title' => $categoryName->Name],
                'nu' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2))],
                'nam' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(18, 3)->concat($this->getCategoryItems(59, 4))->concat($this->getCategoryItems(4, 1))],
                'tre-em' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(90, 6)->concat($this->getCategoryItems(97, 2))],
            ];
            if (isset($mapping[$slug])) {
                $data = $mapping[$slug];
                return view($data['view'], ['title' => $data['title'], 'arrayCategories' => isset($data['categories']) ? $data['categories'] : null]);
            }
        } else {
            return view('productdetails', [
                'title' => 'Tên Sản Phẩm',
            ]);
        }
    }
    private function getCategoryItems($parentId, $number)
    {
        $categories = Categories::where('ParentId', $parentId)
            ->whereNotNull('Image')
            ->take($number)
            ->get();

        return $categories->isNotEmpty() ? $categories : collect();
    }


    // 

}
