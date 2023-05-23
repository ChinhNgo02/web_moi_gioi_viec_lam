<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('object_language', function (Blueprint $table) {
            if (Schema::hasColumn('object_language', 'type')) {
                $table->string('type')->change();
            }
        });
        Schema::table('object_language', function (Blueprint $table) {
            if (Schema::hasColumn('object_language', 'type')) {
                $table->renameColumn('type', 'object_type');
            }
        });
    }


    public function down()
    {
    }
};