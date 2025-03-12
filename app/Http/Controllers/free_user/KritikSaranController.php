<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSetting;
use App\Mail\KritikSaranMail;
use Illuminate\Support\Facades\Mail;

class KritikSaranController extends Controller
{
    public function kritik_saran()
    {

        $dataUsaha = ModelSetting::first();
        return view('free_user.kritik_saran.kritik_saran', compact('dataUsaha'));
    }



    public function kirim(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:4',
            'email'   => 'required|email',
            'subject' => 'required|min:4',
            'message' => 'required|min:10',
        ]);

        Mail::send('emails.kritik_saran', [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'userMessage' => $request->message, // Ubah nama variabel di sini
        ], function ($mail) use ($request) {
            $emailAdmin = ModelSetting::first();
            $mail->to($emailAdmin->email)
                ->subject('Kritik dan Saran: ' . $request->subject);
        });
        return redirect()->back()->with('success', 'Terima kasih atas kritik dan saran Anda!');
    }
}
