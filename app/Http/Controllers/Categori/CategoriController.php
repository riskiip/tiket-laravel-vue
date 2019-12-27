<?php

namespace App\Http\Controllers\Categori;

use App\Http\Controllers\Controller;
use App\Model\Categori\Categori;
use App\Http\Resources\CategoriResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriController extends Controller
{
    public function index()
    {
        return CategoriResource::collection(Categori::latest()->get());
    }

    public function store (Request $request)
    {
        $categori = Categori::create($request->all());
        return response(new CategoriResource($categori), Response::HTTP_CREATED);
    }

    public function show(Categori $categori)
    {
        return new CategoriResource($categori);
    }

    public function update(Request $request, Categori $categori)
    {
        $categori->update($request->all());
        return response('Updated', Response::HTTP_CREATED);
    }

    public function destroy(Categori $categori)
    {
        $categori->delete();
        return response('Deleted', Response::HTTP_OK);
    }
}
