<?php

namespace App\Http\Controllers;

use App\Data\AuthorData;
use App\Data\BroadcastData;
use App\Data\BroadcastDataBody;
use App\Models\User;
use App\Services\Antmedia\AntmediaService;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index(Request $request, AntmediaService $antmediaService)
    {
        $broadcasts = $antmediaService->getPaginatedBroadcastList($request->offset ?? 0, $request->size ?? 50);

        return view('broadcast.index', compact('broadcasts'));
    }

    public function create()
    {
        return view('broadcast.create');
    }

    public function store(BroadcastData $broadcastData, AntmediaService $antmediaService)
    {
        $broadcast = $antmediaService->createBroadcast($broadcastData);

        return redirect()->route('broadcasts.show_admin', $broadcast->streamId);
    }

    public function showAdmin(Request $request, $id, AntmediaService $antmediaService)
    {
        $broadcast = $antmediaService->getBroadcast($id);

        return view('broadcast.show_admin', compact('broadcast'));
    }

    public function show(Request $request, $id, AntmediaService $antmediaService)
    {
        $broadcast = $antmediaService->getBroadcast($id);
        return view('broadcast.show', compact('broadcast'));
    }
}
