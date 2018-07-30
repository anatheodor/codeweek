<?php

namespace App\Helpers;

use App\Event;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AmbassadorHelper
{

    public static function getByActiveCountries()
    {

        $ambassadors_count = User::role('ambassador')
            ->where("country_iso","<>", "")
            ->join('countries', 'country_iso', '=', 'countries.iso')
            ->groupBy('country_iso')
            ->select('country_iso', DB::raw('count(*) as total'),'countries.name')
            ->orderBy("countries.name")
            ->get();


        return $ambassadors_count;


    }

}