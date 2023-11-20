<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliationController extends Controller
{
    public function index() {
        return "get";
    }

    public function store() {
        return "post";
    }

    public function update() {
        return "put";
    }

    public function destroy() {
        return "delete";
    }
}
