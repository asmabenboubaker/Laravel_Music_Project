<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PusherController extends Controller
{
   /**
     * @return Application|Factory|View
     */
    public function index() 
    {
        $user = Auth::user(); 
        $userName = $user->name;
        return view('chat',  ['userName' => $userName]);
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function broadcast(Request $request) 
    {
        $message = $request->get('message') ?? 'You wrote a blank message';

        broadcast(new PusherBroadcast($message))->toOthers();
        $isSelfMessage = true;
        return view('right', [
            'timestamp' => date('H:i'),
            'message'   => $message,
            'isSelfMessage' => $isSelfMessage,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function message(Request $request) 
    {
        return view('left', [
            'timestamp' => date('H:i'),
            'message'   => $request->get('message'),
        ]);
    }
}
