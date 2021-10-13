<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Carrera
 *
 * @property $id_carrera
 * @property $nombre
 * @property $departamento_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Departamento $departamento
 * @property Grupo[] $grupos
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    protected $table = 'carrera';

    protected $primaryKey = 'id_carrera';

    public $incrementing = false;

    use SoftDeletes;

    static $rules = [
		'id_carrera' => 'required',
		'nombre' => 'required',
		'departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_carrera','nombre','departamento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'Codigo', 'departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grupos()
    {
        return $this->hasMany('App\Models\Grupo', 'Carrera_id', 'id_carrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'Carrera_id', 'id_carrera');
    }
    

}
