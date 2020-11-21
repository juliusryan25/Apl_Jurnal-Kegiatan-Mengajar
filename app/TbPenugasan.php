<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


class TbPenugasan extends Model
{
    use HasFactory;
    protected $table = "tb_penugasans";

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->role_id == 2){
            return $query->where('id_user', Auth::user()->id);
        }
    }
}
