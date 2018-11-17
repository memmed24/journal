<?php

namespace App\Http\Controllers;

use App\Notification;
use DB;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function apiIndex(Request $request)
    {
        $notification = Notification::with(['user'])->orderBy('id', 'desc');
        if ($request->has('limit')) {
            $notification = $notification->limit($request->get('limit'));
        } else {
            $notification = $notification->where('seen', 0);
        }
        $data = [
            'count' => $notification->count(),
            'notifications' => $notification->get(),
            'unseen' => $notification->where('seen', 0)->count(),
        ];
        return response($data, 200);
    }

    public function index()
    {
        return view('dashboard.notifications.index');
    }

    public function apiUpdate(Request $request)
    {
        if ($request->has('ids')):
            $ids = $request->get('ids');
            $query = Notification::query();
            $query->whereIn('id', $ids)->update([
                'seen' => 1
            ]);
            return response([
                'message' => 'success',
            ], 200);
        endif;
    }
}
