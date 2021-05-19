<?php

use Illuminate\Database\Migrations\Migration;

class AddUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $oRole = new \TCG\Voyager\Models\Role();
        $oRole->name = 'respondent';
        $oRole->display_name = 'The Respondent';
        $oRole->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \TCG\Voyager\Models\Role::query()->where('name','respondent')->delete();
    }
}
