<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\roster;
use Auth;

class RosterController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $result = DB::select('SELECT a.id AS id_user, b.id AS id_roster, d.id AS id_product, b.title AS title, d.name AS product_name FROM users a JOIN rosters b ON a.id = b.user_id JOIN roster_with_products c ON b.id = c.roster_id JOIN products d ON c.product_id = d.id where a.id = '.$user_id);

        return $result;
    }
}
