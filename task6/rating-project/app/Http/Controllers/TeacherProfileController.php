<?php

namespace App\Http\Controllers;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;

class TeacherProfileController extends Controller
{
    //
    public function index()
{
    $profiles = TeacherProfile::latest()->get();
    return view('index', compact('profiles'));
}

public function show($id)
{
    $profile = TeacherProfile::findOrFail($id);
    return view('show', compact('profile'));
}

public function create()
{
    return view('form');
}

public function store(Request $request)
{
      $data = $request->all();

    // إذا في صورة
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('teachers', 'public');
    }

    TeacherProfile::create($data);

    return redirect()->route('teacher_profiles.index');
}
}
