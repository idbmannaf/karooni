<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\OrderColorQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //use
    public function index(Request $request)
    {
        menuSubmenu('orders', 'allOrder');
        $paginate = 20;
        $data = Order::orderBy('id', 'DESC')->where('order_status', 'approved')->paginate($paginate);
        return view('orders.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * $paginate);

        // return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //use
    public function create()
    {
        menuSubmenu('orders', 'createOrder');
        $order = new Order();
        $order->created_at = Carbon::now();
        $order->order_status = 'draft';
        $order->save();

        return redirect()->route('newOrder', ['order' => $order->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(OrderRequest $request)
    // {
    //     $order = new Order;
    //     if ($request->hasFile('pl_picture')) {
    //         $op = $request->pl_picture;
    //         $extension = strtolower($op->getClientOriginalExtension());
    //         $randomFileName = 'img_' . date('Y_m_d_his') . '_' . rand(10000000, 99999999) . '.' . $extension;
    //         Storage::disk('public')->put('orders/planned/' . $randomFileName, File::get($op));
    //         $order->pl_picture = $randomFileName;
    //     }
    //     $order->order_no = $request->order_no;
    //     $order->buyer_id = $request->buyer;
    //     $order->style_no = $request->style_no;
    //     $order->pl_germent_details = $request->germent_details;
    //     $order->pl_fabric_details = $request->fabric_details;
    //     $order->pl_yern_details = $request->yern_details;
    //     $order->pl_trim_details = $request->trim_details;
    //     $order->pl_quantity = $request->quantity;
    //     $order->pl_po_purch_recvd_d = $request->po_purch_arecvd_date;
    //     $order->pl_req_delv_dt = $request->req_delv_date;
    //     $order->pl_lead_time = $request->lead_time;
    //     $order->pl_yern_recei_s_dt = $request->yern_recei_s_date;
    //     $order->pl_yern_recei_e_dt = $request->yern_recei_e_date;
    //     $order->pl_fabric_qlt_sub_dt = $request->fabric_qua_sub_date;
    //     $order->pl_fabric_qlt_app_dt = $request->fabric_qua_app_date;
    //     $order->pl_fabric_compo_tst_sub = $request->fabric_compo_test_sub;
    //     $order->pl_fabric_compo_tst_app = $request->fabric_compo_test_app;
    //     $order->pl_fabric_qlt_tst_sub = $request->fabric_qua_test_sub;
    //     $order->pl_fabric_qlt_tst_app_dt = $request->fabric_qua_text_app_date;
    //     $order->pl_sss_samp_sub_dt = $request->sss_samp_sub_date;
    //     $order->pl_sss_app_dt = $request->sss_app_date;
    //     $order->pl_knitting_s_dt = $request->knitting_s_date;
    //     $order->pl_knitting_e_dt = $request->knitting_e_date;
    //     $order->pl_dyeing_s_dt = $request->dyeing_s_date;
    //     $order->pl_dyeing_e_dt = $request->dyeing_e_date;
    //     $order->pl_sewing_acce_tst_sub = $request->sewing_acce_test_sub;
    //     $order->pl_sewing_acce_inhouse_dt = $request->sewing_acce_inhouse_date;
    //     $order->pl_packing_acce_tst_sub = $request->packing_acce_test_sub;
    //     $order->pl_packing_acce_inhouse_dt = $request->packing_acce_inhouse_date;
    //     $order->pl_cutting_s_dt = $request->cutting_s_date;
    //     $order->pl_cutting_e_dt = $request->cutting_e_date;
    //     $order->pl_print_emb_s_dt = $request->print_emb_s_date;
    //     $order->pl_print_emb_e_dt = $request->print_emb_e_date;
    //     $order->pl_sewing_s_dt = $request->sewing_s_date;
    //     $order->pl_sewing_e_dt = $request->sewing_e_date;
    //     $order->pl_finish_s_dt = $request->finish_s_date;
    //     $order->pl_finish_e_dt = $request->finish_e_date;
    //     $order->pl_midline_inspec_dt = $request->midline_inspec_date;
    //     $order->pl_final_inspec_dt = $request->final_inspec_date;
    //     $order->pl_shipment_dt = $request->shipment_date;

    //     // $order->pl_picture= $randomFileName;
    //     $order->pl_germents_smv = $request->pl_germents_smv;
    //     $order->pl_fabric_consumtion = $request->pl_fabric_consumtion;
    //     $order->pl_color_name = $request->pl_color_name;
    //     $order->pl_color_wise_qty = $request->pl_color_wise_qty;
    //     $order->pl_print_name = $request->pl_print_name;
    //     $order->pl_sewing_acc_dets = $request->pl_sewing_acc_dets;
    //     $order->pl_packing_acc_dets = $request->pl_packing_acc_dets;
    //     $order->pl_buld_fab_qlt_app_dt = $request->pl_buld_fab_qlt_app_dt;
    //     $order->pl_lab_dip_app_dt = $request->pl_lab_dip_app_dt;
    //     $order->pl_print_app_dt = $request->pl_print_app_dt;
    //     $order->pl_garments_app_dt = $request->pl_garments_app_dt;
    //     $order->pl_pp_app_dt = $request->pl_pp_app_dt;
    //     $order->pl_size_set_app_dt = $request->pl_size_set_app_dt;
    //     $order->pl_yarn_rf_no = $request->pl_yarn_rf_no;
    //     $order->pl_yarn_qty = $request->pl_yarn_qty;
    //     $order->pl_fabric_qty = $request->pl_fabric_qty;
    //     $order->pl_fabric_ready_dt = $request->pl_fabric_ready_dt;
    //     $order->pl_cutting_dt = $request->pl_cutting_dt;
    //     $order->pl_no_of_line = $request->pl_no_of_line;
    //     $order->pl_sewing_prod_line = $request->pl_sewing_prod_line;
    //     $order->pl_sewing_prod_day = $request->pl_sewing_prod_day;
    //     $order->pl_sewing_compl_dt = $request->pl_sewing_compl_dt;
    //     $order->pl_finish_compl_dt = $request->pl_finish_compl_dt;
    //     $order->pl_fabric_rejec = $request->pl_fabric_rejec;
    //     $order->pl_cutting_rejec = $request->pl_cutting_rejec;
    //     $order->pl_sewing_rejec = $request->pl_sewing_rejec;
    //     $order->pl_finish_rejec = $request->pl_finish_rejec;
    //     $order->pl_dhu = $request->pl_dhu;
    //     $order->pl_final_pack_qty = $request->pl_final_pack_qty;
    //     $order->pl_excess_short_qty = $request->pl_excess_short_qty;
    //     $order->pl_final_shipp_qty = $request->al_final_shipp_qty;
    //     $order->pl_value = $request->pl_value;
    //     $order->save();
    //     return back()->with('success', 'Planned Order Placed');
    // }

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
    //use
    public function edit($id)
    {

        $order = Order::find($id);
        $buyers = Buyer::all();
        return view('orders.edit', compact('order', 'buyers'));
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
        // dd("ACHE");
        // dd($request->order_intervention);
        $order = Order::find($id);

        if ($request->hasFile('al_picture')) {
            $plp = $request->al_picture;
            // dd("ACHE");
            $old_image_path = 'orders/actual/' . $order->al_picture;
            if (Storage::disk('public')->exists($old_image_path)) {
                Storage::disk('public')->delete($old_image_path);
            }
            $extension = strtolower($plp->getClientOriginalExtension());
            $randomFileName = 'img_' . date('Y_m_d_his') . '_' . rand(10000000, 99999999) . '.' . $extension;
            Storage::disk('public')->put('orders/actual/' . $randomFileName, File::get($plp));
            $order->al_picture = $randomFileName;
        }
        // return $order->al_picture;

        $order->al_germent_details = $request->al_germent_details;
        $order->al_fabric_details = $request->al_fabric_details;
        $order->al_yern_details = $request->al_yern_details;
        // $order->delivery_date_interval= $request->order_intervention;
        $order->al_trim_details = $request->al_trim_details;
        $order->al_quantity = $request->al_quantity;
        $order->al_po_purch_recvd_d = $request->al_po_purch_recvd_d;
        $order->al_req_delv_dt = $request->al_req_delv_dt;
        $order->al_lead_time = $request->al_lead_time;
        $order->al_yern_recei_s_dt = $request->al_yern_recei_s_dt;
        $order->al_yern_recei_e_dt = $request->al_yern_recei_e_dt;
        $order->al_fabric_qlt_sub_dt = $request->al_fabric_qlt_sub_dt;
        $order->al_fabric_qlt_app_dt = $request->al_fabric_qlt_app_dt;
        $order->al_fabric_compo_tst_sub = $request->al_fabric_compo_tst_sub;
        $order->al_fabric_compo_tst_app = $request->al_fabric_compo_tst_app;
        $order->al_fabric_qlt_tst_sub = $request->al_fabric_qlt_tst_sub;
        $order->al_fabric_qlt_tst_app_dt = $request->al_fabric_qlt_tst_app_dt;
        $order->al_sss_samp_sub_dt = $request->al_sss_samp_sub_dt;
        $order->al_sss_app_dt = $request->al_sss_app_dt;
        $order->al_knitting_s_dt = $request->al_knitting_s_dt;
        $order->al_knitting_e_dt = $request->al_knitting_e_dt;
        $order->al_dyeing_s_dt = $request->al_dyeing_s_dt;
        $order->al_dyeing_e_dt = $request->al_dyeing_e_dt;
        $order->al_sewing_acce_tst_sub = $request->al_sewing_acce_tst_sub;
        $order->al_sewing_acce_inhouse_dt = $request->al_sewing_acce_inhouse_dt;
        $order->al_packing_acce_tst_sub = $request->al_packing_acce_tst_sub;
        $order->al_packing_acce_inhouse_dt = $request->al_packing_acce_inhouse_dt;
        $order->al_cutting_s_dt = $request->al_cutting_s_dt;
        $order->al_cutting_e_dt = $request->al_cutting_e_dt;
        $order->al_print_emb_s_dt = $request->al_print_emb_s_dt;
        $order->al_print_emb_e_dt = $request->al_print_emb_e_dt;
        $order->al_sewing_s_dt = $request->al_sewing_s_dt;
        $order->al_sewing_e_dt = $request->al_sewing_e_dt;
        $order->al_finish_s_dt = $request->al_finish_s_dt;
        $order->al_finish_e_dt = $request->al_finish_e_dt;
        $order->al_midline_inspec_dt = $request->al_midline_inspec_dt;
        $order->al_final_inspec_dt = $request->al_final_inspec_dt;
        $order->al_shipment_dt = $request->al_shipment_dt;
        //$order->al_picture=$request->al_picture;//Next Instruction
        $order->al_germents_smv = $request->al_germents_smv;
        $order->al_fabric_consumtion = $request->al_fabric_consumtion;
        // $order->al_color_name = $request->al_color_name;
        // $order->al_color_wise_qty = $request->al_color_wise_qty;
        // $order->al_print_name = $request->al_print_name;
        $order->al_sewing_acc_dets = $request->al_sewing_acc_dets;
        $order->al_packing_acc_dets = $request->al_packing_acc_dets;
        $order->al_buld_fab_qlt_app_dt = $request->al_buld_fab_qlt_app_dt;
        $order->al_lab_dip_app_dt = $request->al_lab_dip_app_dt;
        $order->al_print_app_dt = $request->al_print_app_dt;
        $order->al_garments_app_dt = $request->al_garments_app_dt;
        $order->al_pp_app_dt = $request->al_pp_app_dt;
        $order->al_size_set_app_dt = $request->al_size_set_app_dt;
        $order->al_yarn_rf_no = $request->al_yarn_rf_no;
        $order->al_yarn_qty = $request->al_yarn_qty;
        $order->al_fabric_qty = $request->al_fabric_qty;
        $order->al_fabric_ready_dt = $request->al_fabric_ready_dt;
        $order->al_cutting_dt = $request->al_cutting_dt;
        $order->al_no_of_line = $request->al_no_of_line;
        $order->al_sewing_prod_line = $request->al_sewing_prod_line;
        $order->al_sewing_prod_day = $request->al_sewing_prod_day;
        $order->al_sewing_comal_dt = $request->al_sewing_comal_dt;
        $order->al_finish_comal_dt = $request->al_finish_comal_dt;
        $order->al_fabric_rejec = $request->al_fabric_rejec;
        $order->al_cutting_rejec = $request->al_cutting_rejec;
        $order->al_sewing_rejec = $request->al_sewing_rejec;
        $order->al_finish_rejec = $request->al_finish_rejec;
        $order->al_dhu = $request->al_dhu;
        $order->al_final_pack_qty = $request->al_final_pack_qty;
        $order->al_excess_short_qty = $request->al_excess_short_qty;
        $order->al_final_shipp_qty = $request->al_final_shipp_qty;
        $order->al_value = $request->al_value;

        $order->save();
        $al_color_name = $request->al_color_name;
        $al_color_wise_qty = $request->al_color_wise_qty;
        $al_print_name = $request->al_print_name;

        $count = count($al_color_name);
        for ($i = 0; $i < $count; $i++) {
            if ($al_color_name[$i] != null) {
                $data = new OrderColorQuantity;
                $data->order_id = $order->id;
                $data->al_color_name = $al_color_name[$i];
                $data->al_color_wise_qty = $al_color_wise_qty[$i];
                $data->al_print_name = $al_print_name[$i];
                $data->save();
            }
        }

        return back()->with('success', 'Actual Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        OrderColorQuantity::where('order_id', $request->order_id)->delete();
        // $order = Order::where->('id',$request->order_id)->first();
        $order = Order::where('id', $request->order_id)->first();
        // $pl_picture = $order->pl_picture;
        // $al_picture= $order->al_picture;
        $al_image_path = 'orders/actual/' . $order->al_picture;
        $pl_image_path = 'orders/planned/' . $order->pl_picture;
        if (Storage::disk('public')->exists($al_image_path)) {
            Storage::disk('public')->delete($al_image_path);
        }
        if (Storage::disk('public')->exists($pl_image_path)) {
            Storage::disk('public')->delete($pl_image_path);
        }
        $order->delete();
        return redirect()->back()->with('success', 'Order Deleted Successfully');
    }
    public function quantityWiseOrder(Request $request)
    {
        menuSubmenu('orders', 'latestOrder');

        $paginate = 20;
        $data = Order::orderBy('id', 'DESC')->where('order_status', 'approved')->paginate($paginate);
        // dd($data->ordercolor());

        return view('orders.quantityWiseOrder', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * $paginate);

        // return view('orders.latestOrder',compact('data'));
    }
    public function editQuantityWiseOrder(Request $request)
    {
        $order = Order::find($request->id);
        $buyers = Buyer::all();
        return view('orders.quantityWiseOrderEdit', compact('order', 'buyers'));
    }
    //Use
    public function editOrder(Request $request)
    {
        $order = Order::where('id', $request->order)->first();
        $buyers =  Buyer::all();;
        return view('orders.create', compact('order', 'buyers'));
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'delivery_date_interval' => 'required'
        ]);

        $order = Order::where('id', $request->order)->first();
        if ($request->hasFile('pl_picture')) {
            $op = $request->pl_picture;
            $extension = strtolower($op->getClientOriginalExtension());
            $randomFileName = 'img_' . date('Y_m_d_his') . '_' . rand(10000000, 99999999) . '.' . $extension;
            Storage::disk('public')->put('orders/planned/' . $randomFileName, File::get($op));
            $order->pl_picture = $randomFileName;
        }
        $order->order_no = $request->order_no;
        $order->buyer_id = $request->buyer;
        $order->style_no = $request->style_no;
        $order->delivery_date_interval = $request->delivery_date_interval;
        $order->pl_germent_details = $request->pl_germent_details;
        $order->pl_fabric_details = $request->pl_fabric_details;
        $order->pl_yern_details = $request->pl_yern_details;
        $order->pl_trim_details = $request->pl_trim_details;
        $order->pl_quantity = $request->pl_quantity;
        $order->pl_po_purch_recvd_d = $request->pl_po_purch_recvd_d;
        $order->pl_req_delv_dt = $request->pl_req_delv_dt;
        $order->pl_lead_time = $request->pl_lead_time;
        $order->pl_yern_recei_s_dt = $request->pl_yern_recei_s_dt;
        $order->pl_yern_recei_e_dt = $request->pl_yern_recei_e_dt;
        $order->pl_fabric_qlt_sub_dt = $request->pl_fabric_qlt_sub_dt;
        $order->pl_fabric_qlt_app_dt = $request->pl_fabric_qlt_app_dt;
        $order->pl_fabric_compo_tst_sub = $request->pl_fabric_compo_tst_sub;
        $order->pl_fabric_compo_tst_app = $request->pl_fabric_compo_tst_app;
        $order->pl_fabric_qlt_tst_sub = $request->pl_fabric_qlt_tst_sub;
        $order->pl_fabric_qlt_tst_app_dt = $request->pl_fabric_qlt_tst_app_dt;
        $order->pl_sss_samp_sub_dt = $request->pl_sss_samp_sub_dt;
        $order->pl_sss_app_dt = $request->pl_sss_app_dt;
        $order->pl_knitting_s_dt = $request->pl_knitting_s_dt;
        $order->pl_knitting_e_dt = $request->pl_knitting_e_dt;
        $order->pl_dyeing_s_dt = $request->pl_dyeing_s_dt;
        $order->pl_dyeing_e_dt = $request->pl_dyeing_e_dt;
        $order->pl_sewing_acce_tst_sub = $request->pl_sewing_acce_tst_sub;
        $order->pl_sewing_acce_inhouse_dt = $request->pl_sewing_acce_inhouse_dt;
        $order->pl_packing_acce_tst_sub = $request->pl_packing_acce_tst_sub;
        $order->pl_packing_acce_inhouse_dt = $request->pl_packing_acce_inhouse_dt;
        $order->pl_cutting_s_dt = $request->pl_cutting_s_dt;
        $order->pl_cutting_e_dt = $request->pl_cutting_e_dt;
        $order->pl_print_emb_s_dt = $request->pl_print_emb_s_dt;
        $order->pl_print_emb_e_dt = $request->pl_print_emb_e_dt;
        $order->pl_sewing_s_dt = $request->pl_sewing_s_dt;
        $order->pl_sewing_e_dt = $request->pl_sewing_e_dt;
        $order->pl_finish_s_dt = $request->pl_finish_s_dt;
        $order->pl_finish_e_dt = $request->pl_finish_e_dt;
        $order->pl_midline_inspec_dt = $request->pl_midline_inspec_dt;
        $order->pl_final_inspec_dt = $request->pl_final_inspec_dt;
        $order->pl_shipment_dt = $request->pl_shipment_dt;

        // $order->pl_picture= $randomFileName;
        $order->pl_germents_smv = $request->pl_germents_smv;
        $order->pl_fabric_consumtion = $request->pl_fabric_consumtion;
        // $order->pl_color_name= $request->pl_color_name;
        // $order->pl_color_wise_qty= $request->pl_color_wise_qty;
        // $order->pl_print_name= $request->pl_print_name;
        $order->pl_sewing_acc_dets = $request->pl_sewing_acc_dets;
        $order->pl_packing_acc_dets = $request->pl_packing_acc_dets;
        $order->pl_buld_fab_qlt_app_dt = $request->pl_buld_fab_qlt_app_dt;
        $order->pl_lab_dip_app_dt = $request->pl_lab_dip_app_dt;
        $order->pl_print_app_dt = $request->pl_print_app_dt;
        $order->pl_garments_app_dt = $request->pl_garments_app_dt;
        $order->pl_pp_app_dt = $request->pl_pp_app_dt;
        $order->pl_size_set_app_dt = $request->pl_size_set_app_dt;
        $order->pl_yarn_rf_no = $request->pl_yarn_rf_no;
        $order->pl_yarn_qty = $request->pl_yarn_qty;
        $order->pl_fabric_qty = $request->pl_fabric_qty;
        $order->pl_fabric_ready_dt = $request->pl_fabric_ready_dt;
        $order->pl_cutting_dt = $request->pl_cutting_dt;
        $order->pl_no_of_line = $request->pl_no_of_line;
        $order->pl_sewing_prod_line = $request->pl_sewing_prod_line;
        $order->pl_sewing_prod_day = $request->pl_sewing_prod_day;
        $order->pl_sewing_compl_dt = $request->pl_sewing_compl_dt;
        $order->pl_finish_compl_dt = $request->pl_finish_compl_dt;
        $order->pl_fabric_rejec = $request->pl_fabric_rejec;
        $order->pl_cutting_rejec = $request->pl_cutting_rejec;
        $order->pl_sewing_rejec = $request->pl_sewing_rejec;
        $order->pl_finish_rejec = $request->pl_finish_rejec;
        $order->pl_dhu = $request->pl_dhu;
        $order->pl_final_pack_qty = $request->pl_final_pack_qty;
        $order->pl_excess_short_qty = $request->pl_excess_short_qty;
        $order->pl_final_shipp_qty = $request->pl_final_shipp_qty;
        $order->pl_value = $request->pl_value;
        $order->order_status = 'approved';
        $order->save();
        $pl_color_name = $request->pl_color_name;
        $pl_color_wise_qty = $request->pl_color_wise_qty;
        $pl_print_name = $request->pl_print_name;

        $count = count($pl_color_name);
        for ($i = 0; $i < $count; $i++) {
            $data = new OrderColorQuantity;
            $data->order_id = $order->id;
            $data->pl_color_name = $pl_color_name[$i];
            $data->pl_color_wise_qty = $pl_color_wise_qty[$i];
            $data->pl_print_name = $pl_print_name[$i];
            $data->save();
        }

        return redirect()->back()->with('success', 'Planned Order Updated Succcessfully');
    }
    public function colorWiseOrderDelete(Request $request)
    {
        try {
            OrderColorQuantity::find($request->color)->delete();
            return redirect()->back()->with('success', 'Color Deleted Successfully');
            // return redirect('author/orders/' . $request->order . '/edit#colorPart')->with('success', 'Color Deleted Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something Worng');
            // return redirect('author/orders/' . $request->order . '/edit#colorPart')->with('error', 'Something Worng');
        }
    }

    public function editPlannedOrder(Request $request)
    {
        $order = Order::where('id', $request->order)->first();
        $buyers =  Buyer::all();;
        return view('orders.editPlannedOrder', compact('order', 'buyers'));
    }
    public function buyerOrder(Request $request)
    {
        
        menuSubmenu('orders', 'allOrder');
        $buyer = Buyer::where('id', $request->buyer)->first();
       
        if (!$buyer) {
            return redirect()->back()->with('warning', 'No Buyer Found ');
        }
        $paginate = 20;
        $order= Order::where('buyer_id',$buyer->id)->get();

        $data = Order::orderBy('id', 'DESC')
            // ->where('order_status', 'approved')
            ->where('buyer_id', $buyer->id)
            ->paginate($paginate);
            // return $data;
        return view('orders.buyerOrders', compact('data', 'buyer'))
            ->with('i', ($request->input('page', 1) - 1) * $paginate);
    }
    public function searchAjax(Request $request)
    {
        $type = $request->type;
        $page = '';
        $q = $request->q;
        $status = $request->status;
        if ($type == 'orders') {
            $data = Order::where('id', 'like', "%{$q}%")
            // ->where('order_status', 'approved')
            ->orWhereHas('buyer',function($query) use ($q) {
                $query->where('id',$q);
                $query->orWhere('name','like', "%$q%");
                $query->orWhere('mobile','like', "%$q%");
                $query->orWhere('email','like', "%$q%");

            })
            ->orWhere('style_no',$q)
            ->orWhere('order_no','like', "%$q%")
                ->latest()
                ->paginate(100)
                ->appends(['q' => $q, 'status' => $status, 'type' => $type]);

            $page = View('orders.include.ordersSearchAjax', ['data' => $data, 'q' => $q, 'status' => $status])->render();
        }
        if ($type == 'catwise') {
            $data = Order::where('id', 'like', "%{$q}%")
            // ->where('order_status', 'approved')
            ->orWhereHas('buyer',function($query) use ($q) {
                $query->where('id',$q);
                $query->orWhere('name','like', "%$q%");
                $query->orWhere('mobile','like', "%$q%");
                $query->orWhere('email','like', "%$q%");

            })
            ->orWhere('style_no',$q)
            ->orWhere('order_no','like', "%$q%")
                ->latest()
                ->paginate(100)
                ->appends(['q' => $q, 'status' => $status, 'type' => $type]);

            $page = View('orders.include.catwiseSearchAjax', ['data' => $data, 'q' => $q, 'status' => $status])->render();
        }
        if ($type == 'buyers') {
            $data = Buyer::where('id', 'like', "%{$q}%")
            ->orWhere('name','like', "%$q%")
            ->orWhere('email','like', "%$q%")
            ->orWhere('mobile','like', "%$q%")
                ->latest()
                ->paginate(100)
                ->appends(['q' => $q, 'status' => $status, 'type' => $type]);

            $page = View('orders.include.buyersSearchAjax', ['data' => $data, 'q' => $q, 'status' => $status])->render();
        }
        // $page = View::make('subscriber.profile.test', compact('serviceProfileInfos', 'subscription'))->render();

        // return  response()->json(['html' => $html]);

        if($request->ajax())
        {
            return Response()->json(array(
            'success' => true,
            'type' => $type,
            'page' => $page,
            ));
        }
    }
}
