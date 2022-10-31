@extends('layouts.layout')
@section('content')
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Category</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('category/'.$category->id)}}">
                            @csrf
                            @method('patch')
                             <div class="form-group">
                                <label for="name" class="">Category Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{$category->name}}">
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-ticket"></i> update Ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          @endsection
