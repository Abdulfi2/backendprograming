<?php

namespace App\Http\Controllers;

# mengimport model Student
# digunakan untuk berinteraksi dengan database
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    # membuat method index
    public function index()
    {
        # menggunakan model Student untuk select data
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        # mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }

    # membuat method store
    public function store(Request $request)
    {
        # menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        # menggunakan model Student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }
}