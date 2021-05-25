<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_buku', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('kategori');
			$table->string('judul',115);
			$table->text('keterangan');
			$table->integer('stock');
			$table->timestamps();
			
			$table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_buku', function (Blueprint $table) {
            //
        });
    }
}
