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
        // photo1,2,3 アップロード処理
        $file1 = $request->file('photo1');
        $file2 = $request->file('photo2');
        $file3 = $request->file('photo3');

        // photo1処理
        if (!empty($file1)) {
            $filename1 = $file1->getClientOriginalName();
            $file1->move('./upload/', $filename1);
        } else {
            $filename1 = "";
        }
        // photo2処理
        if (!empty($file2)) {
            $filename2 = $file2->getClientOriginalName();
            $file2->move('./upload/', $filename2);
        } else {
            $filename2 = "";
        }
        // photo3処理
        if (!empty($file3)) {
            $filename3 = $file3->getClientOriginalName();
            $file3->move('./upload/', $filename3);
        } else {
            $filename3 = "";
        }
        // dd($request);
        $diary = new Diary;
        $diary->user_id = Auth::user()->id;
        $diary->title = $request->title;
        $diary->content = $request->content;
        $diary->photo1 = $filename1;
        $diary->photo2 = $filename2;
        $diary->photo3 = $filename3;
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