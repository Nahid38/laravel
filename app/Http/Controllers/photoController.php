<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class photoController extends Controller
{
    
    public function index()
    {
     return "Index";
    }

  
    public function create()
    {
        return "Create";
    }


    public function store(Request $request)
    {
        return "Store";
    }

 
    public function show(string $id)
    {
        return "Show";
    }
    public function edit(string $id)
    {
   
        return "Edit";
    }


    public function update(Request $request, string $id)
    {

        return "Update";
    }


    public function destroy(string $id)
    {
        return "Delete";
    }
}
