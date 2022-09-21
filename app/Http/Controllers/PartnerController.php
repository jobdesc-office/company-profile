<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function partner()
    {
    	$partner = \App\Models\Partner::simplePaginate(10);
    	return view('partner.partner', ['partner' => $partner]);
    }

    public function create()
    {
    	return view('partner.create');
    }

    public function store(Request $request)
    {
    	$part = new Partner();
        $part->partnername = $request->input("partnername");
        $part->descriptions = $request->input("descriptions");
        $part->createdby = Auth::user()->userid;
        $part->updatedby = Auth::user()->userid;
        $part->save();

        $file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
		$do->reftypeid = 15;
		$do->refid = $part->partnerid;
        $do->isactive = 'false';
        $do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
    	return redirect('/partner');
    }

    public function edit($id)
    {
    	$partner = \App\Models\Partner::find($id);
        $file = \App\Models\File::where(['refid' => $partner->partnerid, 'reftypeid' => 15, 'isactive'=> 'true'])->get();
        
    	return view('partner.edit', ['partner' => $partner]);	
    }

    public function update(Request $request,$id)
    {
    	$part = \App\Models\Partner::find($id);
    	$part->partnername = $request->input("partnername");
        $part->descriptions = $request->input("descriptions");
        $part->updatedby = Auth::user()->userid;
        $part->save();

        $file = \App\Models\File::where(['refid' => $part->partnerid, 'reftypeid' => 15, 'isactive'=> 'true'])->get();
    	$file->reftypeid = 15;
		$file->refid = $part->partnerid;
        $file->updatedby = Auth::user()->userid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}
    	return redirect('/partner');
    }

    public function isActive($id)
    {
        $data = Partner::where('partnerid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Partner::where('partnerid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Partner::where('partnerid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/partner');
    }

    public function delete($id)
    {
    	$partner = \App\Models\Partner::find($id, ['partnerid']);
        $partner->delete();
    	return redirect('/partner');
    }
}
