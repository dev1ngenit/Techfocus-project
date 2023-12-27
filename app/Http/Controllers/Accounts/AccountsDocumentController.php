<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Company;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Accounts\AccountsDocument;
use App\Http\Requests\AccountsDocumentRequest;
use App\Models\Accounts\AccountsDocumentAttachment;

class AccountsDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.accountDocument.index', [
            'accountsDocuments' => AccountsDocument::with('attachments')->latest('id')->get(),
            'companies' => Company::latest('name')->get(['id', 'name']),
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
    public function store(Request $request)
    {
        $accountsDocument =  AccountsDocument::create([
            'country_id'  => $request->country_id,
            'company_id'  => $request->company_id,
            'fiscal_year' => $request->fiscal_year,
            'name'        => $request->name,
        ]);

        $additionalFiles = $request->file('attachment');
        $additionalFilePath = storage_path('app/public/file/account-attachment/');
        if (!empty($additionalFiles)) {
            foreach ($additionalFiles as $additionalFile) {
                $uploadFile = customUpload($additionalFile, $additionalFilePath);
                if ($uploadFile['status'] == 1) {
                    $attachmentData = [
                        'accounts_document_id' => $accountsDocument->id,
                        'attachment' => $uploadFile['file_name'],
                    ];
                    AccountsDocumentAttachment::create($attachmentData);
                }
            }
        }
        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
        DB::beginTransaction();

        try {
            $accountsDocument = AccountsDocument::findOrFail($id);

            $accountsDocument->update([
                'country_id'  => $request->country_id,
                'company_id'  => $request->company_id,
                'fiscal_year' => $request->fiscal_year,
                'name'        => $request->name,
            ]);

            $additionalFiles = $request->file('attachment');
            $additionalFilePath = storage_path('app/public/file/account-attachment/');

            $oldAttachments = $accountsDocument->attachments;
            foreach ($oldAttachments as $oldAttachment) {
                $oldAttachmentPath = $additionalFilePath . $oldAttachment->attachment;
                if (File::exists($oldAttachmentPath)) {
                    File::delete($oldAttachmentPath);
                }
                $oldAttachment->delete();
            }

            if (!empty($additionalFiles)) {
                foreach ($additionalFiles as $additionalFile) {
                    $uploadFile = customUpload($additionalFile, $additionalFilePath);
                    if ($uploadFile['status'] == 1) {
                        $attachmentData = [
                            'accounts_document_id' => $accountsDocument->id,
                            'attachment' => $uploadFile['file_name'],
                        ];
                        AccountsDocumentAttachment::create($attachmentData);
                    }
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Data has been updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the data.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accountsDocument = AccountsDocument::with('attachments')->find($id);

        foreach ($accountsDocument->attachments as $attachment) {
            $attachmentPath = storage_path('app/public/file/account-attachment/' . $attachment->attachment);

            if (File::exists($attachmentPath)) {
                File::delete($attachmentPath);
            }

            $attachment->delete();
        }

        $accountsDocument->delete();
    }
}
