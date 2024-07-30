<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planilla
 *
 * @property $id
 * @property $titulo
 * @property $año
 * @property $mes
 * @property $tipo
 * @property $usuario
 * @property $archivo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planilla extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'año' => 'required',
		'mes' => 'required',
		'tipo' => 'required',
		'usuario' => 'required',
		'archivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','año','mes','tipo','usuario','archivo'];



}
