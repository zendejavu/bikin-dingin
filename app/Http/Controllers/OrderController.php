<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Devices;
use App\Models\Problems;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Devices::all();
        $ac_ringan = Problems::where(['devices_id' => 1, 'services' => 'Ringan'])->get();
        $ac_berat = Problems::where(['devices_id' => 1, 'services' => 'Berat'])->get();
        $kulkas_ringan = Problems::where(['devices_id' => 2, 'services' => 'Ringan'])->get();
        $kulkas_berat = Problems::where(['devices_id' => 2, 'services' => 'Berat'])->get();
        $freezer_ringan = Problems::where(['devices_id' => 3, 'services' => 'Ringan'])->get();
        $freezer_berat = Problems::where(['devices_id' => 3, 'services' => 'Berat'])->get();
        return view(
            'orders.index',
            [
                'devices' => $devices,
                'ac_r' => $ac_ringan,
                'ac_b' => $ac_berat,
                'kulkas_r' => $kulkas_ringan,
                'kulkas_b' => $kulkas_berat,
                'freezer_r' => $freezer_ringan,
                'freezer_b' => $freezer_berat
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'perangkat' => 'required',
            'jenis_kerusakan' => 'required',
            'alamat' => 'required',
            'tanggal_pengerjaan' => 'required',
            'catatan' => 'required'
        ], $messages = [
            'required' => 'Inputan :attribute masih kosong.',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'devices_id' => $request->perangkat,
            'problems_id' => $request->jenis_kerusakan,
            'address' => $request->alamat,
            'work_date' => $request->tanggal_pengerjaan,
            'notes' => $request->catatan
        ]);

        // Order::create($order);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil disimpan!',
            'data'    => $order
        ]);

        // return redirect('/order')->with('success', 'Pesanan Anda telah terdaftar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function problems(Problems $devices_id)
    {
        $problems = Problems::where('devices_id', $devices_id)->get();
        dd($problems);
        return view('orders.index', [
            'problems' => $problems
        ]);
    }

    public function history()
    {
        $data = Order::all();
        return view('orders.history', ['orders' => $data]);
    }
}
