<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Invoice extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'invoices';
    protected $fillable = [
        'no',
        'tanggal_invoice',
        'tanggal_jatuh_tempo',
        'customer',
        'diskon',
        'pajak',
        'status_invoice',
        'status_payment_invoice',
        'deskripsi',
    ];

    public function getCreatedAtAttributte()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
