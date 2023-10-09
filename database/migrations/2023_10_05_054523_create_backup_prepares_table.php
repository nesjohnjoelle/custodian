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
        Schema::create('backup_prepares', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->bigInteger('quantity');
            $table->bigInteger('unit');
            $table->string('item_type');
            $table->string('receiver');
            $table->string('ics');
            $table->bigInteger('ics_last');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_prepares');
    }
};
