<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emplo;

class EmploController extends Controller
{
    public function index()
    {
        // $emplos akan disambung ke index dan akan dikirim ke sana
        //Emplo:all ini dia itu dari model 
        $emplos = Emplo::all();
        return view('Emplo.index',['emplo' =>$emplos]);
    }

    public function create()
    {
        return view('Emplo.create');
    }

    public function store(Request $request)
    {
        $data= $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|min:20||numeric',
            'address' => 'required|min:10|max:40',
            'tanggal_lahir'=>'required',
            'agama'=> 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'nomor_telepon' => 'required|min:9|max:12'
        ]);

        $newEmplo = Emplo::create($data); // sesuai model

        return redirect(route('Emplo.index'));
    }

    // public function edit(Emplo $emplos)
    // {
    //     // $emplos = Emplo::all();
    //     // $emplos = Emplo::find($id);
    //     return view('Emplo.edit', ['emplos' => $emplos]); // ['emplo' => $emplo yang di pasing ke blade 
    // }

    public function edit(string $id)
{
    $chipi=Emplo::where('id',$id)->first();
    return view('Emplo.edit',[
        'emplos'=> $chipi
    ]);
}


    public function update(Request $request,$id)
    {
        $data= $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|min:20||numeric',
            'address' => 'required|min:10|max:40',
            'tanggal_lahir'=>'required',
            'agama'=> 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'nomor_telepon' => 'required|min:9|max:12'
        ]);

        $emplos=Emplo::findOrFail($id);

        $emplos->update($data);

        return redirect(route('Emplo.index'))->with('sucess', 'Data Updated Succesfuly');
    }

    public function destroy(Emplo $emplos)
    {
        $emplos->delete();
        return redirect(route('Emplo.index'))->with('sucess', 'Data Deleted Succesfuly');
    }
}