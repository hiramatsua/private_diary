<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\Http\Requests\CreateDiary;

class DiaryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $diaries = Diary::orderBy('created_at', 'asc')->get();

        return view('diary.main', compact('diaries'));
    }

    public function create(CreateDiary $request, Diary $diary)
    {
        dd($request);
        exit;
        // $user_id = $request->user_id;

        return view('diary.create');
    }
}
