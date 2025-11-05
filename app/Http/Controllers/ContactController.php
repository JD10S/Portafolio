<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validación
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            
            if ($request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
                return response()->json([
                    'errors' => $validator->errors()
                ], 422);
            }

            
            return back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        
        Mail::to('dodevp10@gmail.com')->send(new ContactMessage($data));

       
        if ($request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
            return response()->json([
                'message' => '¡Mensaje enviado! Te responderé pronto.'
            ], 200);
        }

        
        return back()->with('success', '¡Mensaje enviado! Te responderé pronto.');
    }
}