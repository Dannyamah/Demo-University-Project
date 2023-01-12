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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('faculty_id')->nullable()->after('role_id');
            $table->integer('department_id')->nullable()->after('faculty_id');
            $table->integer('course_id')->nullable()->after('department_id');
            $table->string('image')->nullable()->after('course_id');
            $table->string('bio')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
