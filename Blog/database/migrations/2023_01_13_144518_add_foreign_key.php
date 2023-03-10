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
        Schema::table('comments', function (Blueprint $table) {
            $table->index('user_id','user_id_idx');
            $table->index('post_id','post_id_idx');
            $table->foreign('user_id',)->on('users')->references('id');
            $table->foreign('post_id',)->on('posts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('comments', ['user_id', 'post_id']);
    }
};
