<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Technician
 *
 * Representasi teknisi dalam sistem.
 * Menyimpan data spesialisasi teknisi dan relasi dengan user,
 * kategori, serta tiket yang ditugaskan.
 *
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id           ID user terkait teknisi
 * @property string|null $specialist  Bidang spesialisasi teknisi
 * @property int|null $category_id  ID kategori yang menjadi spesialisasi teknisi
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Technician extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'specialist'
    ];

    /**
     * Relasi ke user terkait teknisi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke kategori spesialisasi teknisi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi ke tiket yang ditugaskan ke teknisi ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'assigned_to');
    }
}
