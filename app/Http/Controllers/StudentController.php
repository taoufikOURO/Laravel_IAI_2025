<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view("students.create");
    }
    public function store(CreateStudentRequest $request)
    {
        $data = $request->all();
        $student = Student::create($data);
        dd($student);
    }

    public function index()
    {
        $personnes = (object) [
            ["nom" => "OURO-BANG'NA", "prenom" => "Taoufik", "age" => "19", "sexe" => "M"],
            ["nom" => "KOMLAN", "prenom" => "Cedric", "age" => "22", "sexe" => "M"],
            ["nom" => "AGBOKOU", "prenom" => "Sonia", "age" => "20", "sexe" => "F"],
            ["nom" => "DJOSSOU", "prenom" => "Marc", "age" => "25", "sexe" => "M"],
            ["nom" => "AMANA", "prenom" => "Fatou", "age" => "18", "sexe" => "F"],
            ["nom" => "TCHAGNAO", "prenom" => "Nicolas", "age" => "21", "sexe" => "M"],
            ["nom" => "KOFFI", "prenom" => "Grace", "age" => "23", "sexe" => "F"],
            ["nom" => "ADJAMAGBO", "prenom" => "Kossi", "age" => "24", "sexe" => "M"],
            ["nom" => "NADJO", "prenom" => "Aicha", "age" => "19", "sexe" => "F"],
            ["nom" => "BOKO", "prenom" => "Francis", "age" => "26", "sexe" => "M"],
            ["nom" => "LOKOSSOU", "prenom" => "Patricia", "age" => "22", "sexe" => "F"]
        ];


        return view("students.index")->with("personnes", $personnes);
    }

    public function show(Request $request)
    {
        dd($request->schemeAndHttpHost());
    }
}
