<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lembretes extends Model
{
    protected $table      = 'lembretes';
    protected $primaryKey = 'id';
    protected $fillable   = [ 'nome', 'email', 'data', 'repeticao', 'updated_at'];

}
