<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function destroy() {
        Auth::logout();
        redirect('login');
    }
}
