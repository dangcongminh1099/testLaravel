<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class Democron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date=date('c');
        DB::table("giang_vien")->insert(['ten_giang_vien'=>'testGiangVien','ten_dang_nhap'=>"$date",'ma_dang_nhap'=>'1','ma_chuyen_nganh'=>'1','he_so'=>'1']);
    }
}
