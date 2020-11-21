<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use App\Models\TbJurnal;
use App\Models\TbMapel;
use App\Models\User;
use App\TbMateri;
use PDF;

class PrintPdf extends Controller
{
    public function c_all_jurnal_pdf(){
    	$jurnal = TbJurnal::all();
    	$mapel = TbMapel::all();
    	$user = User::all();

        $data = [
            'jurnal' => $jurnal,
            'mapel' => $mapel,
            'user' => $user,
            'satuan' => 'semua'
        ];

        // $pdf = PDF::loadView('/vendor/voyager/print/browse', $data);
        $pdf = PDF::loadView('/vendor/voyager/print/myPDF', $data)->setPaper('a4', 'landscape');

        return $pdf->download('all_jurnal.pdf');
    }
    public function c_one_jurnal_pdf($id){
    	$jurnal = DB::table('tb_jurnals')->where('id', $id)->get();
    	$mapel = TbMapel::all();
    	$user = User::all();

        $data = [
            'jurnal' => $jurnal,
            'mapel' => $mapel,
            'user' => $user,
            'satuan' => 'satu'
        ];

        // $pdf = PDF::loadView('/vendor/voyager/print/browse', $data);
        $pdf = PDF::loadView('/vendor/voyager/print/myPDF', $data)->setPaper('a4', 'landscape');

        return $pdf->download('one_jurnal.pdf');
    }
}
