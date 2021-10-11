<?php

namespace app\models\project;

use app\models\Project;
use app\models\project\ProjectInterface;

class ProjectManager implements ProjectInterface{

    public function create(){
        // $model = new Project();

        // if ($model->load())
        echo "This is create project manager";
        return 1;
    }

}


?>