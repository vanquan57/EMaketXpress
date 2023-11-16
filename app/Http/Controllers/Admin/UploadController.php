<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $image->storeAs('uploads', $name, 'public');
                return response()->json(['success' => true, 'url' => '/storage/uploads/' . $name]);

            } catch (\Throwable $th) {
                return response()->json(['success' => false, 'url' => '']);
            }
        }
        if ($request->hasFile('avatar')) {
            if ($request->hasFile('avatar')) {
                $urls = []; // Mảng để lưu trữ URL
            
                foreach ($request->file('avatar') as $image) {
                    try {
                        $name = $image->getClientOriginalName();
                        $image->storeAs('uploads', $name, 'public');
                        $urls[] = '/storage/uploads/' . $name; // Lưu mỗi URL vào mảng
                    } catch (\Throwable $th) {
                        return response()->json(['success' => false, 'url' => '']);
                    }
                }
            
                return response()->json(['success' => true, 'urls' => $urls]);
            } else {
                return response()->json(['success' => false, 'url' => '']);
            }
        }
        
    }
}
