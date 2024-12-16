<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\TicketModel;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private $objTicket;

    public function __construct()
    {
        $this->objTicket = new TicketModel();
    }

    public function index()
    {
        $ticket = $this->objTicket->paginate();
        return view('tickets.index', compact('ticket'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $cad=$this->objTicket->create([
            'assunto' => $request->assunto,
            'descricao' => $request->descricao,
            'data_criacao' => $request->data_criacao,
            'status' => $request->status
        ]);
        if ($cad) {
            return redirect('tickets');
        }
    }

    public function show(string $id)
    {
        $ticket = $this->objTicket->find($id);
        return view('tickets.show', compact('ticket'));
    }

    public function edit(string $id)
    {
        $ticket = $this->objTicket->find($id);
        return view('tickets.create', compact('ticket'));
    }

    public function update(TicketRequest $request, string $id)
    {
        $this->objTicket->where('id', $id)->update([
            'assunto' => $request->assunto,
            'descricao' => $request->descricao,
            'data_criacao' => $request->data_criacao,
            'status' => $request->status,
        ]);
        return redirect('tickets');
    }

    public function destroy(string $id)
    {
        $del= $this->objTicket->destroy($id);
        return ($del) ? 'SIM' : 'NÃO';
    }
}