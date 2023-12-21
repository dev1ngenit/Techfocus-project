<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Rats\Zkteco\Lib\ZKTeco;


class HomeController extends Controller
{
    public function device_ip()
    {
        if (session()->exists('dip')) {
            $deviceip = session('dip');
        } else {
            session()->put('dip', '203.17.65.230');
            $deviceip = '203.17.65.230';
        }
        return $deviceip;
    }

    
    public function index()
    {
        $id = Auth::guard('admin')->user()->employee_id;
        // Connect to the ZKtecho device
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        // Retrieve attendances and user data from the device
        $attendances_all = $zk->getAttendance(2);
        $users = $zk->getUser();
        $user = null;

        foreach ($users as $userData) {
            if ($userData['userid'] === $id) {
                $user = $userData;
                break; // Exit the loop once a match is found
            }
        }

        // Initialize arrays to store user's attendance data for today, last week, and last month
        $attendanceToday = [];
        $attendanceLastWeek = [];
        $attendanceLastMonth = [];

        if ($user) {
            $user_name = $user['name'];

            // Get the current date
            $todayDate = date('Y-m-d');

            // Filter attendances for today
            $todayAttendances = array_filter($attendances_all, function ($attendance) use ($id, $todayDate) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate === $todayDate) && ($attendance['id'] === $id);
            });

            // Loop through the filtered attendances for today
            foreach ($todayAttendances as $attendance) {
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                $attendanceToday[] = [
                    'user_id' => $id,
                    'user_name' => $user_name,
                    'date' => $todayDate,
                    'check_in' => $checkTime,
                    'check_out' => $checkTime,
                ];
            }

            // Get the first day of the current week and last day of the last week
            $firstDayThisWeek = date('Y-m-d', strtotime('this week Monday'));
            $lastDayLastWeek = date('Y-m-d', strtotime('last week Sunday'));

            // Filter attendances for the last week
            $lastWeekAttendances = array_filter($attendances_all, function ($attendance) use ($id, $firstDayThisWeek, $lastDayLastWeek) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate >= $firstDayThisWeek) && ($attendanceDate <= $lastDayLastWeek) && ($attendance['id'] === $id);
            });

            // Loop through the filtered attendances for the last week
            foreach ($lastWeekAttendances as $attendance) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Create a unique key for each day
                $key = $attendanceDate;

                if (!isset($attendanceLastWeek[$key])) {
                    $attendanceLastWeek[$key] = [
                        'user_id' => $id,
                        'user_name' => $user_name,
                        'date' => $attendanceDate,
                        'check_in' => $checkTime,
                        'check_out' => $checkTime,
                    ];
                } else {
                    if (strtotime($checkTime) > strtotime($attendanceLastWeek[$key]['check_out'])) {
                        $attendanceLastWeek[$key]['check_out'] = $checkTime;
                    }
                }
            }

            // Get the first day and last day of the previous month
            $firstDayLastMonth = date('Y-m-01', strtotime('last month'));
            $lastDayLastMonth = date('Y-m-t', strtotime('last month'));

            // Filter attendances for the last month
            $lastMonthAttendances = array_filter($attendances_all, function ($attendance) use ($id, $firstDayLastMonth, $lastDayLastMonth) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate >= $firstDayLastMonth) && ($attendanceDate <= $lastDayLastMonth) && ($attendance['id'] === $id);
            });

            // Loop through the filtered attendances for the last month
            foreach ($lastMonthAttendances as $attendance) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Create a unique key for each day
                $key = $attendanceDate;

                if (!isset($attendanceLastMonth[$key])) {
                    $attendanceLastMonth[$key] = [
                        'user_id' => $id,
                        'user_name' => $user_name,
                        'date' => $attendanceDate,
                        'check_in' => $checkTime,
                        'check_out' => $checkTime,
                    ];
                } else {
                    if (strtotime($checkTime) > strtotime($attendanceLastMonth[$key]['check_out'])) {
                        $attendanceLastMonth[$key]['check_out'] = $checkTime;
                    }
                }
            }
        }

        // Now $attendanceToday, $attendanceLastWeek, and $attendanceLastMonth contain the attendance data for the specified user


        return view('admin.pages.dashboard.index', [
            'attendanceToday' => $attendanceToday,
            'attendanceLastWeek' => $attendanceLastWeek,
            'attendanceLastMonth' => $attendanceLastMonth,
            'deviceip' => $deviceip,
        ]);
    }

    public function profile()
    {
        return view('admin.pages.profile.index');
    }
}
