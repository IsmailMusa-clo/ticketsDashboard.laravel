@extends('layouts.layout')
@section('content')
<div class="">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>

            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                      <th>Title</th>
                    <th>Action</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                  <tr>
                    <td>{{$ticket->category}}</td>
                    <td>
                      <a href="#">
                        #8254 - {{$ticket->title}}
                      </a>
                    </td>
                    <td>
                    <a href="{{url('tickets/delete/' .$ticket->id)}}" class="btn btn-danger">delete</a>
                    <a href="{{url('tickets/edit/'. $ticket->id)}}" class="btn btn-info">update</a>
                    </td>
                    <td>{{$ticket->updated_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>



   @endsection
