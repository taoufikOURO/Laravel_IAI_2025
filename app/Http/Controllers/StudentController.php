<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view("students.create");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => "required|min:3|max:20",
            "last_name" => "required|min:3|max:20",
            "phone_number" => "required|min:8|max:10",
            "birth_date" => "required|date|before:today",
        ], [
            "first_name.required" => "Le prénom est obligatoire",
            "first_name.min" => "Le prénom doit contenir au moins 3 caractères",
            "first_name.max" => "Le prénom doit contenir au plus 20 caractères",
            
            "last_name.required" => "Le nom est obligatoire",
            "last_name.min" => "Le nom doit contenir au moins 3 caractères",
            "last_name.max" => "Le nom doit contenir au plus 20 caractères",

            "phone_number.required" => "Le numéro de téléphone est obligatoire",
            "phone_number.min" => "Le numéro de téléphone doit contenir au moins 8 caractères",
            "phone_number.max" => "Le numéro de téléphone doit contenir au plus 10 caractères",

            "birth_date.required" => "La date de naissance est obligatoire",
            "birth_date.date" => "La date de naissance doit être une date valide",
            "birth_date.before" => "La date de naissance doit être inférieure à la date actuelle",
        ]);
        dd($request->all());
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
