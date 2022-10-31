<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
    public function index()
    {
        $tickets =DB::table('tickets')->get();
        return view('tickets.allTickets',compact('tickets'));
    }

    public function create(){
        $categories =DB::table('categories')->get();
         return view('tickets.create',compact('categories'));
    }

    public function store(Request $request){
         DB::table('tickets')->insert([
        'title' =>$request->title,
        'category' =>$request-> category,
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
    return redirect()->back()->with('status', 'successfully inserted');
    }

    public function delete($id)
    {
        DB::table('tickets')->where('id',$id)->delete();
        return redirect()->back()->with('status', 'delete ticket');
    }

    public function edit($id)
    {
        $ticket= DB::table('tickets')->where('id',$id)->first();
        return view('tickets.edit',compact('ticket'));
    }

    public function update($id ,Request $request)
    {
        DB::table('tickets')
        ->where('id',$id)
        ->update([
            'title'=>$request->title,
            'category' => $request->category,
            'updated_at'=>now()
        ]);
        return redirect('tickets')->with('status', 'update ticket');
    }
}
