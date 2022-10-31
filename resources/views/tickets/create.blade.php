@extends('layouts.layout')
@section('content')
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Ticket</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{url('tickets/store')}}">
                            @csrf
                        <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control" name="title" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Category</label>

                                <div class="col-md-10">
                                    <select id="category" type="category" class="form-control" name="category">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-ticket"></i> Create Ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
