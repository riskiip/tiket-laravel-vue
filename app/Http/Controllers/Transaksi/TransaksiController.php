<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Transaksi\Transaksi;
use App\Http\Resources\TransaksiResource;
use Symfony\Component\HttpFoundation\Response;

class TransaksiController extends Controller
{
    public function index()
    {
        return TransaksiResource::collection(Transaksi::where('status', 1)->latest()->get());
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return response('Deleted', Response::HTTP_ACCEPTED);
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return response('Created', Response::HTTP_ACCEPTED);
    }
    
    public function update()
    {
        $transaksi = Transaksi::where('status', 0);
        $transaksi -> update([
            'status' => 1,
        ]);
        return response (Response::HTTP_ACCEPTED);
    }
}
