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
        Schema::create('organizers', function (Blueprint $table) {
            $table->increments('organizer_id')->comment('รหัสผู้จัดทำ');
            $table->string('name')->comment('ชื่อผู้จัดทำ');
            $table->string('username')->comment('นามสกุลผู้จัดทำ');
            $table->string('phone')->comment('เบอร์โทรผู้จัดทำ');
            $table->string('role')->comment('หน้าที่ผู้จัดทำ');
            $table->string('organizer_image')->comment('รูปผู้จัดทำ');
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
        Schema::dropIfExists('organizers');
    }
};
