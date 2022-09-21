<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Info;
use \App\Models\File;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function info()
    {
    	$info = \App\Models\Info::simplePaginate(10);
    	return view('info.info', ['info' => $info]);
    }

    public function create()
    {
    	$type = \App\Models\Type::all();
    	return view('info.create', compact('type'));
    }

    public function store(Request $request)
    {
    	$info = new Info();
        $info->infotypeid = $request->input("infotypeid");
        $info->createdby = Auth::user()->userid;
        $info->updatedby = Auth::user()->userid;
        $info->descriptions = $request->input("descriptions");
        $info->save();

        $file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
		$do->reftypeid = 11;
        $do->isactive = 'false';
		$do->refid = $info->infoid;
        $do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
    	return redirect('/info');
    }

    public function edit($id)
    {
    	$info = \App\Models\Info::find($id);
        $type = \App\Models\Type::all();
        $file = \App\Models\File::where(['refid' => $info->infoid, 'reftypeid' => 11, 'isactive'=> 'true'])->get();
        
    	return view('info.edit', ['info' => $info, 'type' => $type]);
    }

    public function update(Request  $request,$id)
    {
        $info = \App\Models\Info::find($id);
        $info->infotypeid = $request->input("infotypeid");
        $info->updatedby = Auth::user()->userid;
        $info->descriptions = $request->input("descriptions");
        $info->save();

        $file = \App\Models\File::where(['refid' => $info->infoid, 'reftypeid' => 11, 'isactive'=> 'true'])->get();
        $file->reftypeid = 11;
		$file->refid = $info->infoid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
        }
        return redirect('/info');
    }

    public function isActive($id)
    {
        $data = Info::where('infoid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Info::where('infoid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Info::where('infoid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/info');
    }

    public function delete($id)
    {
    	$info = \App\Models\Info::find($id, ['infoid']);
        $info->delete();
    	return redirect('/info');
    }
}
