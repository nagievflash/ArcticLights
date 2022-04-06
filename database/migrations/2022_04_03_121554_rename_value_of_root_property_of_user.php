<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameValueOfRootPropertyOfUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = User::query()->get();
        Schema::dropColumns('users', [
            'root'
        ]);
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('root')->nullable();
        });
        $rootMap = [
            'Да' => true,
            'Нет' => false,
            null => false,
            1 => true,
            0 => false
        ];
        /** @var User $user */
        foreach ($users as $user) {
            $user->root = $rootMap[$user->root];
            $user->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
