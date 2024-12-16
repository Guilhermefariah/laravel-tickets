<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerModel extends Model
{
    protected $table = 'sellers';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'status',
        'quantidade_tickets'
    ];

    public function selTickets()
    {
        return $this->hasMany(TicketModel::class);
    }
}