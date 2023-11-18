@extends('layouts.home')
@section('content')
    <div class="px-2 mx-auto">
        <div>
            @if ($categoryCurrent->CategoryProductAvatar)
            <img src="{{$categoryCurrent->CategoryProductAvatar}}" alt="" class="w-[100%] object-cover">
                
            @endif
        </div>
        
    </div>
@endsection