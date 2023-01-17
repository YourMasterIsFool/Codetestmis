<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class Transaksi extends Model
{
    use HasFactory, Uuids;
    protected $dates = ['deleted_at'];
}
