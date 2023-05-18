<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->float('dollar');
            $table->integer('cargo');
            $table->integer('market');
            $table->integer('delivery');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supplies');
    }
};
