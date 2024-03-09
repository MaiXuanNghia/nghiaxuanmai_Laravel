<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = "wellcom";
        $data1 = "<h3>Chương 1: Nhập môm laravel</h3>";
        $index = 1;
        $data2 = ["item1", "item2", "item3"]; //"item1", "item2", "item3"
        return view('clients.home', compact('data', 'data1', 'index', 'data2'));
    }

    public function index1()
    {
        $titel = "MAIN SIDEBAR";
        return view('clients.homeExtends', compact('titel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadimage(Request $request)
    {
        if (!empty($request->image)) {
            $image = trim($request->image);
            // $name = 'image' . uniqid() . ".jpg";
            $name = basename($image);

            // return response()->streamDownload(function () use ($image) {
            //     $echohopthu = file_get_contents($image);
            //     echo $echohopthu;
            // }, $name);
        }

        return response()->download($image); // nếu muốn pdf thì dùng contentype-applycation...
    }
}
