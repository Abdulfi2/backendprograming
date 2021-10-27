<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ['Ayam', 'Ikan', 'Burung'];

    public function index()
    {
        echo "List animals : <br>";
        foreach ($this->animals as $animal) {
            echo "- $animal <br>";
        }
    }

    public function store(Request $request)
    {
        array_push($this->animals, $request->nama);
        echo "Add new animal : $request->nama";
        echo "<br>";
        $this->index();
    }

    public function update(Request $request, $id)
    {
        $this->animals[$id] = $request->nama;
        echo "Update animal at id : $id to $request->nama";
        echo "<br>";
        $this->index();
    }

    public function destroy($id)
    {
        unset($this->animals[$id]);
        echo "Delete animal at id : $id <br>";
        $this->index();
    }
}