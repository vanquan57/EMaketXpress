<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{

    public function index()
    {
        // $categories = Categories::whereBetween('ParentId', [0, 9])->get();
        // return view( 'admin.category.category',[
        //     'title' => 'Category',
        //     'categories' => $categories
        // ]);
        return view( 'admin.slider.slider',[
                'title' => 'slider'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'slider_name' => 'required',
            'slider_url' => 'required'
        ], [
            'slider_name.required' => 'Tên tiêu đề không được để trống',
            'slider_url.required' => 'Đường dẫn không được để trống'
        ]);
        
        try {
            Slider::create([
                'name' => (string)$request->input('slider_name'),
                'url' => (string)$request->input('slider_url'),
                'thumb' => (string)$request->input('avatar'),
                'sort_by' => (integer)$request->input('slider_sort_by'),
                'active' => (integer)$request->input('active'),
            ]);
            return redirect()->back();

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorInsertSlider', 'Thêm slider thất bại vui lòng thử lại sau');
        }
        
    }
    public function update(Request $request, $id)
    {
        $imagePath = $request->thumb;
        $pathInfo = pathinfo($imagePath);
        $filenameWithExtension = $pathInfo['filename'] . '.' . $pathInfo['extension'];
         $request->validate([
            'slider_name' => 'required',
            'slider_url' => 'required'
        ], [
            'slider_name.required' => 'Tên tiêu đề không được để trống',
            'slider_url.required' => 'Đường dẫn không được để trống'
        ]);
        try {
            $id = intval($id);
            Slider::where('id', $id)->update([
                'name' => (string)$request->input('slider_name'),
                'url' => (string)$request->input('slider_url'),
                'thumb' =>(string) "$filenameWithExtension",
                'sort_by' => (integer)$request->input('slider_sort_by'),
                'active' => (integer)$request->input('active'),
            ]);
            return redirect()->route('listsliders');
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorUpdateCategory', 'Sử Slider thất bại vui lòng thử lại sau');
        }
        
    }
    public function showViewListSlider(){
        $listsliders = Slider::get();
        // dd($listsliders);
        return view('admin.slider.listslider', [
            'title'=> 'List sliders', 
            'listsliders'=>$listsliders
        ]);
    }
    public function show($id)
    {
        // orderbyDesc('id')
        $sliders = Slider::whereBetween('id', [0, 9])->get();
        $slider = Slider::where('id', $id)->first();
        return view('admin.slider.editslider', [
            'title' => 'Edit slider',
            'slider' => $slider, 
            'sliders' => $sliders]);

    }
    public function destroy(Request $request)
    {      
        $id = (int)$request->input('id');
        $result = Slider::where('id', $id)->first();
        
        if ($result) {
            Slider::where('id', $id)->delete();
            return response()->json([
                'error' => false
            ]);
        }
    
        return response()->json([
            'error' => true
        ]);
    }
}    
