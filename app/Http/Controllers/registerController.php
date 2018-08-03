<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Register;

use PDF;

class registerController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'nama'      => $request['nama'],
            'nrp'       => $request['nrp'],
            'kelas'     => $request['kelas'],
            'email'     => $request['email'],
            'no_wa'     => $request['no_wa'],
            'id_line'   => $request['id_line'],
        ];

        Register::create($data);
      
        return redirect('/')->with('success','Selamat Bergabung di Web Dev');
    }

    public function exportPDF() 
    {
        $user_registers = Register::all();

        $pdf = PDF::loadView('pdf', compact('user_registers'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream();

    }
}
