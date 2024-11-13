<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = DB::table('tickets')
        ->join('users','tickets.user_id','=','users.id')
        ->select('tickets.*',"users.name")
        ->get();
        return view('ticket.index',['tickets'=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users=DB::table('users')
        ->orderby ('name')
        ->get();
        return view('ticket.new',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ticket = new Ticket();
        $ticket->nombre=$request->name;
        $ticket->asunto=$request->asunto;
        $ticket->descripcion=$request->descri;
        $ticket->prioridad=$request->prioridad;
        $ticket->estado=$request->estatus;
        $ticket->user_id=$request->asignado;
        $ticket->phone=$request->phone;
        $ticket->save();

        $tickets = DB::table('tickets')
        ->join('users', 'tickets.user_id','=','users.id')
        ->select('tickets.*',"users.name")
        ->get();
        return view('ticket.index',['tickets'=>$tickets]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $ticket = Ticket::find($id);
        $users =DB::table('users')
        ->orderBy('name')
        ->get();
        return view('ticket.edit', ['ticket'=>$ticket, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ticket = Ticket::find($id);

        $ticket->nombre=$request->name;
        $ticket->asunto=$request->asunto;
        $ticket->descripcion=$request->descri;
        $ticket->prioridad=$request->prioridad;
        $ticket->estado=$request->estatus;
        $ticket->user_id=$request->asignado;
        $ticket->phone=$request->phone;
        $ticket->save();

        $tickets = DB::table('tickets')
        ->join('users', 'tickets.user_id','=','users.id')
        ->select('tickets.*',"users.name")
        ->get();
        return view('ticket.index',['tickets'=>$tickets]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      //

        $ticket= Ticket::find($id);
        $ticket->delete();

        $tickets = DB::table('tickets')
        ->join('users','tickets.user_id','=','users.id')
        ->select('tickets.*',"users.name")
        ->get();
        return view('ticket.index', ['tickets'=>$tickets]);
    }
}
