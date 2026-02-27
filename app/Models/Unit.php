<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * Representasi unit dalam sistem.
 * Unit terhubung dengan lokasi unit tertentu.
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
     */
    protected $fillable = [
        'name',
        'unit_location_id',
    ];

    /**
     * Relasi ke lokasi unit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(UnitLocation::class, 'unit_location_id');
    }
}
