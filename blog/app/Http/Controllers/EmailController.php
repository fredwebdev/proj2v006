<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use nput;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
class EmailController extends Controller
{
    public function contact()
    {
        return view('Contact.contact');
    }
    public function getContactUsForm(){

        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = array (
            //'first_name' => 'required', uncomment if you want to grab this field
            //'email' => 'required|email',  uncomment if you want to grab this field
            //'message' => 'required|min:5'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){

            Mail::send('Contact.contact', $data, function($message) use ($data)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields
                $message->from('fredwebdevfleron@gmail.com', 'feedback contact form');
                //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('fredwebdevfleron@gmail.com', 'John')->subject('feedback form submit');

            });
            // Redirect to page
            return redirect(route('accueil.index'))->with('message', 'Your message has been sent. Thank You!');


            //return View::make('contact');
        }else{
            //return contact form with errors
            return redirect(route('accueil.index'))->with('error', 'Feedback must contain more than 5 characters. Try Again.');

        }
    }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
