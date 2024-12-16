<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketModel extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'assunto',
        'descricao',
        'data_criacao',
        'status',
    ];

    public function selSeller()
    {
        return $this->belongsTo(SellerModel::class);
    }
}