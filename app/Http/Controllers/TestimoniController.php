<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\File;

class TestimoniController extends Controller
{
    public function testimoni()
 	{
 		$testimoni = \App\Models\Testimoni::simplePaginate(10);
    	return view('testimoni.testimoni', ['testimoni' => $testimoni]);
 	}

 	public function create()
    {
    	return view('testimoni.create');
    }

    public function store(Request $request)
    {
        $tes = new Testimoni();
        $tes->testimonifrom = $request->input("testimonifrom");
        $tes->testimonidesc = $request->input("testimonidesc");
        $tes->save();

        $file = $request->file('filename');

        foreach ($file as $file) { 

            $namaFile = $file->getClientOriginalName();
            $file->move('files/', $namaFile);
            $do = new File();
            $do->reftypeid = 17;
            $do->isactive = 'false';
            $do->refid = $tes->testimoniid;
            $do->filename = $namaFile;
            $do->save();
        }
        
    	return redirect('/testimoni');
    }

     public function edit($id)
    {
    	$testimoni = \App\Models\Testimoni::find($id);
        $file = \App\Models\File::where(['refid' => $testimoni->testimoniid, 'reftypeid' => 17, 'isactive'=> 'true'])->get();
    	return view('testimoni.edit', ['testimoni' => $testimoni]);	
    }

    public function update(Request $request,$id)
    {
    	$testimoni = \App\Models\Testimoni::find($id);
    	$testimoni->testimonifrom = $request->input("testimonifrom");
        $testimoni->testimonidesc = $request->input("testimonidesc");
        $testimoni->save();

        $file = \App\Models\File::where(['refid' => $testimoni->testimoniid, 'reftypeid' => 17, 'isactive'=> 'true'])->get();
    	$file->reftypeid = 17;
		$file->refid = $testimoni->testimoniid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}
    	return redirect('/testimoni');
    }

    public function isActive($id)
    {
        $data = Testimoni::where('testimoniid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Testimoni::where('testimoniid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Testimoni::where('testimoniid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/testimoni');
    }

    public function delete($id)
    {
    	$testimoni = \App\Models\Testimoni::find($id, ['testimoniid']);
        $testimoni->delete();
    	return redirect('/testimoni');
    }   
}
