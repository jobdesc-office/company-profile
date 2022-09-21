<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function service()
 	{
 		$service = \App\Models\Service::simplePaginate(10);
    	return view('service.service', ['service' => $service]);
 	}

 	public function create()
    {
    	return view('service.create');
    }

    public function store(Request $request)
    {
    	$ser = new Service();
        $ser->servicename = $request->input("servicename");
        $ser->servicedesc = $request->input("servicedesc");
        $ser->createdby = Auth::user()->userid;
        $ser->updatedby = Auth::user()->userid;
        $ser->save();

        $file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
		$do->reftypeid = 21;
		$do->refid = $ser->serviceid;
        $do->isactive = 'false';
        $do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
    	return redirect('/service');
    }

     public function edit($id)
    {
    	$service = \App\Models\Service::find($id);
        $file = \App\Models\File::where(['refid' => $service->serviceid, 'reftypeid'=> 21, 'isactive'=> 'true'])->get();
    	return view('service.edit', ['service' => $service]);	
    }

    public function update(Request $request,$id)
    {
    	$ser = \App\Models\Service::find($id);
        $ser->servicename = $request->input("servicename");
        $ser->servicedesc = $request->input("servicedesc");
        $ser->updatedby = Auth::user()->userid;
        $ser->save();
    	
        $file = \App\Models\File::where(['refid' => $ser->serviceid, 'reftypeid'=> 21, 'isactive'=> 'true'])->get();
    	$file->reftypeid = 21;
		$file->refid = $ser->serviceid;
        $file->updatedby = Auth::user()->userid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}
    	return redirect('/service');
    }

    public function isActive($id)
    {
        $data = Service::where('serviceid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Service::where('serviceid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Service::where('serviceid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/service');
    }

    public function delete($id)
    {
    	$service = \App\Models\Service::find($id, ['serviceid']);
        $service->delete();
    	return redirect('/service');
    }   
}
