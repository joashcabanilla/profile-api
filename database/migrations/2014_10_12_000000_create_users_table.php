<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("usertype_id")->constrained("usertypes")->onDelete("restrict");
            $table->string("firstname");
            $table->string("middlename")->nullable();
            $table->string("lastname");
            $table->string("email")->unique();
            $table->timestamp("email_verified_at")->nullable();
            $table->string("otp")->nullable();
            $table->timestamp("otp_expires_at")->nullable();
            $table->string("username")->unique();
            $table->string("password");
            $table->timestamp("last_login_at")->nullable();
            $table->string("last_login_ip")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
