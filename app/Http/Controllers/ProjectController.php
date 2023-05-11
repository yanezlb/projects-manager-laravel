<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function getAllProjects() {
        //$projects = Project::all();
        $projects = DB::table('projects')->get();
        return $projects;
    }

    public function getLastProjects() {
        $projects = Project::orderBy('project_id', 'desc')
            ->take(5)
            ->get();
        return $projects;
    }

    public function getIdProject() {
        try {
            $projects = Project::findOrFail(1);
            return $projects;
        } catch (\Exception $e){
            echo $e->getMessage();
        }

    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto jajaja';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $result = $project->save();
        echo $result;

    }

    public function updateProject() {
        /* $project = Project::find(1);
        $project->city_id = 9;
        $project->is_active = 1;
        $result = $project->save();
        echo $result; */

        Project::where('is_active', 1)
        ->where('user_id', 1)
        ->update(['name' => 'Luis Project']);


    }

    public function deleteProject() {

        $project = Project::find(21);
        $project->delete();

    }
}
