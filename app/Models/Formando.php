<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formando extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'telemovel',
        'data_nascimento',
        'tipo_documento_id',
        'estado_civil_idd',
        'nr_documento',
        'niss',
        'nif',
        'nacionalidade_id',
        'naturalidade_id',
        'habilitacoes_id',
        'area_curso',
        'ano_conclusao',
        'estabelecimento_enino',
        'certificado',
        'sit_prof_subsidio_id',
        'tempo_em_meses_empregado',
        'ultima_proff',
        'empresa_id',
        'morada',
        'id_concelho',
        'cod_postal'
    ];




    protected $table = 'formandos';


    public function tipoDocumento(){
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id')->value('tipo');
    }

    public function estadoCivil(){
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_id')->value('tipo');
    }

    public function nacionalidade(){
        return $this->belongsTo(Pais::class, 'nacionalidade_id')->value('nome');
    }

    public function naturalidade(){
        return $this->belongsTo(Pais::class, 'Naturalidade_id')->value('nome');
    }
    
    public function habilitacoes(){
        return $this->belongsTo(Habilitacoes::class)->value('nome_descritivo');
    }

    public function sitProfSubsidio(){
        return $this->belongsTo(SitProf_Subsidio::class)->value('nome');
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function concelho(){
        return $this->belongsTo(Concelho::class)->value('nome');
    }

    public function inscricao(){
        return $this->hasMany(Inscricao::class);
    }
    
    public function user() 
    { 
      return $this->morphOne(User::class, 'profile');
    }
}
