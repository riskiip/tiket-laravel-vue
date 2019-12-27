<?php

namespace App\Http\Controllers\Tiket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tiket\Tiket;
use App\Http\Resources\TiketResource;
use Symfony\Component\HttpFoundation\Response;

class TiketController extends Controller
{
    public function index()
    {
        return TiketResource::collection(Tiket::latest()->get());
    }

    public function store(Request $request)
    {
        $tiket = Tiket::create($request->all());
        return response(new TiketResource($tiket), Response::HTTP_CREATED);    
    }
   
    public function show(Tiket $tiket)
    {
        return new TiketResource($tiket);
    }
    
    public function update(Request $request, Tiket $tiket)
    {
        $tiket->update($request->all());
        return response('Updated', Response::HTTP_OK);
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();
        return response('Deleted', Response::HTTP_OK);
    }
}
