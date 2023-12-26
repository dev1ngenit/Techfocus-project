<?php

namespace App\Http\Controllers\Admin;

use Rats\Zkteco\Lib\ZKTeco;
use App\Models\Admin\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BioMetricController extends Controller
{
    public function device_ip()
    {
        if (session()->exists('dip')) {
            $deviceip = session('dip');
        } else {
            session()->put('dip', '192.168.1.201');
            $deviceip = '192.168.1.201';
        }
        return $deviceip;
    }

    public function device_setip(Request $request)
    {

        session()->put('dip', $request->deviceip);
        toastr()->success('IP has been set.');
        return redirect()->back();
    }

    public function index()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        $attendances = $zk->getAttendance(2);
        $users = $zk->getUser(); // Retrieve user data from the device
        $currentMonthAttendances = array_filter($attendances, function ($attendance) {
            return date('Y-m-d', strtotime($attendance['timestamp'])) === date('Y-m-d');
        });
        $userLookup = [];
        foreach ($users as $user) {
            $userLookup[$user['userid']] = $user['name'];
        }

        $attendanceData = [];

        foreach ($currentMonthAttendances as $attendance) {
            $userId = $attendance['id'];
            $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

            $userName = $userLookup[$userId] ?? '';

            if (!isset($attendanceData[$userId])) {
                $attendanceData[$userId] = [
                    'user_id' => $userId,
                    'user_name' => $userName,
                    'check_in' => $checkTime,
                    'check_out' => $checkTime,
                ];
            } else {
                if (strtotime($checkTime) > strtotime($attendanceData[$userId]['check_out'])) {
                    $attendanceData[$userId]['check_out'] = $checkTime;
                }
            }
        }

        $events = Event::orderBy('id', 'DESC')->get();

        return view('admin.pages.attendance.device', [
            'attendanceData' => $attendanceData,
            'users' => $users,
            'deviceip' => $deviceip,
            'events' => $events,
        ]);
    }




    public function device_user_data()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        // $zk->disableDevice();
        $zk->enableDevice();


        $users = $zk->getUser();
        // dd($users);

        return view('admin.pages.attendance.device-user-data', ['users' => $users]);
    }


    public function device_attendance_data()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        $attendances = $zk->getAttendance();
        $users = $zk->getUser(); // Retrieve user data from the device

        // Filter attendances for the current month
        $currentMonthAttendances = array_filter($attendances, function ($attendance) {
            return date('Y-m', strtotime($attendance['timestamp'])) === date('Y-m');
        });

        // Organize attendance data by date and user
        $attendanceData = [];
        foreach ($currentMonthAttendances as $attendance) {
            $date = date('Y-m-d', strtotime($attendance['timestamp']));
            $userId = $attendance['id'];
            $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

            // Find the user's name from the $users array
            $userName = '';
            foreach ($users as $user) {
                if ($user['userid'] == $userId) {
                    $userName = $user['name'];
                    break;
                }
            }

            if (!isset($attendanceData[$date][$userId])) {
                $attendanceData[$date][$userId] = [
                    'user_id' => $userId,
                    'user_name' => $userName,
                    'check_in' => $checkTime,
                    'check_out' => $checkTime,
                ];
            } else {
                // Update check-out time if a later time is encountered
                if (strtotime($checkTime) > strtotime($attendanceData[$date][$userId]['check_out'])) {
                    $attendanceData[$date][$userId]['check_out'] = $checkTime;
                }
            }
        }

        return view('admin.pages.attendance.device-attendance-data', ['attendanceData' => $attendanceData]);
    }


    public function attendanceDataSingle($id)
    {
        // Connect to the ZKtecho device
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        // Retrieve attendances and user data from the device
        $attendances_all = $zk->getAttendance();
        $users = $zk->getUser();
        $user = null;

        foreach ($users as $userData) {
            if ($userData['userid'] === $id) {
                $user = $userData;
                break; // Exit the loop once a match is found
            }
        }

        // Initialize an array to store the user's attendance data
        $attendanceData = [];

        if ($user) {
            $user_name = $user['name'];

            // Get the first day and last day of the previous month
            $firstDayLastMonth = date('Y-m-01', strtotime('last month'));
            $lastDayLastMonth = date('Y-m-t', strtotime('last month'));

            // Filter attendances for the previous month
            $lastMonthAttendances = array_filter($attendances_all, function ($attendance) use ($id, $firstDayLastMonth, $lastDayLastMonth) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate >= $firstDayLastMonth) && ($attendanceDate <= $lastDayLastMonth) && ($attendance['id'] === $id);
            });

            // Loop through the filtered attendances
            foreach ($lastMonthAttendances as $attendance) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Create a unique key for each day
                $key = $attendanceDate;

                if (!isset($attendanceData[$key])) {
                    $attendanceData[$key] = [
                        'user_id' => $id,
                        'user_name' => $user_name,
                        'date' => $attendanceDate,
                        'check_in' => $checkTime,
                        'check_out' => $checkTime,
                    ];
                } else {
                    if (strtotime($checkTime) > strtotime($attendanceData[$key]['check_out'])) {
                        $attendanceData[$key]['check_out'] = $checkTime;
                    }
                }
            }
        }

        return view('admin.pages.attendance.attendance-single', ['attendanceData' => $attendanceData, 'user_name' => $user_name]);
    }




    public function device_information()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        // $zk->disableDevice();

        $data = [
            'deviceip'           => $deviceip,
            'deviceVersion'      => $zk->version(),
            'deviceOSVersion'    => $zk->osVersion(),
            'devicePlatform'     => $zk->platform(),
            'devicefmVersion'    => $zk->fmVersion(),
            'deviceworkCode'     => $zk->workCode(),
            'devicessr'          => $zk->ssr(),
            'devicepinWidth'     => $zk->pinWidth(),
            'deviceserialNumber' => $zk->serialNumber(),
            'devicedeviceName'   => $zk->deviceName(),
            'devicegetTime'      => $zk->getTime()
        ];

        return view('admin.pages.attendance.device-information', $data);
    }


    public function device_adduser()
    {
        $deviceip = $this->device_ip();
        return view('admin.pages.attendance.device-adduser', compact('deviceip'));
    }

    public function device_setuser(Request $request)
    {
        $deviceip = $this->device_ip();
        $uid      = $request->uid;
        $userid   = $request->userid;
        $name     = $request->name;
        $role     = (int)$request->role;
        $password = $request->password;
        $cardno   = $request->cardno;
        $zk       = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->setUser($uid, $userid, $name, $role, $password, $cardno);

        toastr()->success('User added to device successfully.');
        return redirect()->back();
    }

    public function device_removeuser_single($uid)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->removeUser($uid);

        toastr()->success('User removed from device successfully.');
        return redirect()->back();
    }

    public function device_viewuser_single(Request $request)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);

        $zk->connect();
        $userfingerprints = $zk->getFingerprint($request->uid);

        $data = [
            'deviceip'         => $deviceip,
            'uid'              => $request->uid,
            'userid'           => $request->userid,
            'name'             => $request->name,
            'role'             => (int)$request->role,
            'password'         => $request->password,
            'cardno'           => $request->cardno,
            'userfingerprints' => $userfingerprints
        ];

        return view('admin.pages.attendance.device-information-user', $data);
    }


    public function device_data_clear_attendance()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->clearAttendance();

        toastr()->success('Attendance cleared successfully.');
        return redirect()->back();
    }

    public function device_restart()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->restart();

        toastr()->success('Device restart successfully.');
        return redirect()->back();
    }

    public function device_shutdown()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->disableDevice();
        $zk->shutdown();

        return redirect()->back();
    }
}
