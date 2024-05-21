<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->string('meta_image')->nullable();
        });
        $rows = \DB::table('articles')->get();
        foreach ($rows as $row) {
            \DB::table('articles')
                ->where('id', $row->id)
                ->update(['meta_title' => $row->title]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
