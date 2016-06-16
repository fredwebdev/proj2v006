<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Input;
use Validator;
class EmailController extends Controller
{


    public function storemail()
    {
        return view('Contact.contactsuite');
    }


// This function will show the view
    public function contact()
    {
        return view('Contact.contact');
    }

    public function handleFormPost()
    {
        
        
        
        $input = Input::only('name', 'email', 'msg');
        //$validator = Validator::make(\Input::all(), $rules);
        $validator = Validator::make($input,
            array(
                'name' => 'required',
                'email' => 'required|email',
                'msg' => 'required',
            )
        );

        if ($validator->fails())
        {
            return Redirect::to('Contact.contact')->with('errors', $validator->messages());
        } else { // the validation has not failed, it has passed


            // Send the email with the contactemail view, the user input
            Mail::send('Contact.contactemail', $input, function($message)
            {
                $message->from('your@email.address', 'Your Name');

                $message->to('fredwebdevfleron@email.com');
            });

            // Specify a route to go to after the message is sent to provide the user feedback
            return Redirect::to('thanks');
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
