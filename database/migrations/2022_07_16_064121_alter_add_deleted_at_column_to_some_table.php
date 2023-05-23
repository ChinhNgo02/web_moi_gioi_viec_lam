<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'deleted_at')) {
            Schema::table('users', function (Blueprint $table) {
                $table->timestamp('deleted_at')->nullable();
            });
        }

        if (!Schema::hasColumn('companies', 'deleted_at')) {
            Schema::table('companies', function (Blueprint $table) {
                $table->timestamp('deleted_at')->nullable();
            });
        }
        if (!Schema::hasColumn('flies', 'deleted_at')) {
            Schema::table('flies', function (Blueprint $table) {
                $table->timestamp('deleted_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};