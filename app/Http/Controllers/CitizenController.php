<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    // public function register()
    // {
    //     $citizen = Citizen::all();
    //     return view('form', ['citizen' => $citizen, 'layout' => 'register']);
    // }

    public function index()
    {
        $forms = Citizen::all();
        return view('form', ['forms' => $forms, 'layout' => 'index']);
    }

    public function show($id)
    {
        $persons = Citizen::all();
        $person = Citizen::find($id);
        return view('citizens', ['person' => $person, 'persons' => $persons, 'layout' => 'show']);
    }

    public function display()
    {
        $person = Citizen::all();
        return view('citizens', ['citizens' => $person, 'layout' => 'display']);
    }

    public function edit($id)
    {
        $citizens = citizen::all();
        $citizen = Citizen::find($id);
        return view('citizens', ['citizens' => $citizens, 'citizen' => $citizen, 'layout' => 'edit']);
    }

    public function store(Request $request)
    {

        // $citizen = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'phone' => 'required',
        //     'gender' => 'required',
        //     'language' => 'required',
        //     'zip' => 'required',
        //     'about' => 'required'
        // ]);
        // $user = Citizen::create($citizen);
        // auth()->login($user);
        // $citizen['password'] = bcrypt($citizen['language']);

        $form = new Citizen();
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->password = $request->input('password');
        $form->phone = $request->input('phone');
        $form->gender = $request->input('gender');
        $form->language = $request->input('language');
        $form->zip = $request->input('zip');
        $form->about = $request->input('about');
        $form->save();

        // return view('citizens');
        return redirect('/display'); //->with('message', 'You have been registered');
    }
    public function update(Request $request, $id)
    {
        $form = Citizen::find($id);
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->password = $request->input('password');
        $form->phone = $request->input('phone');
        $form->gender = $request->input('gender');
        $form->language = $request->input('language');
        $form->zip = $request->input('zip');
        $form->about = $request->input('about');
        $form->update();
        return redirect('/display');
    }
}
