<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TicketAttachment
 *
 * @package App\Models
 *
 * @property int $id
 * @property int $ticket_id   ID tiket terkait
 * @property int $user_id     ID pengguna pengunggah lampiran
 * @property string $file_path Path file lampiran yang disimpan
 */
class TicketAttachment extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ticket_id',
        'user_id',
        'file_path',
    ];
}
