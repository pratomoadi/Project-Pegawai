<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeOffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_offs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_induk');
            $table->foreign('nomor_induk', 'fk_user_time_off_no_id')->references('nomor_induk')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->date('tanggal_cuti');
            $table->integer('lama_cuti');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('time_offs');

        Schema::table('time_offs', function (Blueprint $table){

            $table->dropForeign('fk_user_time_off_no_id');
            $table->dropColumn('brand_id');
        });

        Schema::dropIfExists('time_offs');
    }
}
