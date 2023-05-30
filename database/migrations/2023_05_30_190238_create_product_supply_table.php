<?php

use App\Models\Product;
use App\Models\Supply;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_supply', function (Blueprint $table) {
            $table->foreignIdFor(Product::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
            ;

            $table->foreignIdFor(Supply::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
            ;

            $table->float('yuan');
            $table->integer('price');
            $table->integer('quantity');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_supply');
    }
};
