<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use App\Models\User;

class TbMapel extends Model
{
    use HasFactory;

    public function scopeMapel($query)
    {
        if(Auth::user()->role_id == 2){
            return $query->where('id', Auth::user()->id_mapel);
        }

        // return $query->where('id_jurusan', $request->jurusan);
    }
}
