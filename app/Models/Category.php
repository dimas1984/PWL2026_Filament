<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * Representasi kategori tiket atau aset dalam sistem.
 * Kategori dapat memiliki banyak teknisi terkait.
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name         Nama kategori
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Category extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Relasi ke teknisi yang memiliki spesialisasi pada kategori ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function technicians()
    {
        return $this->hasMany(Technician::class);
    }
}
