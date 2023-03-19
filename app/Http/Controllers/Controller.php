<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Location;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // $locations = Location::all();
        $provinces = Province::all();
        $locations = Location::all();
        // dd( $districts);
        return view('user.layout.master', compact('provinces','locations'));
    }
    public function detail()
    {
        // $locations = Location::all();
        // $provinces = Province::all();
        // $locations = Location::all();
        // dd( $districts);
        return view('user.details');
    }
    public function search(Request $request)
    {
        if (isset($request->district) && isset($request->location)) {
            $search = Location::where('name', 'LIKE', '%' . $request->location . '%')
                ->where('district_id', '=', $request->district)
                ->paginte(5);
            return redirect()->route('location.index');
        } elseif (isset($request->district) && !isset($request->location)) {
            $search = District::where('district_id', '=', $request->district)
                ->paginte(5);
        } elseif (!isset($request->district) && isset($request->location)) {
            $search = Location::where('name', 'LIKE', '%' . $request->location . '%')
                ->paginte(5);
        } else {
            $search = Location::paginate(5);
        }
        return view('location.index',compact('search'));
    }
}
