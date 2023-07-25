<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Logs extends Model
{
    use HasFactory;

    public function pegawai(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
