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
        Schema::table('pembina', function (Blueprint $table) {
            $table->dropColumn('id_nama');
            $table->integer('id_ekstra')->nullable()->after('nama_pembina');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembina', function (Blueprint $table) {
            $table->dropColumn('id_nama');
            $table->integer('id_ekstra')->nullable()->after('nama_pembina');
        });
    }
};
