<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasGedung extends Model
{
    use HasFactory;
    protected $table = 'tugas_div_gedung';
    protected $guarded = [];
}
