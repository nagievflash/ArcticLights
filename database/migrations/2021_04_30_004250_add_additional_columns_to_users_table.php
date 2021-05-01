<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('birthday')->nullable();
            $table->string('root')->nullable();
            $table->string('stay')->nullable();
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
            $table->dropColumn('height');
            $table->dropColumn('weight');
            $table->dropColumn('age');
            $table->dropColumn('sex');
            $table->dropColumn('birthday');
            $table->dropColumn('root');
            $table->dropColumn('stay');
        });
    }
}
