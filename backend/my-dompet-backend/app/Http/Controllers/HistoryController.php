<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        $histories = History::all();
        return view('admin.history', [
            'title' => 'History',
            'active' => 'history',
        ], compact('histories'));
    }
}
