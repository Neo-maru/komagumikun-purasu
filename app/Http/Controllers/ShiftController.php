<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Models\Teacher;


class ShiftController extends Controller
{
    public function about()
    {
        return view('shift.about');
    }
    public function index(Request $request)
    {
        $id = $request->id;
        return view('shift.index', compact('id'));
    }
    public function show()
    {
        return view('shift.show');
    }

    public function create()
    {
        return view('shift.create');
    }
    public function store()
    {
        return view('shift.store');
    }

    public function edit()
    {
        return view('shift.edit');
    }
    public function update()
    {
        return view('shift.update');
    }
}
