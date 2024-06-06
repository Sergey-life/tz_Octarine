<?php

namespace App\Http\Controllers;

use App\Models\RandomNumber;
use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    public function generate() {
        $randomNumber = rand(1, 100); // Генеруємо випадкове число від 1 до 100
        $randomNumberModel = RandomNumber::create(['number' => $randomNumber]);

        return response()->json([
            'id' => $randomNumberModel->id,
            'number' => $randomNumberModel->number
        ], 201);
    }

    public function retrieve($id) {
        $randomNumber = RandomNumber::find($id);

        if (!$randomNumber) {
            return response()->json(['message' => 'Number not found'], 404);
        }

        return response()->json($randomNumber);
    }
}
