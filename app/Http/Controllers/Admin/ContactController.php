<?php

namespace App\Http\Controllers\Admin;

use App\Rules\Recaptcha;
use App\Mail\ReplyMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.contact.index', [
            'contacts' => $this->contactRepository->allContact(),
        ]);
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
    public function store(ContactRequest $request)
    {
        $data = array_merge($request->only(['country_id', 'name', 'email', 'phone', 'subject', 'message', 'status']), [
            'code' => generate_unique_code(),
            'ip_address' => $request->ip(),
        ]);

        $this->contactRepository->storeContact($data);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
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
    public function update(ContactRequest $request, $id)
    {
        $replyMessage = $request->input('reply_message');

        $contact =  $this->contactRepository->findContact($id);

        $data = [
            'reply_message' => $replyMessage,
            'status'        => 'replied',
        ];

        $this->contactRepository->updateContact($data, $id);

        Mail::to($contact->email)->send(new ReplyMessage($contact, $replyMessage));

        toastr()->success('Reply has been sent successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contactRepository->destroyContact($id);
    }
}
