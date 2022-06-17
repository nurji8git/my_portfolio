<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceModel;

class ExperienceEdController extends Controller
{
    public function index()
    {
        return view('editors.experience_ed');
    }
    public function add(Request $request)
    {
        $this->validate($request,
        [
            'title' => 'required|max:255',
            'time_period' => 'required|max:255',
            'description' => 'required|max:255',
            'major' => 'required|max:255'
        ]);

        ExperienceModel::create([
            'title' => $request->title,
            'time_period' => $request->time_period,
            'description' => $request->description,
            'major' => $request->major
        ]);

        return back();

    }
}
