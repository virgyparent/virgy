<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $room = Room::get();
        return view('room', compact('room'));
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = Room::create([
            "name" => $request->name,
            "no_kamar" => $request->no_kamar,
            "lantai" => $request->lantai
        ]);

        return redirect()->to('/');
    }

    public function delete(Request $request)
    {
        $room = Room::find($request->id)->delete();
        return redirect()->back();
    }
}
