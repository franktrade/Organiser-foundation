<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class ImpactController extends Controller
{
    public function index(Request $request)
    {
        return view('website.impact', [
            'featuredImpacts' => Impact::paginate(),
            'impacts' => Impact::published()->latest()->paginate()
        ]);
    }

    public function show(Request $request, Impact $impact)
    {
        $shareLinks = ShareFacade::page($request->url(), $impact->title)
            ->facebook()
            ->twitter()
            ->linkedin($impact->excerpt)
            ->whatsapp()
            ->getRawLinks();

        return view('website.impact-details', [
            'impact' => $impact,
            'shareLinks' => $shareLinks,
        ]);
    }
}
