<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 *
 * Representasi vendor atau pemasok aset dalam sistem.
 * Vendor dapat memiliki banyak aset terkait.
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name             Nama vendor
 * @property string|null $address     Alamat vendor
 * @property string|null $phone       Nomor telepon vendor
 * @property string|null $email       Alamat email vendor
 * @property string|null $website     Website vendor
 * @property string|null $contact_person  Nama PIC / sales vendor
 * @property string|null $notes       Catatan tambahan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Vendor extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
        'contact_person',
        'notes',
    ];

    /**
     * Relasi ke aset yang dimiliki vendor ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
