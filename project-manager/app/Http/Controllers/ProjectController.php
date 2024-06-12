<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Return all the data from a consult to the table Projects from the DB.
     * 
     * @return array return an array with all the data from the table Projects.
     */
    public function getAllProjects(){
        //$projects = Project::all();

        $projects_chunk = Project::chunk(200, function ($projects) {
            foreach ($projects as $project) {
                echo $project;
            }
        });

        return $projects_chunk;
    }
}
