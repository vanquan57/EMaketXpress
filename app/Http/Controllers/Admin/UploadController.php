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
    }
}
