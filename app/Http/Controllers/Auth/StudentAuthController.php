<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register_student');
    }

    public function register(Request $request)
    {
        $request->validate([
            'matric_no' => 'required|integer|unique:students,matric_no',
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|confirmed',
        ]);

        $student = Student::create([
            'matric_no' => $request->matric_no,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('student')->login($student);

        return redirect()->route('student.home')->with('success', 'Welcome to UniMeal!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $student = Student::where('email', $request->email)->first();

        if ($student && Hash::check($request->password, $student->password)) {
            Auth::guard('student')->login($student);
            return redirect()->route('student.home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
