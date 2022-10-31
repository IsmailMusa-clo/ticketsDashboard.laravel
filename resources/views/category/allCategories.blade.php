@extends('layouts.layout')
@section('content')
<div class="">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> All Category</i>
            </div>
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                      <th>Category Name</th>
                    <th>update</th>
                    <th>delete</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->name}}</td>
                    <td><a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-info">update</a></td>
                    <td><a href="{{url('category/delete/'.$category->id)}}" class="btn btn-danger">delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
   @endsection
