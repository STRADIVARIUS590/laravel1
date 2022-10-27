<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Reservation extends Model
{

    /*           $table->id();
            $table->integer('room_id');
            $table->string('client_card');
            $table->date('reservation_date');
            $table->float('price');
            $table->unsignedBigInteger('client_id'); */
    use HasFactory;
    protected $fillable = ['room_id', 'client_card', 'reservation_date','price'];


    public function client(){
        return $this->belongsTo(Client::class);
    }
}
