<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'kinds',
        'detail'
    ];

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('keyword', 'like', '%' . $keyword . '%');
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', 'like', '%' . $gender . '%');
        }
    }

    public function scopeKindsSearch($query, $kinds)
    {
        if (!empty($kinds)) {
            $query->where('kinds', 'like', '%' . $kinds . '%');
        }
    }

    public function scopeDateSearch($query, $date)
    {
        if (!empty($date)) {
            $query->where('date', 'like', '%' . $date . '%');
        }
    }
}
