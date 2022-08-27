<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Diary;
use App\Models\User;
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
        $diaries = Diary::where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'asc')->paginate(3);

        return view('diary.list', compact('diaries'));
    }

    public function showCreateForm()
    {
        return view('diary.create');
    }

    public function create(CreateDiary $request)
    {
        // dd($request);
        $diary = new Diary;
        $diary->user_id = Auth::user()->id;
        $diary->title = $request->title;
        $diary->content = $request->content;
        $diary->save();

        return redirect()->route('diary.list')->with('message', '日記を登録しました。');
    }

    public function detail(int $id)
    {
        $diary = Diary::find($id);

        return view('diary.detail', compact('diary'));
    }

    public function showDeleteForm(int $id)
    {
        $diary = Diary::find($id);

        return view('diary.delete', compact('diary'));
    }

    public function destroy(int $id)
    {
        Diary::find($id)->delete();

        return redirect()->route('diary.list')->with('message', '日記を削除しました。');
    }
}