<?php
namespace App\Http\Controllers\acp;

use App\Models\School;

class SchoolController extends BaseController{
    use BasePattern;
    public function __construct()
    {
        $this->page = "school";
        $this->title = "Schools";
        $this->model = new School;
        $this->listQuery = $this->model->query();

        return parent::__construct();
    }

}
