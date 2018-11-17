<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;

use App\Notification;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $adminNameAndSurname;

    public function __construct() {
        $this->getAdminNameAndSurname();
    }

    public function getAdminNameAndSurname() { 
        if(Auth::check() && Auth::user()->role == 1) {
            $this->adminNameAndSurname = Auth::user()->name." ".Auth::user()->surname;
            return $this->adminNameAndSurname;
        }
    }

    public function getNotifications() {
        $notifications = Notification::with(['user'])->where('seen', 0)->orderBy('id', 'desc');
        $data = [
            'count' => $notifications->count(),
            'notifications' => $notifications->get(),
            'firstFiveNotifications' => $notifications->limit(5)->get()
        ];
        return $data;
    }

}
