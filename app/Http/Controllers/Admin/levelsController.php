<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\level;
use Illuminate\Http\Request;

class levelsController extends Controller
{
    public function index(){
        $Levels = level::paginate(10);
        return view('admin.pages.levels.index',compact('Levels'));
    }

    public function search(Request $request){
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $Levels = level::whereBetween('created_at', [$startDate, $endDate])->paginate(10);
        return view('admin.pages.levels.index',compact('Levels','startDate','endDate'));
    }

    public function create(){
        return view('admin.pages.levels.create');
    }

    public function store(Request $request){
        $request->validate([
            'nameLevel' => 'required',
            'description' => 'required',
        ],[
            'nameLevel.required' => 'Không được để trống trạng thái hiển thị',
            'nameDomain.required' => 'Không được để trống têm lĩnh vực'
        ]);

        level::create([
            'name' => $request->nameLevel,
            'description' => $request->description
        ]);

        return redirect()->route('admin.levels.index');
    }

    public function edit($id){
        $level = level::find($id);
        return view('admin.pages.levels.edit',compact('level'));
    }

    public function update(Request $request){
        $request->validate([
            'nameLevel' => 'required',
            'description' => 'required',
        ],[
            'nameLevel.required' => 'Không được để trống trạng thái hiển thị',
            'nameDomain.required' => 'Không được để trống têm lĩnh vực'
        ]);

        $level = level::find($request->id);

        $level->nameLevel = $request->nameLevel;
        $level->description = $request->description;
        $level->save();

        return redirect()->route('admin.levels.index');
    }

    public function delete($ids){
        $idsArr = explode(',',$ids);
        level::destroy($idsArr);
        return redirect()->route('admin.levels.index');
    }
}
