<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asset
 *
 * Representasi model aset dalam sistem.
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $category_id
 * @property int $unit_id
 * @property int|null $vendor_id
 * @property string $status
 * @property \Carbon\Carbon|null $purchase_date
 * @property float|null $purchase_price
 * @property \Carbon\Carbon|null $warranty_expiry
 */
class Asset extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'category_id',
        'unit_id',
        'vendor_id',
        'status',
        'purchase_date',
        'purchase_price',
        'warranty_expiry',
    ];

    /**
     * Event model booted.
     * Menghasilkan kode aset otomatis dengan format: INV/XXXX/MM/YYYY.
     */
    protected static function booted()
    {
        static::creating(function ($asset) {
            if (empty($asset->code)) {
                $month = now()->format('m');
                $year  = now()->format('Y');

                $lastCode = self::whereYear('created_at', $year)
                    ->whereMonth('created_at', $month)
                    ->orderByDesc('id')
                    ->value('code');

                if ($lastCode) {
                    $lastNumber = (int) explode('/', $lastCode)[1];
                    $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
                } else {
                    $newNumber = '0001';
                }

                $asset->code = "INV/{$newNumber}/{$month}/{$year}";
            }
        });
    }
}
