<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{

    public function index()
    {
        $resorts = Resort::latest()->filter(request(['search']))->paginate(12);

        return view('backend.resort.index',compact('resorts'));
    }


    public function create()
    {
        return view('backend.resort.create');
    }


    public function store(Request $request, Resort $resort)
    {

        $form = $request->validate([
            'name' => 'required|unique:resorts',
            'description' =>'nullable',
            'price' => 'required',
            'location' => 'required'
        ]);

        $form['is_available'] = $request->is_active ?? false;


        if ($request->hasFile('image')) {
            $form['image'] = $request->file('image')->store('images', 'public');
        }

        $resort->create($form);

        return redirect()->route('resort.index')->with('message', ' Created Successfully');

    }


    public function show(Resort $resort)
    {
        return view('backend.resort.show',compact('resort'));
    }


    public function edit(Resort $resort)
    {
        return view('backend.resort.edit', compact('resort'));
    }


    public function update(Request $request, Resort $resort)
    {


        $form = $request->validate([
            'name' => 'required|unique:resorts',
            'description' =>'nullable',
            'price' => 'required',
            'location' => 'required'
        ]);

        $form['is_available'] = $request->is_active ?? false;


        if ($request->hasFile('image')) {
            $form['image'] = $request->file('image')->store('images', 'public');
        }

        $resort->update($form);

        return redirect()->route('resort.index')->with('message', ' Updated Successfully');

    }


    public function destroy(Resort $resort)
    {
        $resort->delete();
        return redirect()->route('resort.index')->withMessage('Deleted');
    }
}
