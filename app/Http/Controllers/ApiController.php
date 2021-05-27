<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function addSurveyResults(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = User::findOrFail($data->user_id);
        $survey = Survey::where('yandex_id', $data->form_id)->firstOrFail();
        $user->surveys()->attach($survey->id, [
            'result' => intval($data->result),
            'result_id' => intval($data->result_id)
        ]);
        return 'ok';
    }
}
