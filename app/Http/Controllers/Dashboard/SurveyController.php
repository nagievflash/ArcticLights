<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Survey;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Surveys list
     * @return Application|Factory|View
     */
    public function index()
    {
        $aIncompleteSurveys = Survey::getIncomplete(Auth::id());
        $aCompleteSurveys = Survey::getComplete(Auth::id());
        return view('surveys.list', compact('aIncompleteSurveys', 'aCompleteSurveys'));
    }

    /**
     * Survey single
     * @param Survey $survey
     * @return Application|Factory|View
     */
    public function show(Survey $survey)
    {
        $sUrlParams = http_build_query([
            'user_id' => Auth::id(),
            'user_role' => Auth::user()->role->name,
        ]);
        return view('surveys.single', ['oSurvey' => $survey, 'sUrlParams'=> $sUrlParams]);
    }

    /**
     * Survey result
     * @param Survey $survey
     * @return Application|Factory|View
     */
    public function showSingleResult(Survey $survey)
    {
        $oUsersSurveysCollection = Auth::user()
            ->surveys()
            ->where('result_id', '>', 0)
            ->select(['id'])
            ->get();
        $oUsersSurveysId = $oUsersSurveysCollection->pluck('id');
        $oUnresolvedSurveysCollection = Survey::query()
            ->whereKeyNot($oUsersSurveysId->all())
            ->inRandomOrder()
            ->limit(3)
            ->get();
        $result = Auth::user()->role->name == 'respondent' ? false : $survey->result_id;
        return view('surveys.result.single', compact('oSurvey', 'result', 'oUnresolvedSurveysCollection'));
    }

    /**
     * @return Application|Factory|View
     */
    public function showIndexResult()
    {
        $oSurveysCollection = Survey::getComplete(Auth::id());
        return view('surveys.result.list', compact('oSurveysCollection'));
    }
}
