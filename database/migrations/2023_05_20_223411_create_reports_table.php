<?php

use App\Models\Supply;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');

            $table->foreignIdFor(Supply::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->string('product_id');
            $table->float('product_price');
            $table->float('delivery_price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
