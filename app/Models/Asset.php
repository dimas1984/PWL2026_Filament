<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asset
 *
 * Representasi model aset dalam sistem.
 * Menyimpan informasi terkait aset termasuk kategori, unit,
 * vendor, status, tanggal pembelian, harga, dan masa garansi.
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name          Nama aset
 * @property string $code          Kode unik aset
 * @property int $category_id      Kategori aset
 * @property int $unit_id          Lokasi aset disimpan
 * @property int $vendor_id        Vendor atau pemasok aset
 * @property string $status        Status aset (aktif, dipinjam, rusak, hilang)
 * @property \Carbon\Carbon $purchase_date   Tanggal pembelian
 * @property float $purchase_price           Harga beli
 * @property \Carbon\Carbon $warranty_expiry Masa garansi
 */
class Asset extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara mass-assignment.
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
     * Relasi ke kategori aset.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi ke unit atau lokasi penyimpanan aset.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * Relasi ke vendor atau pemasok aset.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
