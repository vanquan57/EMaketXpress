@extends('admin.layouts.home')
@section('content')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <div>
        <form action="" method="POST" class="p-4 ">
            <div class="mb-4 flex">
                <div class=" flex flex-col  flex-1">
                    <label for="blog_name" class="text-gray-700 font-medium">Tiêu Đề</label>
                    <input type="text" id="blog_name" name="blog_name" placeholder="Tiêu Đề" value="{{$listblogs->Name}}"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                        @if (Session::has('errors'))
                            <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                {{ Session::get('errors')->first('slider_name') }}
                            </div>
                        @endif
                </div>
            </div>
            <div  class="mb-4 flex flex-col ">
                        <input type="file" name="avatar" id="avatarUpload" class="upload control  mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500" >
                        <img id="avatarUploadProfile" src="/storage/uploads/{{$listblogs->BlogAvatar}}" class=" w-52  h-32">
                        <input type="hidden" name="thumb" value="" id="thumbInput">
                        <script>
                            var img = document.getElementById('avatarUploadProfile');
                            var input = document.getElementById('thumbInput');
                            var srcValue = img.getAttribute('src');
                            input.value = srcValue;
                            function updateThumbInput() {                            
                                var fileInput = document.getElementById('avatarUpload');
                                var img = document.getElementById('avatarUploadProfile');
                                var input = document.getElementById('thumbInput');
                                if (fileInput && fileInput.files && fileInput.files.length > 0) {
                                    var newThumbValue = fileInput.files[0].name;
                                    input.value = newThumbValue;
                                } 
                            } 
                        </script>
                  </div>

                  <div class="form-group">
                    <label for="blog_Description">Mô Tả Chi Tiết</label>
                    <textarea name="blog_Description" id="blog_Description" class="form-control">{{$listblogs->Description}}</textarea>
              </div>           
                <script>
                    CKEDITOR.replace('blog_Description');
                </script>
       

            <div class="mt-2">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Update blog</button>
            </div>
            @csrf

        </form>


    </div>
@endsection
