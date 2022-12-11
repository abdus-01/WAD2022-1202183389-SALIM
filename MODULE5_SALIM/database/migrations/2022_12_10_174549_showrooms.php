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
        //
        Schema::create('showrooms', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->user_id()->unsigned();
            $table->string('name');
            $table->string('owner');
            $table->string('brand');
            $table->dateTime('purchase_date');
            $table->text('description');
            $table->string('image');
            $table->enum('status',['lunas','belum lunas']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->rememberToken();
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
        //
        Schema::dropIfExists('showrooms');
    }
};
