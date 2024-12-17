<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRequest;
use App\Models\SellerModel;

class SellerController extends Controller
{
    private $objSeller;

    public function __construct()
    {
        $this->objSeller = new SellerModel();
    }

    public function index()
    {
        $seller = $this->objSeller->paginate();
        return view('sellers.index', compact('seller'));
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(SellerRequest $request)
    {
        $cad=$this->objSeller->create([
            'nome' =>$request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'status' => $request->status,
            'quantidade_tickets' => $request->quantidade_tickets
        ]);
        if ($cad) {
            return redirect('sellers');
        }
    }

    public function show(string $id)
    {
        $seller = $this->objSeller->find($id);
        return view('sellers.show', compact('seller'));
    }

    public function edit(string $id)
    {
        $seller = $this->objSeller->find($id);
        return view('sellers.create', compact('seller'));
    }

    public function update(SellerRequest $request, string $id)
    {
        $this->objSeller->where('id', $id)->update([
            'nome' =>$request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'status' => $request->status,
            'quantidade_tickets' => $request->quantidade_tickets,
        ]);
        return redirect('sellers');
    }

    public function destroy(string $id)
    {
        $this->objSeller->destroy($id);
        return redirect('sellers');
    }
}