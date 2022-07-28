<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterUsersHisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users_his', function (Blueprint $table) {
            $table->string('user_name', 60)->nullable(false);
            $table->string('passwords')->nullable(false);
            $table
                ->dateTime('date_time')
                ->nullable(false)
                ->useCurrent();

            $table->primary(['user_name', 'date_time']);
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
        Schema::dropIfExists('register_users_his');
    }
}
