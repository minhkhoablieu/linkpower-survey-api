<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
class SurveyController extends Controller
{
    //
    public function show($id, Request $request)
    {
        return response()->json(Question::findOrFail($id));
    }
}
