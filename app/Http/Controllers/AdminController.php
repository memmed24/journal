<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public $data = [];

    public function __construct() {
        $this->adminName = $this->getAdminNameAndSurname();
        $this->data = [
            'admin' => [
                'adminName' => $this->adminName
            ]
        ];
    }
    public function index() {
        $this->data['notifications'] = $this->getNotifications();
        $this->data['pages']['current'] = 'index';

        return view('dashboard.index')->with(['data' => $this->data]);
    }

    public function acceptFriendRequest() {
        
    }
}
