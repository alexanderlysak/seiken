<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('full_name')->after('name');
            $table->date('birthdate')->after('full_name')->nullable();
            $table->string('sex', 6)->after('birthdate')->nullable();
            $table->string('weight')->after('sex')->nullable();
            $table->string('dojo_role')->after('weight');
            $table->string('grade')->after('dojo_role');
            $table->string('phone')->after('grade');

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
            $table->dropColumn('full_name');
            $table->dropColumn('birthdate');
            $table->dropColumn('sex');
            $table->dropColumn('weight');
            $table->dropColumn('dojo_role');
            $table->dropColumn('grade');
            $table->dropColumn('phone');
        });
    }
}
