<?php

namespace App\Jobs;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Dress;
use App\Models\Master;
use App\Models\Trouser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertMaster implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private function __convert($row){
        $data = [];
        for($i = 0; $i < count($row); $i++){
            $data[$i] = [
               "nama" => $row[$i][1],
               "jenis_kelamin" => $row[$i][2],
               "pangkat_nrp" => $row[$i][3],
               "jabatan" => $row[$i][4],
               "tb_bb" => $row[$i][5],
               "panjang_baju" => $row[$i][6],
                "lebar_dada" => $row[$i][7],
                "lebar_pundak" => $row[$i][8],
                "panjang_punggung" => $row[$i][9],
                "lebar_punggung" => $row[$i][10],
                "lingkar_lengan" => $row[$i][11],
                "arm_hold" => $row[$i][12],
                "panjang_tangan_pdh" => $row[$i][13],
                "panjang_tangan_pdl_i" => $row[$i][14],
                "panjang_tangan_pdl_ii" => $row[$i][15],
                "panjang_tangan_pdu_i" => $row[$i][16],
                "panjang_tangan_pdu_iv" => $row[$i][17],
                "panjang_tangan_jas_resintel_kam" => $row[$i][18],
                "lingkar_ujung_lengan" => $row[$i][19],
                "lingkar_dada" => $row[$i][20],
                "lingkar_pinggang__perut" => $row[$i][21],
                "lingkar_panggul" => $row[$i][22],
                "lingkar_leher" => $row[$i][23],
                "panjang_celana_rok" => $row[$i][24],
                "lingkar_pinggang" => $row[$i][25],
                "lingkar_pinggul" => $row[$i][26],
                "pesak_kil" => $row[$i][27],
                "lingkar_paha" => $row[$i][28],
                "lingkar_lutut" => $row[$i][29],
                "lingkar_bawah" => $row[$i][30],
            ];
        }
        return $data;
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $theArray = Excel::toArray([], storage_path('app/public/odiklhrtgi5yu86ythkdngjdfkl.xlsx'));
        $convert = ($this->__convert($theArray[0]));
        for($i = 0; $i < count($convert); $i++){
            $insert_dress = Dress::create([
                "panjang_baju" => $convert[$i]['panjang_baju'],
                "lebar_dada" => $convert[$i]['lebar_dada'],
                "lebar_pundak" => $convert[$i]['lebar_pundak'],
                "panjang_punggung" => $convert[$i]['panjang_punggung'],
                "lebar_punggung" => $convert[$i]['lebar_punggung'],
                "lingkar_lengan" => $convert[$i]['lingkar_lengan'],
                "arm_hold" => $convert[$i]['arm_hold'],
                "panjang_tangan_pdh" => $convert[$i]['panjang_tangan_pdh'],
                "panjang_tangan_pdl_i" => $convert[$i]['panjang_tangan_pdl_i'],
                "panjang_tangan_pdl_ii" => $convert[$i]['panjang_tangan_pdl_ii'],
                "panjang_tangan_pdu_i" => $convert[$i]['panjang_tangan_pdu_i'],
                "panjang_tangan_pdu_iv" => $convert[$i]['panjang_tangan_pdu_iv'],
                "panjang_tangan_jas_resintel_kam" => $convert[$i]['panjang_tangan_jas_resintel_kam'],
                "lingkar_ujung_lengan" => $convert[$i]['lingkar_ujung_lengan'],
                "lingkar_dada" => $convert[$i]['lingkar_dada'],
                "lingkar_pinggang__perut" => $convert[$i]['lingkar_pinggang__perut'],
                "lingkar_panggul" => $convert[$i]['lingkar_panggul'],
                "lingkar_leher" => $convert[$i]['lingkar_leher'],
            ]);
            $insert_trouser = Trouser::create([
                "panjang_celana_rok" => $convert[$i]['panjang_celana_rok'],
                "lingkar_pinggang" => $convert[$i]['lingkar_pinggang'],
                "lingkar_pinggul" => $convert[$i]['lingkar_pinggul'],
                "pesak_kil" => $convert[$i]['pesak_kil'],
                "lingkar_paha" => $convert[$i]['lingkar_paha'],
                "lingkar_lutut" => $convert[$i]['lingkar_lutut'],
                "lingkar_bawah" => $convert[$i]['lingkar_bawah'],
            ]);
            $insert_master = Master::create([
                "nama" => $convert[$i]['nama'],
                "jenis_kelamin" => $convert[$i]['jenis_kelamin'],
                "pangkat_nrp" => $convert[$i]['pangkat_nrp'],
                "jabatan" => $convert[$i]['jabatan'],
                "tb_bb" => $convert[$i]['tb_bb'],
                "sizing_dress_id" => $insert_dress->id,
                "sizing_trouser_id" => $insert_trouser->id,
            ]);
        }
    }
}
