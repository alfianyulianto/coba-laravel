<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index', ['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // // Validation biasa
    // public function store(Request $request)  
    // {

    //     // $request->validate([
    //     //     'nama' => 'required|max:10',
    //     //     'nim' => 'required|max:10',
    //     //     'email' => 'required|email:dns',
    //     //     'jurusan' => 'required',
    //     // ]);

    //     // $request berisi apapun yang kita inputkan di dalam form
    //     // return $request;
    //     // $student = new Student();
    //     // $student->nama = $request->nama;
    //     // $student->nim = $request->nim;
    //     // $student->email = $request->email;
    //     // $student->jurusan = $request->jurusan;
    //     // $student->save();

    //     Student::create([
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'email' => $request->email,
    //         'jurusan' => $request->jurusan,
    //     ]);

    //     return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    // }

    // Customizing The Error Messages
    public function store(StoreStudentsRequest $request)
    {
        $validated = $request->validated();

        // $request berisi apapun yang kita inputkan di dalam form
        // return $request;
        // $student = new Student();
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        Student::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)      // model binding
    {
        // dd($student);        // lihat pada bagian attribute
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // $request : data request yang dikirimkan ketika kita meelakukan input pada form
        // $student : data yang berasal dari model Student
        // return $request;

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|max:10',
            'email' => 'required|email:dns',
            'jurusan' => 'required',
        ]);

        // $student = Student::find($student->id);
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        Student::destroy($id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
