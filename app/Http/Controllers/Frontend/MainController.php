<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function indexAction()
    {
        return view('frontend.home');
    }

    public function registerAction()
    {
        return view('frontend.registration');
    }

    public function postRegisterAction(Request $request)
    {
        $rules = [
            'full_name' => 'required|regex:/(^[А-ЯЦцУуШшЩщФфЫыРрЭэЧчТтЬьЮюЪъХхЁа-яё ]+$)+/|min:10|max:50|unique:users',
            'birthdate' => 'required|date_format:d.m.Y',
            'sex'=> 'required|alpha|max:6',
            'weight' => 'required|numeric',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|confirmed|min:8',
        ];
        $messages = [
            'full_name.required' => 'Введите Ф.И.О. полностью',
            'full_name.min' => 'Минимум 10 символов',
            'full_name.max' => 'Максимум 50 символов',
            'full_name.unique' => 'Спортсмен с такими данными Ф.И.О.  уже зарегистрирован',
            'full_name.regex' => 'Допустимые символы - только буквы и пробел',
            'birthdate.required' => 'Введите дату рождения в формате ДД.ММ.ГГГГ',
            'birthdate.date_format' => 'Введите дату рождения в формате ДД.ММ.ГГГГ',
            'sex.required' => 'Укажите пол спортсмена',
            'weight.required' => 'Укажите вес спортсмена',
            'weight.numeric' => 'Укажите вес спортсмена в kg',
            'phone.required' => 'Укажите контактный номер телефона',
            'phone.regex' => 'Укажите контактный номер телефона в формате +380123456789',
            'email.required' => 'Укажите контактный e-mail адрес',
            'email.email' => 'Укажите корректный e-mail адрес',
            'email.unique' => 'Такой e-mail уже зарегистрирован',
            'password.required' => 'Укажите пароль: минимум 8 символов латинницей',
            'password.min' => 'Укажите пароль: минимум 8 символов латинницей',
            'password.confirmed' => 'Пароль и подтверждение не совпадают'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('registration')->withErrors($validator)->withInput();
        }

        // Register new user
        $user = new User();
        $user->name = $request->full_name;
        $user->full_name = $request->full_name;
        $user->dojo_role = 'karateka';
        $user->grade = '0 kyu';
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->name);

        $user->save();

    }
}
