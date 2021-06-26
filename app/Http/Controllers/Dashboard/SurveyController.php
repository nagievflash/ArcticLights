<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Surveys list
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $iUserId = Auth::user()->id;
        $aIncompleteSurveys = Survey::getIncomplete($iUserId);
        $aCompleteSurveys = Survey::getComplete($iUserId);
        return view('surveys.list', compact('aIncompleteSurveys', 'aCompleteSurveys'));
    }

    /**
     * Survey single
     * @param $sSlug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($sSlug)
    {
        $oSurvey = Survey::query()->where('slug', $sSlug)->firstOrFail();
        $sUrlParams = http_build_query([
            'user_id' => Auth::user()->id,
            'user_role' => Auth::user()->role->name,
        ]);
        return view('surveys.single', compact('oSurvey', 'sUrlParams'));
    }

    /**
     * Survey result
     * @param string $sSlug survey slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function showResult($sSlug = null)
    {
        if ($sSlug) {
            $iUserId = Auth::user()->id;
            $oUser = User::query()->findOrFail($iUserId);
            $oSurvey = $oUser->surveys()->where('slug', $sSlug)->firstOrFail();
            $aUsersSurveys = $oUser->surveys()->where('result_id', '>', 0)->get();
            $aUsersSurveysId = array_column($aUsersSurveys->toArray(), 'id');
            $aUnresolvedSurveys = Survey::query()->whereKeyNot($aUsersSurveysId)->inRandomOrder()->limit(3)->get();
            $result = Auth::user()->role->name == 'respondent' ? false : $oSurvey->pivot->result_id;
            return view('surveys.single.result', compact('oSurvey', 'result', 'aUnresolvedSurveys'));
        } else {
            $iUserId = Auth::user()->id;
            $oUser = User::query()->findOrFail($iUserId);
            $oSurvey = $oUser->surveys()->orderByDesc('created_at')->firstOrFail();
            return redirect(route('surveyResult', ['slug' => $oSurvey->slug]));
        }
    }
}
