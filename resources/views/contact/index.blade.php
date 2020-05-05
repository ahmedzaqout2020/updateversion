@extends('layouts.app')
@section('content')
<div class="container">
    <h1>CRUD app</h1>
    <div><i class="fa fa-fw fa-plus-circle"></i>
        <strong>Add User</strong>
         @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
        <a href="create" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</a>
    </div>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Sr#</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Phone</th>
                    <th class="text-center">Record Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

$count=0;
?>
                @foreach ($contacts as $contact )

               
                <tr>
                    <td>{{$count+=1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td align="center">{{ date('yy-m-d', strtotime($contact->created_at)) }}</td>
                    <td align="center">
                        <a href="/{{$contact->id}}/edit" class="btn btn-primary pl-2"><i class="fa fa-fw fa-edit"></i> Edit</a> |

                        <form action="{{url('delete/'.$contact->id)}}" method="POST">
                            @csrf
                            @method('Delete')
                      <button class="btn btn-danger pl-2"  onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
                        </form>
                    
                    






                        {{-- <a href="{{url('delete/'.$contact->id)}}" class="text-danger"   style='width:30' onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a> --}}
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection