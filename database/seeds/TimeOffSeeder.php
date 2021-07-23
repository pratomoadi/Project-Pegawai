<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06001',
            'tanggal_cuti' => '2020-08-02',
            'lama_cuti' => '2',
            'keterangan' => 'Acara Keluarga',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06001',
            'tanggal_cuti' => '2020-08-18',
            'lama_cuti' => '2',
            'keterangan' => 'Anak Sakit',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06006',
            'tanggal_cuti' => '2020-08-20',
            'lama_cuti' => '1',
            'keterangan' => 'Nenek Sakit',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06007',
            'tanggal_cuti' => '2020-08-23',
            'lama_cuti' => '1',
            'keterangan' => 'Sakit',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06004',
            'tanggal_cuti' => '2020-08-29',
            'lama_cuti' => '5',
            'keterangan' => 'Menikah',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('time_offs')->insert([
            'nomor_induk' => 'IP06003',
            'tanggal_cuti' => '2020-08-30',
            'lama_cuti' => '2',
            'keterangan' => 'Acara Keluarga',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
