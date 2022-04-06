<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StatisticController;

class AdminDashboardController extends Controller
{
    protected StatisticController $statisticController;

    public function __construct(StatisticController $statisticController)
    {
        $this->statisticController = $statisticController;
    }

    public function index()
    {
        $statistic = [
            'users' => $this->statisticController->users(),
            'surveys' => $this->statisticController->surveys(),
        ];

        return view('dashboard.admin.home', [
            'statistic' => $statistic
        ]);
    }
}
