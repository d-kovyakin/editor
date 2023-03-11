<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('headers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('num_id');
            $table->string('tags',2)->nullable();
            $table->string('color',10)->nullable();
            $table->string('style',10)->nullable();
            $table->string('text')->nullable();
            $table->string('position')->nullable();
            $table->integer('int_position')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::drop('headers');
    }
};
