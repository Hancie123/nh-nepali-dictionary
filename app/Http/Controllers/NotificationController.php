<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index(){

        $allNotifications = Notification::whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('notifications')
                ->groupBy('category');
        })->get();

        $maxIdNotifications = Notification::whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('notifications')
                ->groupBy('category');
        })->get();

        // Fetch all data for each category
        $categoryNotifications = collect();

        foreach ($maxIdNotifications as $notification) {
            $notificationsForCategory = Notification::where('category', $notification->category)->get();
            $categoryNotifications->push($notificationsForCategory);
        }

        $notification=Notification::latest()->limit(5)->get();

        return view('admin.notification',compact('notification','allNotifications','categoryNotifications'));
    }
}
