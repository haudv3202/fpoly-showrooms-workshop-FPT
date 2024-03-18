<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\technicals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class technicalsController extends Controller
{
    public function index(){
        $allTechnicals = technicals::paginate(10);
        return view('admin.pages.technicals.index',compact('allTechnicals'));
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
        $allTechnicals = technicals::whereBetween('created_at', [$startDate, $endDate])->paginate(10);
        return view('admin.pages.technicals.index',compact('allTechnicals','startDate','endDate'));
    }

    public function create(){
        return view('admin.pages.technicals.create');
    }

    public function store(Request $request){
        $request->validate([
            'technicalsName' => 'required|unique:technicals,name'
        ],[
            'technicalsName.required' => 'Không được để trống tên công nghệ',
            'technicalsName.unique' => 'Tên công nghệ đã tồn tại'
        ]);

        technicals::create([
            'name' => $request->technicalsName
        ]);

        return redirect()->route('admin.technicals.index');
    }

    public function edit($id){
        $technicalsOne = technicals::find($id);
        return view('admin.pages.technicals.edit',compact('technicalsOne'));
    }

    public function update(Request $request){
        $request->validate([
            'technicalsName' => 'required'
        ],[
            'technicalsName.required' => 'Không được để trống trạng thái hiển thị'
        ]);

        $technicals = technicals::find($request->id);

        $technicals->name = $request->technicalsName;
        $technicals->save();

        return redirect()->route('admin.technicals.index');
    }

    public function delete($ids){
        $idsArr = explode(',',$ids);
        technicals::destroy($idsArr);
        return redirect()->route('admin.technicals.index');
    }
}
