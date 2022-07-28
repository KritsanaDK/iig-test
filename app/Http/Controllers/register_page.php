<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use lluminate\Support\Facade\Storage;
use lluminate\Support\Facade\File;

class register_page extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    // public function login(Request $request)
    // {
    //     $userName = $request->userName;
    //     $password = $request->password;

    //     $result = DB::select('SELECT * FROM laravel_iig.register_users;');

    //     // $json_result = json_encode($result);

    //     return response()->json($result);
    // }

    public function store(Request $request)
    {
        // $validator = $request->validate([
        //     'userName' => 'required|unique:posts|max:255',
        //     'confirm1' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // } else {
        try {
            // Validate the value...
            $userName = $request->userName;
            $password1 = $request->confirm1;
            $password2 = $request->confirm2;
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $file_img = 'no file';

            $hasim = $request->hasFile('image_file');

            if ($hasim) {
                $fileimage = $request->file('image_file');

                $extension = $fileimage->getClientOriginalExtension();

                $filename = time() . '.' . $extension;

                $fileimage->move('uploads/', $filename);

                $file_img = $filename;
            }

            $result = DB::insert("INSERT INTO laravel_iig.register_users (user_name, passwords, first_name, last_name, img_path) VALUES ('$userName', PASSWORD('$password1'), '$first_name', '$last_name', '$file_img');");

            DB::insert("INSERT INTO laravel_iig.register_users_his (user_name, passwords) VALUES ('$userName', PASSWORD('$password1'));");
            // return redirect()
            //     ->back()
            //     ->with('success', 'saved');
            return response()->json(['status' => 200, 'result' => 'ok']);
            // }
        } catch (Throwable $e) {
            // return response()->json(['status' => 200, 'result' => $e]);
        }
        // }
    }

    public function register_checkName(Request $request)
    {
        $userName = $request->userName;

        $result = DB::select("SELECT * FROM laravel_iig.register_users where user_name = '$userName';");

        // $json_result = json_encode($result);

        return response()->json($result);
    }

    public function register_checkPassword(Request $request)
    {
        $userName = $request->userName;
        $confirm1 = $request->confirm1;

        $result = DB::select("select * from (SELECT * FROM laravel_iig.register_users_his where user_name = '$userName' order by date_time desc limit 5) tb1 where tb1.passwords = password('$confirm1')");

        // $json_result = json_encode($result);

        return response()->json($result);
    }

    public function update_profile(Request $request)
    {
        try {
            $userName = $request->userName;

            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $file_img = 'no file';
            $hasim = $request->hasFile('image_file');

            if ($hasim) {
                $fileimage = $request->file('image_file');
                $extension = $fileimage->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $fileimage->move('uploads/', $filename);
                $file_img = $filename;
                DB::update("UPDATE laravel_iig.register_users SET img_path = '$filename' WHERE user_name = '$userName';");
            }

            $result = DB::update("UPDATE laravel_iig.register_users SET first_name = '$first_name', last_name='$last_name' WHERE user_name = '$userName';");

            if ($request->has('confirm1')) {
                $password1 = $request->confirm1;
                if (strlen($password1) > 0) {
                    DB::insert("INSERT INTO laravel_iig.register_users_his (user_name, passwords) VALUES ('$userName', PASSWORD('$password1'));");
                    DB::update("UPDATE laravel_iig.register_users SET passwords = PASSWORD('$password1') WHERE user_name = '$userName';");
                }
            }

            return response()->json(['status' => 200, 'result' => 'ok2']);
        } catch (Throwable $e) {
            return response()->json(['status' => 201, 'result' => 'NG']);
        }
    }
}
