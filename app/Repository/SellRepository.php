<?php

namespace App\Repository;

use App\Models\Sell;

class SellRepository extends BaseRepository
{

    public function getModel()
    {
        return Sell::class;
    }

    public function store($request)
    {
        $sell = new Sell();
        $sell->name = $request->name;
        $sell->phone = $request->phone;
        $sell->email = $request->email;
        $sell->address = $request->address;
        $sell->manager = $request->manager;
        $sell->status_id = $request->status_id;
        $sell->save();
    }

    public function update($request, $id)
    {
        $sell = Sell::find($id);
        $sell->name = $request->name;
        $sell->phone = $request->phone;
        $sell->email = $request->email;
        $sell->address = $request->address;
        $sell->manager = $request->manager;
        $sell->status_id = $request->status_id;
        $sell->save();
    }
}