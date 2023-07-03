<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $apellidos
 * @property $nombres
 * @property $edad
 * @property $direccion
 * @property $email
 * @property $telefono
 * @property $fecnacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'apellidos' => 'required',
		'nombres' => 'required',
		'edad' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'fecnacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['apellidos','nombres','edad','direccion','email','telefono','fecnacimiento'];



}
