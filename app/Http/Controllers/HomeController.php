<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function showForm()
    {
        $nid = session('nid');
        $userData = $this->homeService->getUserStatus($nid);
        $centers = $this->homeService->getVaccineCenters();

        return view('user.nid_search', [
            'centers' => $centers,
            'user' => $userData['user'],
            'nid' => $nid,
            'statusMessage' => $userData['statusMessage']
        ]);
    }

    public function nidSearch(Request $request)
    {
        $nid = $this->homeService->storeNidInSession($request);
        return redirect()->route('users.form')->with('nid', $nid);
    }
}
