<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblAppState;
use Illuminate\Support\Facades\DB;

class AppStateController extends Controller
{
    public function index()
    {
        $appStates = TblAppState::paginate(40);
        return view('AppState.index', compact('appStates'));
    }

    public function update()
    {
        DB::table('tbl_app_states')
            ->where('id', '>=', 1)
            ->update(['request_state'=> 500]);
        $appStates = TblAppState::paginate(40);

        return view('AppState.index', compact('appStates'));
    }

}
