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
        Schema::table('users', function (Blueprint $table) {
            $admin = __('admin');
            $vendor = __('vendor');
            $user = __('user');

            $tra = [$admin, $vendor, $user];

            $inactive = __('inactive');
            $active = __('active');

            $sta = [$inactive, $active];

            $table->string('username')->after('name')->unique()->nullable();
            $table->text('image')->nullable();
            $table->string('phone', 18)->after('email')->unique()->nullable();
            $table->enum('role', $tra)->default($user);
            $table->enum('status', $sta)->default($active);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'image', 'role', 'status', 'phone']);
        });
    }
};
