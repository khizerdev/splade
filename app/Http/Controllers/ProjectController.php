<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', [
            'projects' => SpladeTable::for(Project::class)
                ->column('id')
                ->column('name', sortable:true,searchable:true)
                ->withGlobalSearch(columns:['name'])
                ->paginate(5),
        ]);
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        $users = User::pluck('name' , 'id');

        return view('projects-create' , compact('categories','users'));
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());
        $project->users()->attach($request->users);

        Toast::title('Project saved');

        return redirect()->route('projects.index');
    }

}
