<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store()
    {
        $postData = json_decode(file_get_contents('php://input'), true);
        $text = $postData['text'];
        $max = $postData['max']; 
        $IDproduct = $postData['IDproduct'];
        $currentUser = Auth::user();
        date_default_timezone_set('Asia/Ho_Chi_Minh'); 
        $currentTime = date("Y-m-d H:i:s");
        $checkComment = Comment::where('ID_account', $currentUser->id)->first();
        if ($checkComment) {
            if($max!==$checkComment->Star){
                try { 
                    Comment::where('ID_account', $currentUser->id)->update([
                        'Star' => (string)$max,
                    ]); 
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    return redirect()->back()->with('errorUpdateProductID', 'update  thất bại vui lòng thử lại sau');
                }
            }
            if($max ==0){
                $max =$checkComment->Star;
                try { 
                    Comment::where('ID_account', $currentUser->id)->update([
                        'Star' => (string)$max,
                    ]); 
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    return redirect()->back()->with('errorUpdateProductID', 'update  thất bại vui lòng thử lại sau');
                }
            }
        } 
                try { 
                      Comment::create([
                        'Content' => (string)$text,
                        'Star' => (string)$max,
                        'Time' => $currentTime,
                        'ProductID' => $IDproduct,
                        'ID_account' => $currentUser->id
                    ]);
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    return redirect()->back()->with('errorInsertSlider', 'Thêm  thất bại vui lòng thử lại sau');
                }
                

               $Comment = Comment::join('users', 'comments.ID_account', '=', 'users.id') 
                ->select('users.username', 'comments.*')
               ->where('ProductID',$IDproduct)
               ->where('ID_account',$currentUser->id)
               ->orderBy('comments.Time', 'desc')
               ->get();

         
  

        $response = [
            'message' => 'Dữ liệu đã được xử lý thành công.',
            'max' => $max,
            'text' => $text,
            'Comment' => $Comment,
            'currentTime' => $currentTime,
            'currentUser' => $currentUser->username,
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    }
        

  
    /**
     * Display the specified resource.
     */


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
