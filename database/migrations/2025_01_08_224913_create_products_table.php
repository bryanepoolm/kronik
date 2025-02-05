<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('custom_key');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('credit_type', ['simple', 'revolvente', 'bullet', 'arrendamiento']);
            $table->string('interest_rate', 5, 2);
            $table->enum('interest_type', ['fixed', 'variable']);
            $table->decimal('max_amount', 10, 2);
            $table->decimal('min_amount', 10, 2);
            $table->integer('max_term');
            $table->integer('min_term');
            $table->enum('term_type', ['daily', 'weekly', 'monthly']);
            $table->boolean('is_active')->default(true);
            $table->text('special_conditions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
