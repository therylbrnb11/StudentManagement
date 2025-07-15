<?php
namespace Bernabe\App\Model;
use Bernabe\StudentManagement\core\Crud;

class StudentModel implements Crud {

    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct()
    {
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }

    public function displayInfo(){
        echo "Id": .$this->id."\n";
        echo "Name": .$this->fullname."\n";
        echo "Yearlevel": .$this->yearlevel."\n";
        echo "Course": .$this->course."\n";
        echo "Section": .$this->section."\n";
    }


    public function create(){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
     
     
}