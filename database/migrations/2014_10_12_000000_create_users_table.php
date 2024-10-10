<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nid')->unique();
            $table->string('email')->unique();

            $table->unsignedBigInteger('vaccine_center_id')->nullable();
            $table->foreign('vaccine_center_id')
                ->references('id')
                ->on('vaccine_centers')
                ->onDelete('set null');

            $table->date('scheduled_date')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
