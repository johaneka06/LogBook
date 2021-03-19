<?php

namespace App\Http\Controllers;

use App\Log;
use App\Mail\NewEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;

class LogController extends Controller
{

    public function index()
    {
        $logs = Log::where('user_id', '=', Auth::user()->id)->orderBy('log_date', 'DESC')->get();
        return view('index', ['logs' => $logs]);
    }

    public function create()
    {
        return view('addlog');
    }

    public function store(Request $request)
    {
        $clock_out = ($request->has('clock_out') ? $request->clock_out : "");

        $request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'clock_in' => 'required',
        ]);
        
        $id = Uuid::uuid4();

        $log = Log::create([
            'user_id' => Auth::user()->id,
            'id' => $id,
            'log_date' => $request['date'],
            'title' => $request['title'],
            'description' => $request['detail'],
            'clock_in' => $request['clock_in'],
            'clock_out' => $clock_out,
        ]);

        // Mail::to(Auth::user()->email)->send(new NewEntry($log, Auth::user()->name, $id));

        return redirect('/');
    }

    public function show($id)
    {
        $log = Log::where('id', '=', $id)->first();
        return view('log-detail', ['log' => $log]);
    }

    public function update(Request $request, $id)
    {
        $clock_out = ($request->has('clock_out') ? $request->clock_out : "");
        $request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'clock_in' => 'required',
        ]);

        $log = Log::where('id', '=', $id)->first();

        $log->title = $request['title'];
        $log->log_date = $request['date'];
        $log->description = $request['detail'];
        $log->clock_in = $request['clock_in'];
        $log->clock_out = $clock_out;
        $log->save();

        return redirect('/log/'.$id.'/detail');
    }

    public function destroy($id)
    {
        Log::where('id', '=', $id)->first()->delete();
        return redirect('/');
    }
}
