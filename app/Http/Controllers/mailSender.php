<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use App\Models\enovateCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailSender extends Controller
{


    public function store(Request $request)
    {

        $SnK_Contact_Information = [
            'c_name' => $request->c_name,
            'email' => $request->email,
            'c_number' => $request->c_number,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        enovateCustomer::create($SnK_Contact_Information);

        Mail::to('seneshpawan84@gmail.com')->send(new HelloMail($SnK_Contact_Information));
        Mail::to('senesh.development@gmail.com')->send(new HelloMail($SnK_Contact_Information));
        Mail::to('kaushalpremarathne.23@gmail.com')->send(new HelloMail($SnK_Contact_Information));
        Mail::to('dilshanjayarathna378@gmail.com')->send(new HelloMail($SnK_Contact_Information));

        return response()->json([
            'status' => 200,
        ]);

    }

}
