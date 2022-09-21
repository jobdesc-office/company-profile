<?php

namespace App\Http\Controllers;
use \App\Models\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Email;

class ComproController extends Controller
{
    public function compro()
    {
        $test = \App\Models\Team::join('msfile','msfile.refid', '=', 'teamid')
                ->where('msteam.isactive', 'true')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '9')
                ->get(['msteam.*', 'msfile.filename']);

        $service = \App\Models\Service::join('msfile','msfile.refid', '=', 'serviceid')
                ->where('msservice.isactive', 'true')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '21')
                ->get(['msservice.*', 'msfile.filename']);

        $portofolio = \App\Models\Portofolio::join('msfile','msfile.refid', '=', 'portofolioid')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '10')
                ->where('msportofolio.isactive', 'true')
                ->get(['msportofolio.*', 'msfile.filename']);


        $partner = \App\Models\Partner::join('msfile','msfile.refid', '=', 'partnerid')
                ->where('mspartner.isactive', 'true')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '15')
                ->get(['mspartner.*', 'msfile.filename']);

        $testimoni = \App\Models\Testimoni::join('msfile','msfile.refid', '=', 'testimoniid')
                ->where('mstestimonial.isactive', 'true')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '17')
                ->get(['mstestimonial.*', 'msfile.filename']);

        $about = \App\Models\Info::join('msfile','msfile.refid', '=', 'infoid')
                ->where('msinfo.isactive', 'true')
                ->where('msinfo.infotypeid','6')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '11')
                ->get(['msinfo.*', 'msfile.filename']);

        $title = \App\Models\Info::join('msfile','msfile.refid', '=', 'infoid')
                ->where('msinfo.infotypeid','31')
                ->where('msinfo.isactive', 'true')
                ->where('msfile.isactive', 'true')
                ->where('msfile.reftypeid', '11')
                ->get(['msinfo.*', 'msfile.filename']);

        $address = \App\Models\Info::where(['infotypeid' => '12', 'isactive' => 'true'])->get();

        $contact = \App\Models\Info::where(['infotypeid' => '13','isactive' => 'true'])->get();

        $email = \App\Models\Info::where(['infotypeid' => '14', 'isactive' => 'true'])->get();
    
        $data = [
            'portofolio' => $portofolio,
            'about' => $about,
            'address' => $address,
            'contact' => $contact,
            'email' => $email,
            'partner' => $partner,
            'testimoni' => $testimoni,
            'service' => $service,
            'title' => $title,
            'test' => $test

        ];
        return view('compro_page.compro')->with($data);
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'email_body' => 'required',
        ]);

        $input = $request->all();

        Email::create($input);

        \Mail::send('compro_page.email.email-template', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'email_body' => $input['email_body'],
        ), function($message) use ($request){
            $message->to($request->email)
                    ->subject('Feedback');
            $message->from('muzeygamer.2004@gmail.com', 'testing');
           
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

}
