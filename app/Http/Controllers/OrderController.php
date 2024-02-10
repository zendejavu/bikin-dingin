<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Devices;
use App\Models\Problems;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Devices::all();
        $user = User::find(Auth::id());
        $ac_ringan = Problems::where(['device_id' => 1, 'service' => 'Ringan'])->get();
        $ac_berat = Problems::where(['device_id' => 1, 'service' => 'Berat'])->get();
        $kulkas_ringan = Problems::where(['device_id' => 2, 'service' => 'Ringan'])->get();
        $kulkas_berat = Problems::where(['device_id' => 2, 'service' => 'Berat'])->get();
        $freezer_ringan = Problems::where(['device_id' => 3, 'service' => 'Ringan'])->get();
        $freezer_berat = Problems::where(['device_id' => 3, 'service' => 'Berat'])->get();

        // Harga Pemesanan
        $harga_maintenance_ac = 50000;
        $harga_maintenance_kulkas = 60000;
        $harga_maintenance_freezer = 70000;
        $harga_service_ringan_ac = 250000;
        $harga_service_ringan_kulkas = 260000;
        $harga_service_ringan_freezer = 270000;
        $harga_service_berat_ac = 400000;
        $harga_service_berat_kulkas = 410000;
        $harga_service_berat_freezer = 420000;

        return view(
            'orders.index',
            [
                'user' => $user,
                'devices' => $devices,
                'ac_r' => $ac_ringan,
                'ac_b' => $ac_berat,
                'kulkas_r' => $kulkas_ringan,
                'kulkas_b' => $kulkas_berat,
                'freezer_r' => $freezer_ringan,
                'freezer_b' => $freezer_berat,
                'harga_maintenance_ac' => $harga_maintenance_ac,
                'harga_maintenance_kulkas' => $harga_maintenance_kulkas,
                'harga_maintenance_freezer' => $harga_maintenance_freezer,
                'harga_service_ringan_ac' => $harga_service_ringan_ac,
                'harga_service_ringan_kulkas' => $harga_service_ringan_kulkas,
                'harga_service_ringan_freezer' => $harga_service_ringan_freezer,
                'harga_service_berat_ac' => $harga_service_berat_ac,
                'harga_service_berat_kulkas' => $harga_service_berat_kulkas,
                'harga_service_berat_freezer' => $harga_service_berat_freezer
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
        $validator = $request->validated();

        //create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'device_id' => $request->perangkat,
            'problem_id' => $request->jenis_kerusakan,
            'address' => $request->alamat,
            'work_date' => $request->tanggal_pengerjaan,
            'note' => $request->catatan,
            'price' => $request->harga
        ]);

        $mailData = [
            'title' => 'Notifikasi Pemesanan Bikin Dingin',
            'device' => Devices::find($request->perangkat, ['device']),
            'problem' => Problems::find($request->jenis_kerusakan, ['problem']),
            'address' => $request->alamat,
            'work_date' => $request->tanggal_pengerjaan,
            'note' => $request->catatan,
            'price' => $request->harga,
            'url' => config('app.url') . '/invoice/' . $order['id']
        ];

        Mail::to(Auth::user()->email)->send(new SendMail($mailData));

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil disimpan dan bukti pemesanan telah dikirimkan ke email Anda!',
            'data'    => $order
        ]);

        // return redirect('/order')->with('success', 'Pesanan Anda telah terdaftar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pesanan Anda telah terehapus.',
            'data'    => $order
        ]);
    }

    public function history()
    {
        $data = Order::where('user_id', Auth::id())->get();
        // $devices = Devices::find($data['devices_id']);
        // $problems = Problems::find($data['problems_id']);
        return view(
            'orders.history',
            [
                // 'devices' => $devices,
                // 'problems' => $problems,
                'orders' => $data
            ]
        );
    }
}
