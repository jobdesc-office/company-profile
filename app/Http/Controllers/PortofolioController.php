<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Portofolio;
use \ App\Models\File;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    public function portofolio()
    {
    	$portofolio = \App\Models\Portofolio::simplePaginate(10);
    	return view('portofolio.portofolio', ['portofolio' => $portofolio]);
    }

    public function create()
    {
    	return view('portofolio.create');
    }

    public function store(Request $request)
    {
        $port = new Portofolio();
        $port->portofolioname = $request->input("portofolioname");
        $port->descriptions = $request->input("descriptions");
        $port->createdby = Auth::user()->userid;
        $port->updatedby = Auth::user()->userid;
        $port->save();

        $file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
		$do->reftypeid = 10;
		$do->refid = $port->portofolioid;
        $do->isactive = 'false';
        $do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
    	return redirect('/portofolio');
    }

    public function edit($id)
    {
    	$portofolio = \App\Models\Portofolio::find($id);
        $file = \App\Models\File::where(['refid' => $portofolio->portofolioid, 'reftypeid' => 10, 'isactive'=> 'true'])->get();
    	return view('portofolio.edit', ['portofolio' => $portofolio]);	
    }

    public function update(Request $request,$id)
    {
    	$portofolio = \App\Models\Portofolio::find($id);
        $portofolio->portofolioname = $request->input("portofolioname");
        $portofolio->descriptions = $request->input("descriptions");
        $portofolio->updatedby = Auth::user()->userid;
        $portofolio->save();
    	
        $file = \App\Models\File::where(['refid' => $portofolio->portofolioid, 'reftypeid' => 10, 'isactive'=> 'true'])->get();
    	$file->reftypeid = 10;
		$file->refid = $portofolio->portofolioid;
        $file->updatedby = Auth::user()->userid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}
    	return redirect('/portofolio');
    }

    public function isActive($id)
    {
        $data = Portofolio::where('portofolioid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Portofolio::where('portofolioid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Portofolio::where('portofolioid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/portofolio');
    }

    public function delete($id)
    {
    	$portofolio = \App\Models\Portofolio::find($id, ['portofolioid']);
        $portofolio->delete();
    	return redirect('/portofolio');
    }
}
