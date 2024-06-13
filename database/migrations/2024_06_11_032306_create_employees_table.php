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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();           //* primary key, autoincrement
            $table->string('name', 100); //* varchar(100)
            $table->string('email', 100); //* varchar(100)
            $table->text('address')->nullable()->default('NULL'); //* text nullable
            $table->boolean('status')->default(true); //* boolean
            $table->timestamps();   //* created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
