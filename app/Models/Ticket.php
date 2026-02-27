<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
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
 */
class Ticket extends Model
{
    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
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
}
