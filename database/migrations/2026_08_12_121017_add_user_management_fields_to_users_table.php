<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'phone_number')) {
                $table->string('phone_number')->nullable()->after('email');
            }
            
            if (!Schema::hasColumn('users', 'last_login_at')) {
                $table->timestamp('last_login_at')->nullable()->after('remember_token');
            }
            
            if (!Schema::hasColumn('users', 'last_login_ip')) {
                $table->string('last_login_ip', 45)->nullable()->after('last_login_at');
            }
            
            if (!Schema::hasColumn('users', 'status')) {
                $table->enum('status', ['active', 'inactive', 'suspended'])
                      ->default('active')
                      ->after('last_login_ip');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $columns = ['phone_number', 'last_login_at', 'last_login_ip', 'status'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};