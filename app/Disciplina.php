<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function professor(){
        return $this->belongsTo('\App\Professor');
    }
    public function curso(){
        return $this->belongsTo('\App\Curso');
    }
    public function aluno() {
        return $this->belongsToMany('\App\Aluno', 'matriculas');
    }
}
