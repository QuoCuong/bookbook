<?php

namespace Book\Http\Controllers\Admin;

use Book\Http\Controllers\Controller;
use Book\Order;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showOrderSearchView()
    {
        return view('admin.orders.search');
    }

    public function searchOrder(Request $request)
    {
        if (empty($request->q)) {
            return view('admin.orders.search');
        }

        $search_by = $request->search_by;
        $keyword   = $request->q;

        switch ($search_by) {
            case 'id':
                $orders = Order::where('id', $keyword)->get();
                break;
            case 'date':
                $orders = Order::where('date', 'like', '%' . $keyword . '%')->get();
                break;
            case 'user_id':
                $orders = Order::where('user_id', $keyword)->get();
                break;
            default:
                # code...
                break;
        }

        return view('admin.orders.search', [
            'orders'    => $orders,
            'search_by' => $search_by,
            'keyword'   => $keyword,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
