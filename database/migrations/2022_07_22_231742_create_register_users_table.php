<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->string('user_name', 60)->nullable(false);
            $table->string('passwords')->nullable(false);
            $table->string('first_name', 60)->nullable(false);
            $table->string('last_name', 60)->nullable(true);
            $table->string('img_path', 255)->nullable(true);
            $table
                ->dateTime('date_time')
                ->nullable(true)
                ->useCurrent();

            $table->primary(['user_name']);
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_users');
    }
}
