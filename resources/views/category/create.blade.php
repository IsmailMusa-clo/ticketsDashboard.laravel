@extends('layouts.layout')
@section('content')

                <div class="panel panel-default">
                    <div class="panel-heading" style="margin-bottom: 10px">Add New category</div>

                    <div class="panel-body ">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('category')}}">
                            @csrf
                        <div class="form-group">
                                <label for="name" class="">Category Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="">
                            </div>

                            <div class="form-group">
                                 <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-ticket"></i> Create Category
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection
