<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $subscribers = NewsLetter::all();
        return view('newsletter.index', compact('subscribers'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
            'country_id' => 'required|exists:countries,id',
        ]);

        $subscriptionData = $request->only('email', 'country_id');
        $subscriptionData['ip_address'] = $request->ip();
        // Note: Collecting MAC address is not a common practice and may not work in all environments
        $subscriptionData['mac_address'] = exec('getmac');

        if (Newsletter::isSubscribed($request->email)) {
            return redirect()->back()->with('error', 'You are already subscribed.');
        }

        Newsletter::subscribe($request->email);
        NewsLetter::create($subscriptionData);

        return redirect()->back()->with('success', 'Subscription successful.');
    }

    public function verify(Request $request, $token)
    {
        $subscriber = NewsLetter::where('verification_token', $token)->first();

        if (!$subscriber) {
            return redirect()->route('newsletter.verify-failed')->with('error', 'Invalid verification token.');
        }

        $subscriber->update([
            'verified_at' => now(),
            'verification_token' => null,  // clear the verification token upon successful verification
        ]);

        return redirect()->route('newsletter.verified')->with('success', 'Email verified successfully.');
    }

    public function unsubscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        if (!Newsletter::isSubscribed($request->email)) {
            return redirect()->back()->with('error', 'Email is not subscribed.');
        }

        Newsletter::unsubscribe($request->email);
        return redirect()->back()->with('success', 'Unsubscribed successfully.');
    }
}
