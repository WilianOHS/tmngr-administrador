<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departamento
 *
 * @property $Codigo
 * @property $Nombre
 * @property $Trimmed
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Carrera[] $carreras
 * @property Formato[] $formatos
 * @property Grupo[] $grupos
 * @property Jurado[] $jurados
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    protected $table = 'departamento';

    protected $primaryKey = 'Codigo';

    public $incrementing = false;

    use SoftDeletes;

    static $rules = [
		'Codigo' => 'required',
		'Nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Codigo','Nombre','Trimmed'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras()
    {
        return $this->hasMany('App\Models\Carrera', 'departamento_id', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formatos()
    {
        return $this->hasMany('App\Models\Formato', 'departamento_id', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grupos()
    {
        return $this->hasMany('App\Models\Grupo', 'Departamento_id', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jurados()
    {
        return $this->hasMany('App\Models\Jurado', 'Departamento_id', 'Codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'Departamento_id', 'Codigo');
    }
    

}
