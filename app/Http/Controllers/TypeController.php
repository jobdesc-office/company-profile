<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Type;

class TypeController extends Controller
{
    public function type()
    {
    	$type = \App\Models\Type::simplePaginate(10);
    	return view('type.type', ['type' => $type]);
    }

    public function create()
    {
    	$type = \App\Models\Type::all();
    	return view('type.create', compact('type'));
    }

    public function store(Request $request)
    {
    	$type = new Type();
        $type->typename = $request->input('typename');
        $type->masterid = $request->input('masterid');
        $type->createdby = Auth::user()->userid;
        $type->updatedby = Auth::user()->userid;
        $type->save();
    	return redirect('/type');
    }

    public function edit($id)
    {
    	$type = \App\Models\Type::find($id);
        $induk = \App\Models\Type::all();
    	return view('type.edit', ['type' => $type, 'induk' => $induk]);
    }

    public function update(Request  $request,$id)
    {
        $type = \App\Models\Type::find($id);
        $type->updatedby = Auth::user()->userid;
        $type->update($request->all());
        return redirect('/type');
    }

    public function delete($id)
    {
    	$type = \App\Models\Type::find($id, ['typeid']);
        $type->delete();
    	return redirect('/type');
    }
}
