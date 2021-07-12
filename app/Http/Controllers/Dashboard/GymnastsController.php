<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class GymnastsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function indexAction()
    {
    	return view('dashboard.gymnasts', ['users' => User::all()]);
    }

    public function newItemAction()
    {
        return view('dashboard.gymnasts_new');
    }

    public function createAction(Request $request)
    {
        /*
         * array(5) {
  ["full_name"]=>  string(44) "Сергеев Илья Витальевич"
  ["birthdate"]=>  string(10) "01.01.2000"
  ["email"]=>  string(13) "mail@mail.com"
  ["password"]=>  string(8) "12345678"
  ["confirm"]=>  string(8) "12345678"
}
         *
         * */
        $rules = [
            'full_name' => 'required|regex:/(^[А-ЯЦцУуШшЩщФфЫыРрЭэЧчТтЬьЮюЪъХхЁа-яё ]+$)+/|min:10|max:50|unique:users',
            'birthdate' => 'required|date_format:d.m.Y',
//            'sex'=> 'required|alpha|max:6',
//            'weight' => 'required|numeric',
//            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|confirmed|min:8',
        ];
        $messages = [
            'full_name.required' => 'Введите Ф.И.О. полностью',
            'full_name.min' => 'Минимум 10 символов',
            'full_name.max' => 'Максимум 50 символов',
            'full_name.unique' => 'Спортсмен с такими данными Ф.И.О.  уже зарегистрирован',
            'full_name.regex' => 'Допустимые символы - только буквы и пробел',
//            'birthdate.required' => 'Введите дату рождения в формате ДД.ММ.ГГГГ',
//            'birthdate.date_format' => 'Введите дату рождения в формате ДД.ММ.ГГГГ',
//            'sex.required' => 'Укажите пол спортсмена',
//            'weight.required' => 'Укажите вес спортсмена',
//            'weight.numeric' => 'Укажите вес спортсмена в kg',
//            'phone.required' => 'Укажите контактный номер телефона',
//            'phone.regex' => 'Укажите контактный номер телефона в формате +380123456789',
            'email.required' => 'Укажите контактный e-mail адрес',
            'email.email' => 'Укажите корректный e-mail адрес',
            'email.unique' => 'Такой e-mail уже зарегистрирован',
            'password.required' => 'Укажите пароль: минимум 8 символов латинницей',
            'password.min' => 'Укажите пароль: минимум 8 символов латинницей',
            'password.confirmed' => 'Пароль и подтверждение не совпадают'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 0,
                    'errors'=>$validator->errors()->all()
                ]
            );

        }
        return Response::json([
            'status' => 1,
            'profileLink' => route('dashboard.gymnast_profile', ['id' => 4])
        ]);
    }

    public function profileAction($id)
    {
        $gymnast = User::find($id);
        if (!$gymnast) {
            return redirect()->route('dashboard.gymnasts')->with('flashError', 'Гимнаст не найден');
        }
        return view('dashboard.gymnast_profile', ['gymnast' => $gymnast]);
    }
}
