<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Logs;

class Pegawai extends Model
{
    use HasFactory;
    public $guarded = [];

    public function logs(){
        return $this->hasMany(Logs::class, 'user_id');
    }
}
