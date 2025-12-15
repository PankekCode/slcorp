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
        Schema::table('profiles', function (Blueprint $table) {
            if (! Schema::hasColumn('profiles', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade')->after('id');
            }

            if (! Schema::hasColumn('profiles', 'nik')) {
                $table->string('nik')->nullable()->after('user_id');
            }

            if (! Schema::hasColumn('profiles', 'nama_lengkap')) {
                $table->string('nama_lengkap')->after('nik');
            }

            if (! Schema::hasColumn('profiles', 'tempat_lahir')) {
                $table->string('tempat_lahir')->nullable()->after('nama_lengkap');
            }

            if (! Schema::hasColumn('profiles', 'tanggal_lahir')) {
                $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            }

            if (! Schema::hasColumn('profiles', 'jenis_kelamin')) {
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable()->after('tanggal_lahir');
            }

            if (! Schema::hasColumn('profiles', 'alamat')) {
                $table->text('alamat')->nullable()->after('jenis_kelamin');
            }

            if (! Schema::hasColumn('profiles', 'no_hp')) {
                $table->string('no_hp')->nullable()->after('alamat');
            }

            if (! Schema::hasColumn('profiles', 'pendidikan')) {
                $table->string('pendidikan')->nullable()->after('no_hp');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            if (Schema::hasColumn('profiles', 'pendidikan')) {
                $table->dropColumn('pendidikan');
            }

            if (Schema::hasColumn('profiles', 'no_hp')) {
                $table->dropColumn('no_hp');
            }

            if (Schema::hasColumn('profiles', 'alamat')) {
                $table->dropColumn('alamat');
            }

            if (Schema::hasColumn('profiles', 'jenis_kelamin')) {
                $table->dropColumn('jenis_kelamin');
            }

            if (Schema::hasColumn('profiles', 'tanggal_lahir')) {
                $table->dropColumn('tanggal_lahir');
            }

            if (Schema::hasColumn('profiles', 'tempat_lahir')) {
                $table->dropColumn('tempat_lahir');
            }

            if (Schema::hasColumn('profiles', 'nama_lengkap')) {
                $table->dropColumn('nama_lengkap');
            }

            if (Schema::hasColumn('profiles', 'nik')) {
                $table->dropColumn('nik');
            }

            if (Schema::hasColumn('profiles', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};
