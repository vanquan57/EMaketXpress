@extends('admin.layouts.home')
@section('content')
    <div>
        <div class="card-content ">
            <table class="border-2">
                <thead>
                    <tr>
                        <th >id</th>
                        <th>username</th>
                        <th>avatar</th>
                        <th >email</th>
                        <th>password</th>
                        <th>active</th>
                        <th>role</th>
                        <td class="w-28">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr id="{{$user->id}}">
                            <td >{{$user->id}}</td>
                            <td >{{$user->username}}</td>
                            <td><img class="w-45 h-32" src="{{$user->avatar}}" alt=""></td>   
                            <td >{{$user->email}}</td>
                            <td >{{$user->password}}</td>
                            <td >{{$user->active}}</td>
                            <td>{{$user->role}}</td>
                            <td>                 
                                    {{-- <a href="/admin/accounts/edit/{{$user->id}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a> --}}
                                    <a class="button small red --jb-modal" href="#" onclick="removeRow1({{$user->id}}, '/admin/accounts/destroy')">                                
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
