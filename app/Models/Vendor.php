<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Technician
 *
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id           ID user terkait teknisi
 * @property int|null $category_id  ID kategori spesialisasi teknisi
 */
class Technician extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'category_id',
    ];
}
