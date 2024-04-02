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

    public function sortDelete(){
        $Levels = level::onlyTrashed()->paginate(10);
        return view('admin.pages.levels.sortDelete',compact('Levels'));
    }

    public function searchSortDelete(Request $request){
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $request->validate([
            'startDate' => 'required|before:endDate',
            'endDate' => 'required|after:startDate'
        ], [
            'startDate.required' => 'Không được để trống ngày bắt đầu',
            'startDate.before' => 'Ngày bắt đầu phải trước ngày kết thúc',
            'endDate.required' => 'Không được để trống ngày kết thúc',
            'endDate.after' => 'Ngày kết thúc phải sau ngày bắt đầu'
        ]);
        $Levels = level::onlyTrashed()->whereBetween('created_at', [$startDate, $endDate])->paginate(10);
        return view('admin.pages.levels.sortDelete',compact('Levels','startDate','endDate'));
    }

    public function search(Request $request){
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $request->validate([
            'startDate' => 'required|before:endDate',
            'endDate' => 'required|after:startDate'
        ], [
            'startDate.required' => 'Không được để trống ngày bắt đầu',
            'startDate.before' => 'Ngày bắt đầu phải trước ngày kết thúc',
            'endDate.required' => 'Không được để trống ngày kết thúc',
            'endDate.after' => 'Ngày kết thúc phải sau ngày bắt đầu'
        ]);
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
        $level = level::withTrashed()->find($id);
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

        $level = level::withTrashed()->find($request->id);

        $level->nameLevel = $request->nameLevel;
        $level->description = $request->description;
        $level->save();

        return redirect()->route('admin.levels.index');
    }




    public function restore($id){
        $idsArr = explode(',', $id);
        level::withTrashed()->whereIn('id', $idsArr)->restore();
        return redirect()->route('admin.levels.sortDeleteRecord');
    }
    public function delete($ids){
        $idsArr = explode(',',$ids);
        level::destroy($idsArr);
        return redirect()->route('admin.levels.index');
    }
}
