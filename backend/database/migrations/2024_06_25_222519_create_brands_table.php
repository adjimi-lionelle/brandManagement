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
            Schema::create('brands', function (Blueprint $table) {
                $table->id('brand_id'); // Utilisation de brand_id comme clé primaire
                $table->string('brand_name')->unique();
                $table->string('brand_image')->nullable();
                $table->integer('rating')->default(0);
                $table->string('country_code')->default('default'); // Par exemple, code pays ISO 3166-1 alpha-2
                $table->timestamps();
            });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
