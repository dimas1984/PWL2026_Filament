<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name              Nama unit
 * @property int $unit_location_id     Lokasi unit terkait
 */
class Unit extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'unit_location_id',
    ];
}
