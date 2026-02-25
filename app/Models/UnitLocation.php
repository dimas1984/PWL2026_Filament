<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UnitLocation
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name  Nama lokasi unit
 */
class UnitLocation extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

}

