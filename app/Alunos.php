<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{

    protected $fillable = ['nome_aluno','curso','numero_maricula','semestre','status'];
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'alunos';

    // Aqui está o relacionamento
    public function cursos(){
        return $this->hasMany('App\Cursos','id','curso');
    }
}
