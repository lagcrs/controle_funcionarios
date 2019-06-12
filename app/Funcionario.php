<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model{
    protected $table = 'funcionarios';

    public $timestamps = false;
    protected $fillable = [
        'nome',
        'sobrenome',
        'dataNascimento',
        'email',
        'telefone',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'cargo_id_fk'
    ];
}