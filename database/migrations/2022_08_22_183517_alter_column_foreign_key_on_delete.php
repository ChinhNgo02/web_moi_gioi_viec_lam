<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        $sm = Schema::getConnection()->getDoctrineSchemaManager();
        $indexesFiles = $sm->listTableIndexes('flies');
        Schema::table('flies', function (Blueprint $table) use ($indexesFiles) {
            if (array_key_exists('flies_post_id_foreign', $indexesFiles)) {
                $table->dropForeign('flies_post_id_foreign');
                $table->foreign('post_id', 'flies_post_id_foreign')
                    ->references('id')
                    ->on('posts')
                    ->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        //
    }
};