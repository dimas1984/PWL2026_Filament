<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UnitLocation
 *
 * Representasi lokasi unit dalam sistem.
 * Setiap lokasi dapat memiliki banyak unit yang terhubung.
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

    /**
     * Relasi ke unit yang berada di lokasi ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany(Unit::class, 'unit_location_id');
    }
}
