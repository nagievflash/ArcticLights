<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getIncomplete($iUserId)
    {
        $aUsersSurveys = static::getComplete($iUserId);
        $aUsersSurveysId = array_column($aUsersSurveys->toArray(), 'id');
        return Survey::query()->whereKeyNot($aUsersSurveysId)->get();
    }

    public static function getComplete($iUserId)
    {
        $oUser = User::findOrFail($iUserId);
        return $oUser->surveys()->where('result_id', '>', 0)->get();
    }
}
