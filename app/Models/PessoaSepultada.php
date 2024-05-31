<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaSepultada extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'data_nascimento', 'data_falecimento', 'local_sepulcro'];
}
