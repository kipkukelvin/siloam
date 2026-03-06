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
        Schema::table('applications', function (Blueprint $table) {
            // add nullable first if you have existing rows and want to avoid immediate failures
                       $table->unsignedBigInteger('course_id')->nullable()->after('course');

            // Add foreign key constraint
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('set null'); 
        });
    }

    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');
        });
    }
};
