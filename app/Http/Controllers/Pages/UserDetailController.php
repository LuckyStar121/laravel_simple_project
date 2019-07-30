<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\UserManagement;
use App\Member;

use http\Env\Request;
use Salman\Mqtt\MqttClass\Mqtt;
use Illuminate\Support\Facades\Auth;


class UserDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//        $topic = "house/bulk";
//        $this->SubscribetoTopic($topic);

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $this->user = UserManagement::where('id', $id)
            ->first();
        $this->count = 0;

        $topic = "house/bulk";
//        $this->SubscribetoTopic($topic);

        $this->members = Member::where('user_id', $this->user->id)
            ->get();

        $message = ["aaa", "nnn", "ccc"];
        return view('pages.userdetail')->with(["user" => $this->user, "count" => $this->count, 'members' => $this->members, 'messages'=>$message ]);



    }

//    public function postGetMembers(Request $request){
//        $user_id = $request->input('id');
//        $members = Member::where('user_id', $user_id)
//            ->get();
//        return view
//    }

    public function SubscribetoTopic($topic)
    {

        $mqtt = new Mqtt();
        $client_id = Auth::user()->id;
        $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
//            echo "Msg Received: \n";
//            echo "Topic: {$topic}\n\n";
//            echo "\t$msg\n\n";
//            var_dump($msg);
        }, $client_id);
    }
}