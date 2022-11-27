<?php

namespace App\Http\Controllers;

use App\Http\Requests\BodyPositionRequest;
use App\Models\BodyPosition;
use Illuminate\Http\Request;

class BodyPositionController extends Controller
{
    public function index(Request $request)
    {
        $bodyPositions = BodyPosition::query()
            ->when(!empty(request('search')), function($query){
                $query->where('name', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('description', 'LIKE', '%' . request('search') . '%');
            })
            ->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        return view('body-position.index', compact('bodyPositions'));
    }

    public function create()
    {
        return view('body-position.create');
    }

    public function store(BodyPositionRequest $request)
    {
        BodyPosition::create($request->validated());
        return redirect()->route('body-position')->with('success', 'Body position added.');
    }

    public function destroy(BodyPosition $bodyPosition)
    {
        $bodyPosition->delete();
        return back()->with('success', 'Body position was deleted.');
    }
}
