<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
 	public function team()
 	{
 		$team = \App\Models\Team::simplePaginate(10);
    	return view('team.team', ['team' => $team]);
 	}

 	public function create()
    {
		$type = \App\Models\Type::all();
    	return view('team.create', ['type' => $type]);
    }

    public function store(Request $request)
    {
    	$team = new Team();
		$team->teamname = $request->input("teamname");
		$team->teamjob = $request->input("teamjob");
		$team->descriptions = $request->input("descriptions");
		$team->createdby = Auth::user()->userid;
        $team->updatedby = Auth::user()->userid;
		$team->save();

		$file = $request->file('filename');
        $namaFile = $file->getClientOriginalName();
        $request->file('filename')->move('files/', $namaFile);
        $do = new File();
		$do->reftypeid = 9;
		$do->refid = $team->teamid;
		$do->isactive = 'false';
		$do->createdby = Auth::user()->userid;
        $do->updatedby = Auth::user()->userid;
        $do->filename = $namaFile;
        $do->save();
		return redirect('/team');
	}

     public function edit($id)
    {
    	$team = \App\Models\Team::find($id);
		//dd($team);
		$file = \App\Models\File::where(['refid' => $team->teamid, 'reftypeid' => 9, 'isactive'=> 'true'])->get();
		//dd($file);
    	return view('team.edit', ['team' => $team]);	
    }

    public function update(Request $request,$id)
    {
    	$team = \App\Models\Team::find($id);
		$team->teamname = $request->input("teamname");
		$team->teamjob = $request->input("teamjob");
		$team->descriptions = $request->input("descriptions");
        $team->updatedby = Auth::user()->userid;
		$team->save();

		$file = \App\Models\File::where(['refid' => $team->teamid, 'reftypeid' => 9, 'isactive'=> 'true'])->get();
    	$file->reftypeid = 9;
		$file->refid = $team->teamid;
        $file->updatedby = Auth::user()->userid;
    	if($request->hasFile('filename')){
    		$request->file('filename')->move('files/',$request->file('filename')->getClientOriginalName());
    		$file->filename = $request->file('filename')->getClientOriginalName();
    		$file->save();
		}

    	return redirect('/team');
    }

	public function isActive($id)
    {
        $data = Team::where('teamid',$id)->first();

        $active = $data->isactive;
        
        if($active == true){
            Team::where('teamid',$id)->update([
                'isactive' => false
            ]);
        }else{
            Team::where('teamid',$id)->update([
                'isactive' => true
            ]);
        }

        return redirect('/team');
    }

    public function delete($id)
    {
    	$team = \App\Models\Team::find($id, ['teamid']);
        $team->delete();
    	return redirect('/team');
    }   
}
