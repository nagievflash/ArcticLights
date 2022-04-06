<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;

class StatisticController extends Controller
{
    /**
     * @return array
     */
    public function users()
    {
        $users = User::query()->get(['root'])->countBy('root')->toArray();
        return [
            'non-root-count' => $users[1],
            'root-count' => $users[0],
        ];
    }

    /**
     * @return array
     */
    public function surveys()
    {
        return [
            'count' => Survey::query()->count(),
        ];
    }
}
