<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class Tempat extends Model
{
    use HasFactory, Uuids;
    protected $dates = ['deleted_at'];
    protected $casts = [
        'detail' => 'array'
    ];

    public function setPropertiesAttribute($value)
    {
        $detail = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $detail[] = $array_item;
            }
        }

        $this->attributes['detail'] = json_encode($detail);
    }
}
