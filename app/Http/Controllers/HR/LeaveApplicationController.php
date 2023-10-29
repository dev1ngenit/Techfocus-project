<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\LeaveApplicationRequest;
use App\Repositories\Interfaces\LeaveApplicationRepositoryInterface;

class LeaveApplicationController extends Controller
{
    private $leaveApplicationRepository;

    public function __construct(LeaveApplicationRepositoryInterface $leaveApplicationRepository)
    {
        $this->leaveApplicationRepository = $leaveApplicationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.leaveApplication.index', [
            'leaveApplications' =>  $this->leaveApplicationRepository->allLeaveApplication(),
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
    public function store(LeaveApplicationRequest $request)
    {
        $substituteSignatureFile = $request->file('substitute_signature');
        $checkedByFile           = $request->file('checked_by');
        $recommendedByFile       = $request->file('recommended_by');
        $reviewedByFile          = $request->file('reviewed_by');
        $approvedByFile          = $request->file('approved_by');

        $filePath = storage_path('app/public/');

        $globalFunSubstituteSignature = empty($substituteSignatureFile) ? ['status' => 0] : customUpload($substituteSignatureFile, $filePath, 44, 44);
        $globalFunCheckedBy = empty($checkedByFile) ? ['status' => 0] : customUpload($checkedByFile, $filePath, 44, 44);
        $globalFunRecommendedBy = empty($recommendedByFile) ? ['status' => 0] : customUpload($recommendedByFile, $filePath, 44, 44);
        $globalFunReviewedBy = empty($reviewedByFile) ? ['status' => 0] : customUpload($reviewedByFile, $filePath, 44, 44);
        $globalFunApprovedBy = empty($approvedByFile) ? ['status' => 0] : customUpload($approvedByFile, $filePath, 44, 44);

        $data = [
            'country_id'              => $request->country_id,
            'employee_id'             => $request->employee_id,
            'company_id'              => $request->company_id,
            'name'                    => $request->name,
            'type_of_leave'           => $request->type_of_leave,
            'designation'             => $request->designation,
            'company'                 => $request->company,
            'leave_start_date'        => $request->leave_start_date,
            'leave_end_date'          => $request->leave_end_date,
            'total_days'              => $request->total_days,
            'job_status'              => $request->job_status,
            'reporting_on'            => $request->reporting_on,
            'leave_explanation'       => $request->leave_explanation,
            'substitute_during_leave' => $request->substitute_during_leave,
            'leave_address'           => $request->leave_address,
            'is_between_holidays'     => $request->is_between_holidays,
            'leave_contact_no'        => $request->leave_contact_no,
            'included_open_saturday'  => $request->included_open_saturday,
            'substitute_signature'    => $globalFunSubstituteSignature['status'] == 1 ? $globalFunSubstituteSignature['file_name'] : null,
            'applicant_signature'     => $request->applicant_signature, //file.It will automatically come from employee form.No need to add another image to database,just add the image name.
            'leave_position'          => $request->leave_position,
            'casual_leave_due_as_on'  => $request->casual_leave_due_as_on,
            'casual_leave_availed'    => $request->casual_leave_availed,
            'casual_balance_due'      => $request->casual_balance_due,
            'earned_leave_due_as_on'  => $request->earned_leave_due_as_on,
            'earned_leave_availed'    => $request->earned_leave_availed,
            'earned_balance_due'      => $request->earned_balance_due,
            'medical_leave_due_as_on' => $request->medical_leave_due_as_on,
            'medical_leave_availed'   => $request->medical_leave_availed,
            'medical_balance_due'     => $request->medical_balance_due,
            'checked_by'              => $globalFunCheckedBy['status']           == 1 ? $globalFunCheckedBy['file_name']          : null,
            'recommended_by'          => $globalFunRecommendedBy['status']       == 1 ? $globalFunRecommendedBy['file_name']      : null,
            'reviewed_by'             => $globalFunReviewedBy['status']          == 1 ? $globalFunReviewedBy['file_name']         : null,
            'approved_by'             => $globalFunApprovedBy['status']          == 1 ? $globalFunApprovedBy['file_name']         : null,
            'application_status'      => $request->application_status,
            'note'                    => $request->note,
        ];
        $this->leaveApplicationRepository->storeLeaveApplication($data);

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
    public function update(LeaveApplicationRequest $request, $id)
    {
        $leaveApplication =  $this->leaveApplicationRepository->findLeaveApplication($id);

        $substituteSignatureFile = $request->file('substitute_signature');
        $checkedByFile           = $request->file('checked_by');
        $recommendedByFile       = $request->file('recommended_by');
        $reviewedByFile          = $request->file('reviewed_by');
        $approvedByFile          = $request->file('approved_by');

        $filePath = storage_path('app/public/');

        if (!empty($substituteSignatureFile)) {
            $globalFunSubstituteSignature = customUpload($substituteSignatureFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$leaveApplication->substitute_signature}"),
                storage_path("app/public/requestImg/{$leaveApplication->substitute_signature}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSubstituteSignature = ['status' => 0];
        }

        if (!empty($checkedByFile)) {
            $globalFunCheckedBy = customUpload($checkedByFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$leaveApplication->checked_by}"),
                storage_path("app/public/requestImg/{$leaveApplication->checked_by}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunCheckedBy = ['status' => 0];
        }

        if (!empty($recommendedByFile)) {
            $globalFunRecommendedBy = customUpload($recommendedByFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$leaveApplication->recommended_by}"),
                storage_path("app/public/requestImg/{$leaveApplication->recommended_by}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRecommendedBy = ['status' => 0];
        }

        if (!empty($reviewedByFile)) {
            $globalFunReviewedBy = customUpload($reviewedByFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$leaveApplication->reviewed_by}"),
                storage_path("app/public/requestImg/{$leaveApplication->reviewed_by}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunReviewedBy = ['status' => 0];
        }

        if (!empty($approvedByFile)) {
            $globalFunApprovedBy = customUpload($approvedByFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$leaveApplication->approved_by}"),
                storage_path("app/public/requestImg/{$leaveApplication->approved_by}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunApprovedBy = ['status' => 0];
        }

        $data = [
            'country_id'              => $request->country_id,
            'employee_id'             => $request->employee_id,
            'company_id'              => $request->company_id,
            'name'                    => $request->name,
            'type_of_leave'           => $request->type_of_leave,
            'designation'             => $request->designation,
            'company'                 => $request->company,
            'leave_start_date'        => $request->leave_start_date,
            'leave_end_date'          => $request->leave_end_date,
            'total_days'              => $request->total_days,
            'job_status'              => $request->job_status,
            'reporting_on'            => $request->reporting_on,
            'leave_explanation'       => $request->leave_explanation,
            'substitute_during_leave' => $request->substitute_during_leave,
            'leave_address'           => $request->leave_address,
            'is_between_holidays'     => $request->is_between_holidays,
            'leave_contact_no'        => $request->leave_contact_no,
            'included_open_saturday'  => $request->included_open_saturday,
            'substitute_signature' => $globalFunSubstituteSignature['status'] == 1 ? $globalFunSubstituteSignature['file_name'] : $leaveApplication->substitute_signature,
            'applicant_signature'     => $request->applicant_signature, //file.It will automatically come from employee form.No need to add another image to database,just add the image name.
            'leave_position'          => $request->leave_position,
            'casual_leave_due_as_on'  => $request->casual_leave_due_as_on,
            'casual_leave_availed'    => $request->casual_leave_availed,
            'casual_balance_due'      => $request->casual_balance_due,
            'earned_leave_due_as_on'  => $request->earned_leave_due_as_on,
            'earned_leave_availed'    => $request->earned_leave_availed,
            'earned_balance_due'      => $request->earned_balance_due,
            'medical_leave_due_as_on' => $request->medical_leave_due_as_on,
            'medical_leave_availed'   => $request->medical_leave_availed,
            'medical_balance_due'     => $request->medical_balance_due,
            'checked_by' => $globalFunCheckedBy['status']           == 1 ? $globalFunCheckedBy['file_name']          : $leaveApplication->checked_by,
            'recommended_by' => $globalFunRecommendedBy['status']       == 1 ? $globalFunRecommendedBy['file_name']      : $leaveApplication->recommended_by,
            'reviewed_by' => $globalFunReviewedBy['status']          == 1 ? $globalFunReviewedBy['file_name']         : $leaveApplication->reviewed_by,
            'approved_by' => $globalFunApprovedBy['status']          == 1 ? $globalFunApprovedBy['file_name']         : $leaveApplication->approved_by,
            'application_status'      => $request->application_status,
            'note'                    => $request->note,
        ];

        $this->leaveApplicationRepository->updateLeaveApplication($data, $id);

        toastr()->success('Data has been updated successfully!');
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
        $brand = $this->leaveApplicationRepository->findLeaveApplication($id);

        $attributes = [
            'substitute_signature',
            'checked_by',
            'recommended_by',
            'reviewed_by',
            'approved_by'
        ];

        $basePaths = [
            storage_path('app/public/'),
            storage_path('app/public/requestImg/')
        ];

        $paths = [];

        foreach ($attributes as $attribute) {
            foreach ($basePaths as $basePath) {
                $paths[] = $basePath . $brand->{$attribute};
            }
        }

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $this->leaveApplicationRepository->destroyLeaveApplication($id);
    }
}
