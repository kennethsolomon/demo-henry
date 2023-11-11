<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $datas = Test::get(); // All Data
        echo $datas;
    }

    public function create()
    {
        $test = Test::create([
            'name' => 'Henry',
            'age' => 28,
        ]);

        return view('test', ['data' => $test]);
    }

    public function update()
    {
        $user = Test::find(1); // Kenneth

        $user->update([
            'name' => 'Kennethv2',
            'age' => 24,
        ]);
    }

    public function delete()
    {
        $user = Test::find(2); // Kenneth
        $user->delete();
    }
}
