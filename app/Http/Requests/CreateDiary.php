<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiary extends FormRequest {

    public function authorize() {

        return true;
    }

    public function rules() {

        return [
            'title' => 'required|max:20',
            'content' => 'required|max:255',
        ];
    }

    public function attributes() {

        return [
            'title' => 'タイトル名',
            'contents' => '内容',
            'photo1' => '写真１',
            'photo2' => '写真２',
            'photo3' => '写真３',
        ];
    }

    public function messages() {

        return [
            // 'due_date.after_or_equal' => ':attributeには、今日以降の日付を入力して下さい。',
        ];
    }
}