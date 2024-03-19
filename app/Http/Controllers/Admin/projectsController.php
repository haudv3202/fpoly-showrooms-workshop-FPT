<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\domains;
use App\Models\images;
use App\Models\level;
use App\Models\project_domains;
use App\Models\project_users;
use App\Models\projects;
use App\Models\technical_projects;
use App\Models\technicals;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class projectsController extends Controller
{
    public function index()
    {
        $projects = projects::with('level')->paginate(10);
        return view('admin.pages.projects.index', compact('projects'));
    }

    public function search(Request $request)
    {
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
        $projects = projects::with('level')->whereBetween('created_at', [$startDate, $endDate])->paginate(10);

        return view('admin.pages.projects.index', compact('projects', 'startDate', 'endDate'));
    }

    public function create()
    {
        $levels = level::all();
        $technicals = technicals::all();
        $domains = domains::all();
        $users = User::all();
        return view('admin.pages.projects.create', compact('levels', 'technicals', 'domains', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameProject' => 'required',
            'description' => 'required',
            'linkDeloy' => 'required',
            'imageProjectAvatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'imagesDescription' => 'required',
            'level' => 'required',
            'technicalsUse' => 'required',
            'domains' => 'required',
            'members' => 'required',
            'is_active' => 'required',
        ], [
            'nameProject.required' => 'Không được để trống tên dự án',
            'description.required' => 'Không được để trống mô tả',
            'linkDeloy.required' => 'Không được để trống link triển khai',
            'imageProjectAvatar.required' => 'Không được để trống ảnh',
            'imageProjectAvatar.image' => 'Ảnh không đúng định dạng',
            'imageProjectAvatar.max' => 'Ảnh không quá 5MB',
            'imagesDescription.required' => 'Không được để trống ảnh mô tả',
            'imagesDescription.max' => 'Ảnh không quá 5MB',
            'level.required' => 'Không được để trống cấp độ',
            'technicalsUse.required' => 'Không được để trống kỹ thuật sử dụng',
            'domains.required' => 'Không được để trống lĩnh vực',
            'members.required' => 'Không được để trống thành viên',
            'is_active.required' => 'Không được để trống trạng thái hiển thị'
        ]);
        $data = [];

        $idProjects = projects::create([
            'name' => $request->nameProject,
            'description' => $request->description,
            'deploy_link' => $request->linkDeloy,
            'level_id' => $request->level,
            'added_by' => json_encode($request->members),
            'is_highlight' => empty($request->is_highlight) ? 0 : 1,
            'is_active' => $request->is_active,
            'views' => 0,
            'created_at' => Carbon::now()
        ])->id;

        foreach ($request->imagesDescription as $item) {
            $imagesFile = json_decode($item);
            $extension = pathinfo($imagesFile->name, PATHINFO_EXTENSION);   // .jpg .png .pdf

            $imageName = Str::random(10) . '.' . $extension;
            $data[3][] = [
                'image' => $imageName,
                'is_active' => 0,
                'type' => 2,
                'projects_id' => $idProjects
            ];
            Storage::disk('public')->put('description/' . $imageName, base64_decode($imagesFile->data));
        }

        $imageName = time() . '.' . $request->imageProjectAvatar->extension();
        $request->imageProjectAvatar->storeAs('public/images/projects/avatar/', $imageName);


        foreach ($request->members as $item) {
            $data[0][] = [
                'projects_id' => $idProjects,
                'author_id' => $item
            ];
        }


        foreach ($request->domains as $item) {
            $data[1][] = [
                'projects_id' => $idProjects,
                'domains_id' => $item
            ];
        }

        foreach ($request->technicalsUse as $item) {
            $data[2][] = [
                'projects_id' => $idProjects,
                'technicals_id' => $item
            ];
        }

        $data[3][] = [
            'image' => $imageName,
            'is_active' => 0,
            'type' => 1,
            'projects_id' => $idProjects
        ];
        DB::table('project_users')->insert($data[0]);
        DB::table('project_domains')->insert($data[1]);
        DB::table('technical_projects')->insert($data[2]);
        DB::table('images')->insert($data[3]);
        return redirect()->route('admin.projects.index');
    }

    public function edit($id)
    {
        $levels = level::all();
        $technicals = technicals::all();
        $domains = domains::all();
        $users = User::all();
        $project = projects::find($id);
        $images = images::where('projects_id', $id)->get();

        $imagesDes = $images->filter(function ($item) {
            return $item->type == 2;
        });
        $avatar = $images->filter(function ($item) {
            return $item->type == 1;
        })->first();

        $technicalUse = technical_projects::where('projects_id', $id)->get();
        $domainProjects = project_domains::where('projects_id', $id)->get();
        $members = project_users::with('users')->whereIn('author_id', json_decode($project->added_by))->get();
        return view('admin.pages.projects.edit', compact('levels', 'technicals', 'domains', 'users', 'project', 'imagesDes', 'avatar', 'technicalUse', 'domainProjects', 'members'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nameProject' => 'required',
            'description' => 'required',
            'linkDeloy' => 'required',
            'imageProjectAvatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'level' => 'required',
            'technicalsUse' => 'required',
            'domains' => 'required',
            'members' => 'required',
            'is_active' => 'required',
        ], [
            'nameProject.required' => 'Không được để trống tên dự án',
            'description.required' => 'Không được để trống mô tả',
            'linkDeloy.required' => 'Không được để trống link triển khai',
            'imageProjectAvatar.required' => 'Không được để trống ảnh',
            'imageProjectAvatar.image' => 'Ảnh không đúng định dạng',
            'imageProjectAvatar.max' => 'Ảnh không quá 5MB',
            'imagesDescription.required' => 'Không được để trống ảnh mô tả',
            'imagesDescription.max' => 'Ảnh không quá 5MB',
            'level.required' => 'Không được để trống cấp độ',
            'technicalsUse.required' => 'Không được để trống kỹ thuật sử dụng',
            'domains.required' => 'Không được để trống lĩnh vực',
            'members.required' => 'Không được để trống thành viên',
            'is_active.required' => 'Không được để trống trạng thái hiển thị'
        ]);

        $project = projects::find($request->id);
        $project->name = $request->nameProject;
        $project->description = $request->description;
        $project->deploy_link = $request->linkDeloy;
        $project->level_id = $request->level;
        $project->added_by = json_encode($request->members);
        $project->is_highlight = empty($request->is_highlight) ? 0 : 1;
        $project->is_active = $request->is_active;
        $project->updated_at = Carbon::now();
        $project->save();
        $images = images::where('projects_id', $request->id)->get();

        $avatar = $images->filter(function ($item) {
            return $item->type == 1;
        })->first();

        $imagesDes = $images->filter(function ($item) {
            return $item->type == 2;
        });


        if ($request->hasFile('imageProjectAvatar')) {
            Storage::delete('public/images/projects/avatar/' . $avatar->image);
            $name = time() . '.' . $request->imageProjectAvatar->clientExtension();
            $request->imageProjectAvatar->storeAs('public/images/projects/avatar/', $name);
            $avatar->image = $name;
            $avatar->save();
        }

        if (!empty($request->imagesDescription)) {
            foreach ($imagesDes as $item) {
                Storage::delete('public/description/' . $item);
                $item->delete();
            }
            $data = [];
            foreach ($request->imagesDescription as $itemDes) {
                $imagesFile = json_decode($itemDes);
                $extension = pathinfo($imagesFile->name, PATHINFO_EXTENSION);   // .jpg .png .pdf

                $itemDesName = Str::random(10) . '.' . $extension;
                $data[] = [
                    'image' => $itemDesName,
                    'is_active' => 0,
                    'type' => 2,
                    'projects_id' => $request->id
                ];
                Storage::disk('public')->put('description/' . $itemDesName, base64_decode($imagesFile->data));
            }
            DB::table('images')->insert($data);

        }

        if($project->added_by != json_encode($request->members)){
            $project_users = project_users::where('projects_id', $request->id)->get();

            $project_users->map(function ($item) {
                $item->delete();
            });
            $data = [];
            foreach ($request->members as $item) {
                $data[] = [
                    'projects_id' => $request->id,
                    'author_id' => $item
                ];
            }

            DB::table('project_users')->insert($data);

        }

        $project_domains = project_domains::where('projects_id', $request->id)->get();
        $domaisProjects = $project_domains->map(function ($item){
            return $item['domains_id'];
        })->toArray();

        $domaisProjects = $this->array_equal($request->domains,$domaisProjects);
        if(!$domaisProjects){
            foreach ($project_domains as $item) {
                $item->delete();
            }
            $data = [];
            foreach ($request->domains as $item) {
                $data[] = [
                    'projects_id' => $request->id,
                    'domains_id' => $item
                ];
            }
            DB::table('project_domains')->insert($data);
        }
        $technical_projects = technical_projects::where('projects_id', $request->id)->get();
        $differencesTechnical = $technical_projects->map(function ($item){
            return $item['technicals_id'];
        })->toArray();
        $differencesTechnical = $this->array_equal($request->technicalsUse,$differencesTechnical);
        if(!$differencesTechnical){
            foreach ($technical_projects as $item) {
                $item->delete();
            }
            $data = [];
            foreach ($request->technicalsUse as $item) {
                $data[] = [
                    'projects_id' => $request->id,
                    'technicals_id' => $item
                ];
            }
            DB::table('technical_projects')->insert($data);
        }


        $members = project_users::whereIn('author_id', json_decode($project->added_by))->get();
        $memberDifferences = $members->map(function ($item){
            return $item['author_id'];
        })->toArray();

        $memberDifferences = $this->array_equal($request->members,$memberDifferences);
        if(!$memberDifferences){
            foreach ($members as $item) {
                $item->delete();
            }
            $data = [];
            foreach ($request->members as $item) {
                $data[] = [
                    'projects_id' => $request->id,
                    'author_id' => $item
                ];
            }
            DB::table('project_users')->insert($data);
        }

        return redirect()->route('admin.projects.index');
    }

    public function delete($ids)
    {
        $idsArr = explode(',', $ids);
        projects::destroy($idsArr);
        project_domains::whereIn('projects_id', $idsArr)->delete();
        technical_projects::whereIn('projects_id', $idsArr)->delete();
        project_users::whereIn('projects_id', $idsArr)->delete();
        return redirect()->route('admin.projects.index');
    }

    function array_equal($a, $b) {
        return (
            is_array($a)
            && is_array($b)
            && count($a) == count($b)
            && array_diff($a, $b) === array_diff($b, $a)
        );
    }
}
