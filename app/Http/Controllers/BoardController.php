<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardController extends Model
{
    public function index()
    {
        return view('board.blade.php');
    }
}
