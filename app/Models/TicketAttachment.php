<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TicketAttachment
 *
 * Representasi lampiran (attachment) pada tiket.
 * Menyimpan file yang diunggah oleh pengguna untuk mendukung tiket.
 *
 * @package App\Models
 *
 * @property int $id
 * @property int $ticket_id
 * @property int $user_id
 * @property string $file_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class TicketAttachment extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'ticket_id',
        'file_path',
        'user_id',
    ];

    /**
     * Relasi ke tiket yang memiliki lampiran.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    /**
     * Relasi ke pengguna yang mengunggah lampiran.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
