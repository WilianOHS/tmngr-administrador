<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Grupo
 *
 * @property $Codigo
 * @property $Tema
 * @property $Docente_id
 * @property $nroAcuerdoAprob
 * @property $HorarioAses
 * @property $MesesDuracion
 * @property $Departamento_id
 * @property $Carrera_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Carrera $carrera
 * @property Departamento $departamento
 * @property Docente $docente
 * @property Estudiante[] $estudiantes
 * @property Jurado $jurado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
{
    protected $table = 'grupo';

    protected $primaryKey = 'Codigo';

    public $incrementing = false;

    use SoftDeletes;

    static $rules = [
		'Codigo' => 'required',
		'Tema' => 'required',
		'MesesDuracion' => 'required',
		'Departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Codigo','Tema','Docente_id','nroAcuerdoAprob','HorarioAses','MesesDuracion','Departamento_id','Carrera_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id_carrera', 'Carrera_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'Codigo', 'Departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'Codigo', 'Docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante', 'Grupo', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jurado()
    {
        return $this->hasOne('App\Models\Jurado', 'Codigo', 'Codigo');
    }
    

}
