@extends('layouts.layout')
@section('content')
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Ticket</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('tickets/update/'.$ticket->id)}}">
                            @csrf
                            @method('patch')
                        <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$ticket->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Category</label>
                                <div class="col-md-6">
                                    <select id="category" type="category" class="form-control" name="category">
                                        <option value="{{$ticket->category}}">{{$ticket->category}}</option>
                                        <option value="Technical">Technical</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Shipping">Shipping</option>
                                    </select>
                                </div>
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
