<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index() { return view('pages.contact'); }

    public function store(Request $request)
    {
        $v = $request->validate([
            'name'=>'required|string|max:100','email'=>'required|email',
            'phone'=>'nullable|string|max:20','company'=>'nullable|string|max:100',
            'service'=>'nullable|string|max:100','budget'=>'nullable|string|max:50',
            'message'=>'required|string|max:2000',
        ]);
        try {
            \DB::table('contacts')->insert(array_merge($v,['ip_address'=>$request->ip(),'created_at'=>now(),'updated_at'=>now()]));
        } catch(\Exception $e){ Log::error('Contact: '.$e->getMessage()); }

        if($request->expectsJson()) return response()->json(['success'=>true,'message'=>'Thank you! We will respond within 4 business hours.']);
        return back()->with('success','Thank you! We will respond within 4 hours.');
    }

    public function newsletter(Request $request)
    {
        $request->validate(['email'=>'required|email|max:150']);
        try {
            \DB::table('newsletter_subscribers')->insertOrIgnore(['email'=>$request->email,'created_at'=>now(),'updated_at'=>now()]);
        } catch(\Exception $e){ Log::error('Newsletter: '.$e->getMessage()); }
        return response()->json(['success'=>true,'message'=>'Subscribed! Welcome to EliteSalesLab.']);
    }
}
