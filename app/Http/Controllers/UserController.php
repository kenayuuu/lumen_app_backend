<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'Ken'],
                ['id' => 2, 'name' => 'Ayu'],
                ['id' => 3, 'name' => 'Kenayu'],
                ['id' => 4, 'name' => 'Maharani']
            ]
        ]);
    }
}
?>
