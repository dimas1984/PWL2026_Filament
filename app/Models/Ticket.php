<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 *
 * Representasi tiket dalam sistem helpdesk / manajemen aset.
 * Menyimpan detail tiket termasuk kategori, status, prioritas, user pembuat,
 * teknisi yang ditugaskan, serta relasi komentar dan lampiran.
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $status
 * @property string $priority
 * @property int $category_id
 * @property int $user_id
 * @property int|null $assigned_to
 * @property int|null $unit_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Ticket extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'category_id',
        'user_id',
        'assigned_to',
        'unit_id',
    ];

    /**
     * Relasi ke kategori tiket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi ke user yang membuat tiket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke teknisi yang ditugaskan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function technician()
    {
        return $this->belongsTo(Technician::class, 'assigned_to');
    }

    /**
     * Relasi ke komentar tiket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(TicketComment::class);
    }

    /**
     * Relasi ke lampiran tiket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments()
    {
        return $this->hasMany(TicketAttachment::class);
    }

    /**
     * Relasi ke unit terkait tiket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
