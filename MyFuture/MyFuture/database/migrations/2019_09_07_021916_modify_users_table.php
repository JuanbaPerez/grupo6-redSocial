<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('avatar');
        $table->string('lastName');
        $table->string('birthday');
        $table->string('userName');
        $table->string('genre');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

          Schema::table('users', function (Blueprint $table) {

            $table->dropIfExists('avatar');
            $table->dropIfExists('lastName');
            $table->dropIfExists('birthday');
            $table->dropIfExists('userName');
            $table->dropIfExists('genre');
          });
    }
}
