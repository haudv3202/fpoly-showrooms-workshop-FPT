<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class domainController extends Controller
{
    public function index(){
        $allDomain = domain::paginate(10);
        return view('admin.pages.domain.index',compact('allDomain'));
    }

    public function search(Request $request){
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $allDomain = domain::whereBetween('created_at', [$startDate, $endDate])->paginate(10);
        return view('admin.pages.domain.index',compact('allDomain','startDate','endDate'));
    }

    public function create(){
        return view('admin.pages.domain.create');
    }

    public function store(Request $request){
        $request->validate([
            'is_active' => 'required',
            'nameDomain' => 'required|unique:domains,name',
        ],[
            'is_active.required' => 'Không được để trống trạng thái hiển thị',
            'nameDomain.required' => 'Không được để trống têm lĩnh vực',
            'nameDomain.unique' => 'Tên lĩnh vực đã tồn tại'
        ]);

        domain::create([
            'is_active' => $request->is_active,
            'name' => $request->nameDomain
        ]);

        return redirect()->route('admin.domain.index');
    }

    public function edit($id){
        $domain = domain::find($id);
        return view('admin.pages.domain.edit',compact('domain'));
    }

    public function update(Request $request){
        $request->validate([
            'is_active' => 'required',
            'nameDomain' => 'required',
        ],[
            'is_active.required' => 'Không được để trống trạng thái hiển thị',
            'nameDomain.required' => 'Không để trống tên lĩnh vực'
        ]);

        $domain = domain::find($request->id);

        $domain->is_active = $request->is_active;
        $domain->name = $request->nameDomain;
        $domain->save();

        return redirect()->route('admin.domain.index');
    }

    public function delete($ids){
        $idsArr = explode(',',$ids);
        domain::destroy($idsArr);
        return redirect()->route('admin.domain.index');
    }
}
