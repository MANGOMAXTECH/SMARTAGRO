<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('user_activity_logs')) {
            Schema::create('user_activity_logs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')
                      ->constrained('users')
                      ->onDelete('cascade');
                $table->string('activity_type', 50);
                $table->text('description')->nullable();
                $table->string('ip_address', 45)->nullable();
                $table->string('user_agent')->nullable();
                $table->json('data')->nullable();
                $table->timestamps();
                
                $table->index(['user_id', 'activity_type']);
                $table->index('created_at');
                $table->index('activity_type');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('user_activity_logs');
    }
};