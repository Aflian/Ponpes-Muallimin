<?php

namespace App\Models;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    protected $guarded = [];

    public function teacher() {
        return $this->belongsTo(Teachers::class);
    }

}
