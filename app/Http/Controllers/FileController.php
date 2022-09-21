<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function file()
    {
    	$file = \App\Models\File::simplePaginate(10);
    	return view('file.file', ['file' => $file]);
    }

     public function create()
    {
    	$type = \App\Models\Type::all();
    	$team =  \App\Models\Team::all();
    	$partner =  \App\Models\Partner::all();
        $info = \App\Models\Info::all();
        $partner = \App\Models\Partner::all();
    	$portofolio =  \App\Models\Portofolio::all();
        $testimoni = \App\Models\Testimoni::all();
        $service = \App\Models\service::all();
    	return view('file.create', compact('type', 'team', 'partner', 'portofolio', 'info', 'partner', 'testimoni', 'service'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'filename' => 'required',
            'reftypeid' => 'required',
			'refid' => 'required',
            ]);

        $file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
        $do->reftypeid = $request->input('reftypeid');
        $do->refid = $request->input('refid');
        $do->isactive = 'false';
        $do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
		
    	return redirect('/file');
    }

	public function edit($id)
    {
		$file = \App\Models\File::find($id);
    	$info = \App\Models\Info::all();
        $type = \App\Models\Type::all();
    	$team =  \App\Models\Team::all();
    	$partner =  \App\Models\Partner::all();
    	$portofolio =  \App\Models\Portofolio::all();
        $testimoni =  \App\Models\Testimoni::all();
        $service =  \App\Models\Service::all();
    	return view('file.edit', ['file' => $file, 'type' => $type, 'info' => $info,
		'team' => $team, 'partner' => $partner, 'portofolio' => $portofolio, 'testimoni' => $testimoni,
        'service' => $service]);
    }

    public function update(Request  $request,$id)
    {
        $file = \App\Models\File::find($id);
    	$file->reftypeid = $request->input('reftypeid');
        $file->refid = $request->input('refid');
        $file->updatedby = Auth::user()->userid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}
        return redirect('/file');
    }

    public function isActive($id)
    {
        $data = File::where('fileid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            File::where('fileid',$id)->update([
                'isactive' => false
            ]);
        }else{
            File::where('fileid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/file');
    }

    public function delete($id)
    {
    	$file = \App\Models\File::find($id, ['fileid']);
        $file->delete();
    	return redirect('/file');
    }
}
