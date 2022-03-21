<?php

namespace App\Http\Controllers;

use App\Repository\SellRepository;
use App\Repository\StatusRepository;
use Illuminate\Http\Request;

class SellControlle extends Controller
{
    public $sellRepository;
    public $statusRepository;

    public function __construct(SellRepository $sellRepository, StatusRepository $statusRepository)
    {
        $this->sellRepository = $sellRepository;
        $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $sells = $this->sellRepository->getAll();
        return view('sell.list', compact('sells'));
    }

    public function create()
    {
        $statuses = $this->statusRepository->getAll();
        $sells = $this->sellRepository->getAll();
        return view('sell.create', compact(['sells', 'statuses']));

    }

    public function store(Request $request)
    {
        $valition = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'manager' => 'required',
            'status_id' => 'required',
        ],

            [
                "name.required" => "Không được để trống",
                "phone.required" => "Không được để trống",
                "email.required" => "Không được để trống",
                "address.required" => "Không được để trống",
                "manager.required" => "Không được để trống",
                "status_id.required" => "Không được để trống",

            ]
        );
        $this->sellRepository->store($request, $valition);
        return redirect()->route('sells.index');
    }

    public function show($id)
    {
        $this->sellRepository->getById($id);
    }

    public function edit($id)
    {
        $sell = $this->sellRepository->getById($id);
        $statuses = $this->statusRepository->getAll($id);
        return view('sell.update', compact(['sell','statuses']));
    }

    public function update(Request $request, $id)
    {
        $this->sellRepository->update($request, $id);
        return redirect()->route('sells.index');
    }

    public function destroy($id)
    {
        $this->sellRepository->deleteById($id);
        return redirect()->route('sells.index');
    }
}
