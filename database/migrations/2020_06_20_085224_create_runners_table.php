<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('gender');
            $table->string('city');
            $table->datetime('birthday');
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->decimal('weight',6,2)->nullable();
            $table->integer('point')->default(0);
            $table->integer('run_level')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runners');
    }
}
