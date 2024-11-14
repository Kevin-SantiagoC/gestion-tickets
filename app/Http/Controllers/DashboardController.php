<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los últimos 10 tickets con su respectivo usuario, ordenados por created_at de manera descendente
        $dash = DB::table('tickets')
        ->join('users', 'tickets.user_id', '=', 'users.id')
        ->select('tickets.*', 'users.name')
        ->latest() // Para obtener los últimos 10 tickets
        ->limit(4)
        ->get();

    // Obtener el total de tickets
    $totalTickets = Ticket::count();

    // Obtener los tickets asignados al usuario autenticado
    $assignedTickets = Ticket::where('user_id', auth()->id())->get();

    // Contar la cantidad de tickets en cada estado para el gráfico
    $ticketCounts = DB::table('tickets')
        ->select('estado', DB::raw('count(*) as total'))
        ->groupBy('estado')
        ->pluck('total', 'estado');

    // Convertir los datos en arrays para el gráfico
    $estadoLabels = $ticketCounts->keys()->toArray(); 
    $estadoData = $ticketCounts->values()->toArray(); 

    // Retornar los datos a la vista
    return view('dashboard', compact('dash', 'assignedTickets', 'estadoLabels', 'estadoData', 'totalTickets'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
