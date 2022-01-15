<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 *
 * @property $Codigo
 * @property $Abreviatura
 * @property $Nombres
 * @property $Apellidos
 * @property $DUI
 * @property $Tipo
 * @property $Carrera
 * @property $Carrera_id
 * @property $Correo
 * @property $Departamento_id
 * @property $Password
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Admin $admin
 * @property Carrera $carrera
 * @property Coord $coord
 * @property Departamento $departamento
 * @property Docente $docente
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'Codigo';

    public $incrementing = false;

    use SoftDeletes;

    static $rules = [
		'Codigo' => 'required',
		'Nombres' => 'required',
		'Apellidos' => 'required',
		'DUI' => 'required',
		'Tipo' => 'required',
		'Carrera' => 'required',
		'Departamento_id' => 'required',
		'Password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Codigo','Abreviatura','Nombres','Apellidos','DUI','Tipo','Carrera','Carrera_id','Correo','Departamento_id','Password'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admin()
    {
        return $this->hasOne('App\Models\Admin', 'Codigo', 'Codigo');
    }
    
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
    public function coord()
    {
        return $this->hasOne('App\Models\Coord', 'Codigo', 'Codigo');
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
        return $this->hasOne('App\Models\Docente', 'Codigo', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'Codigo', 'Codigo');
    }
    

}
