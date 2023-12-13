@extends('admin.layouts.home')
@section('content')
    <div>
        <div class="card-content ">
            <table class="border-2">
                <thead>
                    <tr>
                        <th >BlogID</th>
                        <th>BlogAvatar</th>
                        <th >Name</th>
                        <th>Description</th>
                        <td class="w-28">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listblogs as $key => $listblog)
                        <tr id="{{$listblog->BlogID}}">
                            <td >{{$listblog->BlogID}}</td>
                            <td>{{$listblog->Name}}</td>
                            <td><img class="w-45 h-32" src="/storage/uploads/{{$listblog->BlogAvatar}}" alt=""></td>   
                            <td>{{$listblog->Description}}</td>      
                            <td>                 
                                    <a href="/admin/blogs/edit/{{$listblog->BlogID}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a>
                                    <a class="button small red --jb-modal" href="#" onclick="removeRow1({{$listblog->BlogID}}, '/admin/blogs/destroy')">                                
                                    <span class="icon"><i class="fas fa-trash"></i></span>                              
                                    </a>

                            </td>
                        </tr>
                @endforeach
                        

                </tbody>
            </table>

        </div>
    </div>
@endsection
