<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin\Event;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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
        $attendances_all = $zk->getEmployeeAttendance(2, $id);
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
        $attendanceThisMonth = [];
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

            // Initialize variables to store earliest check-in and latest check-out times
            $earliestCheckIn = null;
            $latestCheckOut = null;

            // Loop through the filtered attendances for today
            foreach ($todayAttendances as $attendance) {
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Update earliest check-in time
                if ($earliestCheckIn === null || strtotime($checkTime) < strtotime($earliestCheckIn)) {
                    $earliestCheckIn = $checkTime;
                }

                // Update latest check-out time
                if ($latestCheckOut === null || strtotime($checkTime) > strtotime($latestCheckOut)) {
                    $latestCheckOut = $checkTime;
                }
            }

            // Add the overall attendance data for today
            if ($earliestCheckIn !== null && $latestCheckOut !== null) {
                $attendanceToday[] = [
                    'user_id' => $id,
                    'user_name' => $user_name,
                    'date' => $todayDate,
                    'check_in' => $earliestCheckIn,
                    'check_out' => $latestCheckOut,
                ];
            }
            $attendanceToday = count($attendanceToday) > 0 ? $attendanceToday[0] : null;
            // dd($attendanceToday['check_in']);
            // Get the first day of the current week and last day of the last week
            // Get the first day and last day of the last week
            // $firstDayLastWeek = date('Y-m-d', strtotime('last week Monday'));
            // $lastDayLastWeek = date('Y-m-d', strtotime('last week Sunday'));

            // // Filter attendances for the last week
            // $lastWeekAttendances = array_filter($attendances_all, function ($attendance) use ($id, $firstDayLastWeek, $lastDayLastWeek) {
            //     $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
            //     return ($attendanceDate >= $firstDayLastWeek) && ($attendanceDate <= $lastDayLastWeek) && ($attendance['id'] === $id);
            // });

            // // Initialize variables to store earliest check-in and latest check-out times for each day
            // $earliestCheckInLastWeek = [];
            // $latestCheckOutLastWeek = [];

            // // Loop through the filtered attendances for the last week
            // foreach ($lastWeekAttendances as $attendance) {
            //     $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
            //     $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

            //     // Update earliest check-in time
            //     if (!isset($earliestCheckInLastWeek[$attendanceDate]) || strtotime($checkTime) < strtotime($earliestCheckInLastWeek[$attendanceDate])) {
            //         $earliestCheckInLastWeek[$attendanceDate] = $checkTime;
            //     }

            //     // Update latest check-out time
            //     if (!isset($latestCheckOutLastWeek[$attendanceDate]) || strtotime($checkTime) > strtotime($latestCheckOutLastWeek[$attendanceDate])) {
            //         $latestCheckOutLastWeek[$attendanceDate] = $checkTime;
            //     }
            // }

            // // Create entries for each day with the earliest check-in and latest check-out times
            // foreach ($earliestCheckInLastWeek as $date => $checkIn) {
            //     $attendanceLastWeek[] = [
            //         'user_id' => $id,
            //         'user_name' => $user_name,
            //         'date' => $date,
            //         'check_in' => $checkIn,
            //         'check_out' => $latestCheckOutLastWeek[$date],
            //     ];
            // }

            // Calculate the date range for this month
            $startDate = date('Y-m-01', strtotime('this month'));
            $endDate = date('Y-m-d');

            // Filter attendances for for this month
            $thisMonthAttendances = array_filter($attendances_all, function ($attendance) use ($id, $startDate, $endDate) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate >= $startDate) && ($attendanceDate <= $endDate) && ($attendance['id'] === $id);
            });

            // Initialize variables to store earliest check-in and latest check-out times for each day
            $earliestCheckInThisMonth = [];
            $latestCheckOutThisMonth = [];

            // Loop through the filtered attendances for for this month
            foreach ($thisMonthAttendances as $attendance) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Update earliest check-in time
                if (!isset($earliestCheckInThisMonth[$attendanceDate]) || strtotime($checkTime) < strtotime($earliestCheckInThisMonth[$attendanceDate])) {
                    $earliestCheckInThisMonth[$attendanceDate] = $checkTime;
                }

                // Update latest check-out time
                if (!isset($latestCheckOutThisMonth[$attendanceDate]) || strtotime($checkTime) > strtotime($latestCheckOutThisMonth[$attendanceDate])) {
                    $latestCheckOutThisMonth[$attendanceDate] = $checkTime;
                }
            }

            // Create entries for each day with the earliest check-in and latest check-out times
            foreach ($earliestCheckInThisMonth as $date => $checkIn) {
                $attendanceThisMonth[] = [
                    'user_id' => $id,
                    'user_name' => $user_name,
                    'date' => $date,
                    'check_in' => $checkIn,
                    'check_out' => $latestCheckOutThisMonth[$date],
                ];
            }

            // Now $attendanceThisMonth contains the attendance data for this month

            // For Last Month

            // Get the first day and last day of the previous month
            $firstDayLastMonth = date('Y-m-01', strtotime('last month'));
            $lastDayLastMonth = date('Y-m-t', strtotime('last month'));

            // Filter attendances for the last month
            $lastMonthAttendances = array_filter($attendances_all, function ($attendance) use ($id, $firstDayLastMonth, $lastDayLastMonth) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                return ($attendanceDate >= $firstDayLastMonth) && ($attendanceDate <= $lastDayLastMonth) && ($attendance['id'] === $id);
            });

            // Initialize variables to store earliest check-in and latest check-out times
            $earliestCheckInLastMonth = [];
            $latestCheckOutLastMonth = [];

            // Loop through the filtered attendances for the last month
            foreach ($lastMonthAttendances as $attendance) {
                $attendanceDate = date('Y-m-d', strtotime($attendance['timestamp']));
                $checkTime = date('H:i:s', strtotime($attendance['timestamp']));

                // Update earliest check-in time
                if (!isset($earliestCheckInLastMonth[$attendanceDate]) || strtotime($checkTime) < strtotime($earliestCheckInLastMonth[$attendanceDate])) {
                    $earliestCheckInLastMonth[$attendanceDate] = $checkTime;
                }

                // Update latest check-out time
                if (!isset($latestCheckOutLastMonth[$attendanceDate]) || strtotime($checkTime) > strtotime($latestCheckOutLastMonth[$attendanceDate])) {
                    $latestCheckOutLastMonth[$attendanceDate] = $checkTime;
                }
            }

            // Create entries for each day with the earliest check-in and latest check-out times for the last month
            foreach ($earliestCheckInLastMonth as $date => $checkIn) {
                $attendanceLastMonth[] = [
                    'user_id' => $id,
                    'user_name' => $user_name,
                    'date' => $date,
                    'check_in' => $checkIn,
                    'check_out' => $latestCheckOutLastMonth[$date],
                ];
            }
        }

        $lateCounts = array_filter($attendanceThisMonth, function ($attendance) {
            return Carbon::parse($attendance['check_in']) > Carbon::parse('09:05:00');
        });

        return view('admin.pages.dashboard.index', [
            'attendanceToday'      => isset($attendanceToday) ? $attendanceToday : null,
            'attendanceThisMonths' => isset($attendanceThisMonth) ? $attendanceThisMonth : null,
            'lateCounts'           => isset($lateCounts) ? $lateCounts : null,
            'attendanceLastMonths' => isset($attendanceLastMonth) ? $attendanceLastMonth : null,
            'deviceip'             => isset($deviceip) ? $deviceip : null,
        ]);
    }

    public function profile()
    {
        return view('admin.pages.profile.index');
    }
}
