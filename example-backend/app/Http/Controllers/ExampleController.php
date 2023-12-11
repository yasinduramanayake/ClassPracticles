<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function firstFun()
    {
        $user = 'user';
        return $user;
    }

    public function getSum()
    {
        $number1 = 5;
        $number2 = 4;
        $sum = $number1 + $number2;

        return  $sum;
    }

    public function getSumWithPayload(Request $request)
    {
        $data = $request->validate([
            'number1' => 'required|integer',
            'number2' => 'required|integer',
        ]);

        $number1 = $data['number1'];
        $number2 = $data['number2'];
        // $number2 = 4;
        // $sum = $number1 + $number2;

        return  $number1 + $number2;
    }
}
