@extends('layouts.master')


@section('content')
    <section class="container">
        <div class="container-fluid">
            <br>

            @include('alert.alerts')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Order (Planned Data)</h4>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('orders.index') }}"> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Planned Order</h3>
                                </div>
                                <div class="card-body">
                                    {!! Form::model($order, ['method' => 'POST', 'route' => ['orders.latest.update', $order->id]]) !!}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="order_no"><strong>ORDER NO</strong></label>
                                                {!! Form::number('order_no', null, ['class' => 'form-control', 'id' => 'order_no', 'readonly' => true]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="buyer"><strong>BUYER</strong></label>
                                                <select name="buyer" id="buyer" class="form-control" disabled>
                                                    <option value="">Select Buyer</option>
                                                    @foreach ($buyers as $buyer)
                                                        <option @if ($buyer->id == $order->buyer_id) selected @endif value="{{ $buyer->id }}">
                                                            {{ $buyer->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_po_purch_recvd_d"><strong>Product purchase Received Date
                                                        (A)</strong></label>
                                                {!! Form::date('pl_po_purch_recvd_d', $order->pl_po_purch_recvd_d, ['class' => 'form-control', 'id' => 'pl_po_purch_recvd_d', 'readonly' => true]) !!}
                                                @error('pl_po_purch_recvd_d')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_shipment_dt"><strong>Shipment Date (A+49)</strong></label>
                                                {!! Form::text('pl_shipment_dt', null, ['class' => 'form-control', 'id' => 'pl_shipment_dt', 'placeholder' => 'Shipment Date', 'readonly' => true]) !!}
                                                @error('pl_shipment_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_quantity"><strong>Quantity</strong></label>
                                                {!! Form::number('pl_quantity', null, ['class' => 'form-control', 'id' => 'pl_quantity', 'readonly' => true]) !!}
                                                @error('pl_quantity')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="style_no"><strong>Style No</strong></label>
                                                {!! Form::number('style_no', null, ['class' => 'form-control', 'id' => 'style_no', 'readonly' => true]) !!}

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_germent_details"><strong>Germent Details</strong></label>
                                                {!! Form::textarea('pl_germent_details', null, ['class' => 'form-control', 'id' => 'pl_germent_details', 'rows' => 2, 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_details"><strong>Fabric Details</strong></label>
                                                {!! Form::textarea('pl_fabric_details', null, ['class' => 'form-control', 'id' => 'pl_fabric_details', 'rows' => 2, 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_yern_details"><strong>Yern Details</strong></label>
                                                {!! Form::textarea('pl_yern_details', null, ['class' => 'form-control', 'id' => 'pl_yern_details', 'rows' => 2, 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_trim_details"><strong>Trim Details</strong></label>
                                                {!! Form::textarea('pl_trim_details', null, ['class' => 'form-control', 'id' => 'pl_trim_details', 'rows' => 2, 'readonly' => true]) !!}
                                                @error('pl_trim_details')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                       

                                       
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_req_delv_dt"><strong>Required Delivery Date
                                                        (A+50)</strong></label>
                                                {!! Form::text('pl_req_delv_dt', null, ['class' => 'form-control', 'id' => 'pl_req_delv_dt', 'readonly' => true]) !!}
                                                @error('pl_req_delv_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_lead_time"><strong>Lead Time (48)</strong></label>
                                                {!! Form::text('pl_lead_time', null, ['class' => 'form-control', 'id' => 'pl_lead_time', 'readonly' => true]) !!}
                                                @error('pl_lead_time')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_yern_recei_s_dt"><strong>Yearn Receipt Start Date
                                                        (A+10)</strong></label>
                                                {!! Form::text('pl_yern_recei_s_dt', null, ['class' => 'form-control', 'id' => 'pl_yern_recei_s_dt', 'readonly' => true]) !!}
                                                @error('pl_yern_recei_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_yern_recei_e_dt"><strong>Yearn Receipt End Date
                                                        (A+15)</strong></label>
                                                {!! Form::text('pl_yern_recei_e_dt', null, ['class' => 'form-control', 'id' => 'pl_yern_recei_e_dt', 'readonly' => true]) !!}
                                                @error('pl_yern_recei_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_qlt_sub_dt"><strong>Fabric Quality Subbmission Date
                                                        (A+10)</strong></label>
                                                {!! Form::text('pl_fabric_qlt_sub_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_sub_dt', 'placeholder' => 'Fabric Quality Submission Date', 'readonly' => true]) !!}
                                                @error('pl_fabric_qlt_sub_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_qlt_app_dt"><strong>Fabric Quality Approval Submission
                                                        Date (A+17)</strong></label>
                                                {!! Form::text('pl_fabric_qlt_app_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_app_dt', 'placeholder' => 'Fabric Quality Approval Submission Date', 'readonly' => true]) !!}
                                                @error('pl_fabric_qlt_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_compo_tst_sub"><strong>Fabric Composition Test
                                                        Submission (A+8)</strong></label>
                                                {!! Form::text('pl_fabric_compo_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_fabric_compo_tst_sub', 'placeholder' => 'Fabric Composition Test Submission', 'readonly' => true]) !!}
                                                @error('pl_fabric_compo_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_compo_tst_app"><strong>Fabric Composition Test
                                                        Approval
                                                        (A+15)</strong></label>
                                                {!! Form::text('pl_fabric_compo_tst_app', null, ['class' => 'form-control', 'id' => 'pl_fabric_compo_tst_app', 'placeholder' => 'Fabric Composition Test Approval', 'readonly' => true]) !!}
                                                @error('pl_fabric_compo_tst_app')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_qlt_tst_sub"><strong>Fabric Quality Test Submission
                                                        (A+8)</strong></label>
                                                {!! Form::text('pl_fabric_qlt_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_tst_sub', 'placeholder' => 'Fabric Quality Test Submission', 'readonly' => true]) !!}
                                                @error('pl_fabric_qlt_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_qlt_tst_app_dt"><strong>Fabric Quality Test Approval
                                                        Date (A+17)</strong></label>
                                                {!! Form::text('pl_fabric_qlt_tst_app_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_tst_app_dt', 'placeholder' => 'Fabric Subbmission Date', 'readonly' => true]) !!}
                                                @error('pl_fabric_qlt_tst_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sss_samp_sub_dt"><strong>SSS Sample Submission Date
                                                        (A+13)</strong></label>
                                                {!! Form::text('pl_sss_samp_sub_dt', null, ['class' => 'form-control', 'id' => 'pl_sss_samp_sub_dt', 'placeholder' => 'SSS Sample Submission Date', 'readonly' => true]) !!}
                                                @error('pl_sss_samp_sub_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sss_app_dt"><strong>SSS Approval Date (A+20)</strong></label>
                                                {!! Form::text('pl_sss_app_dt', null, ['class' => 'form-control', 'id' => 'pl_sss_app_dt', 'placeholder' => 'SSS Approval Date', 'readonly' => true]) !!}
                                                @error('pl_sss_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_knitting_s_dt"><strong>Knitting Start Date
                                                        (A+14)</strong></label>
                                                {!! Form::text('pl_knitting_s_dt', null, ['class' => 'form-control', 'id' => 'pl_knitting_s_dt', 'placeholder' => 'Knitting Start Date', 'readonly' => true]) !!}
                                                @error('pl_knitting_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_knitting_e_dt"><strong>Knitting End Date
                                                        (A+28)</strong></label>
                                                {!! Form::text('pl_knitting_e_dt', null, ['class' => 'form-control', 'id' => 'pl_knitting_e_dt', 'placeholder' => 'Knitting End Date', 'readonly' => true]) !!}
                                                @error('pl_knitting_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_dyeing_s_dt"><strong>Dyeing Start Date
                                                        (A+18)</strong></label>
                                                {!! Form::text('pl_dyeing_s_dt', null, ['class' => 'form-control', 'id' => 'pl_dyeing_s_dt', 'placeholder' => 'Dyeing Start Date', 'readonly' => true]) !!}
                                                @error('pl_dyeing_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_dyeing_e_dt"><strong>Dyeing End Date (A+32)</strong></label>
                                                {!! Form::text('pl_dyeing_e_dt', null, ['class' => 'form-control', 'id' => 'pl_dyeing_e_dt', 'placeholder' => 'Dyeing End Date', 'readonly' => true]) !!}
                                                @error('pl_dyeing_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_acce_tst_sub"><strong>Sewing Accessories Test
                                                        Subbmission (A+13)</strong></label>
                                                {!! Form::text('pl_sewing_acce_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_sewing_acce_tst_sub', 'placeholder' => 'Sewing Accessories Test Subbmission', 'readonly' => true]) !!}
                                                @error('pl_sewing_acce_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_acce_inhouse_dt"><strong>Sewing Accessories Inhouse
                                                        Date (A+20)</strong></label>
                                                {!! Form::text('pl_sewing_acce_inhouse_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_acce_inhouse_dt', 'placeholder' => 'Sewing Accessories Inhouse Date', 'readonly' => true]) !!}
                                                @error('pl_sewing_acce_inhouse_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_packing_acce_tst_sub"><strong>Packing Accessories Test
                                                        Submission (A+15)</strong></label>
                                                {!! Form::text('pl_packing_acce_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_packing_acce_tst_sub', 'placeholder' => 'Packing Accessories Test Submission', 'readonly' => true]) !!}
                                                @error('pl_packing_acce_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_packing_acce_inhouse_dt"><strong>Packing Accessories Inhouse
                                                        Date (A+30)</strong></label>
                                                {!! Form::text('pl_packing_acce_inhouse_dt', null, ['class' => 'form-control', 'id' => 'pl_packing_acce_inhouse_dt', 'placeholder' => 'Packing Accessories Inhouse Date', 'readonly' => true]) !!}
                                                @error('pl_packing_acce_inhouse_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_cutting_s_dt"><strong>Cutting Start Date
                                                        (A+25)</strong></label>
                                                {!! Form::text('pl_cutting_s_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_s_dt', 'placeholder' => 'Cutting Start Date', 'readonly' => true]) !!}
                                                @error('pl_cutting_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_cutting_e_dt"><strong>Cutting End Date
                                                        (A+40)</strong></label>
                                                {!! Form::text('pl_cutting_e_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_e_dt', 'placeholder' => 'Cutting End Date', 'readonly' => true]) !!}
                                                @error('pl_cutting_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_print_emb_s_dt"><strong>Print/EMB Start Date
                                                        (A+26)</strong></label>
                                                {!! Form::text('pl_print_emb_s_dt', null, ['class' => 'form-control', 'id' => 'pl_print_emb_s_dt', 'placeholder' => 'Print/EMB Start Date', 'readonly' => true]) !!}
                                                @error('pl_print_emb_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_print_emb_e_dt"><strong>Print/EMB End Date
                                                        (A+42)</strong></label>
                                                {!! Form::text('pl_print_emb_e_dt', null, ['class' => 'form-control', 'id' => 'pl_print_emb_e_dt', 'placeholder' => 'Print/EMB End Date', 'readonly' => true]) !!}
                                                @error('pl_print_emb_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_s_dt"><strong>Sewing Start Date
                                                        (A+28)</strong></label>
                                                {!! Form::text('pl_sewing_s_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_s_dt', 'placeholder' => 'Sewing Start Date', 'readonly' => true]) !!}
                                                @error('pl_sewing_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_e_dt"><strong>Sewing End Date (A+44)</strong></label>
                                                {!! Form::text('pl_sewing_e_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_e_dt', 'placeholder' => 'Sewing End Date', 'readonly' => true]) !!}
                                                @error('pl_sewing_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_finish_s_dt"><strong>Finishing Start Date
                                                        (A+29)</strong></label>
                                                {!! Form::text('pl_finish_s_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_s_dt', 'placeholder' => 'Finishing Start Date', 'readonly' => true]) !!}
                                                @error('pl_finish_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_finish_e_dt"><strong>Finishing End Date
                                                        (A+46)</strong></label>
                                                {!! Form::text('pl_finish_e_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_e_dt', 'placeholder' => 'Finishing End Date', 'readonly' => true]) !!}
                                                @error('pl_finish_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_midline_inspec_dt"><strong>Mid Line Inspaction Date
                                                        (A+34)</strong></label>
                                                {!! Form::text('pl_midline_inspec_dt', null, ['class' => 'form-control', 'id' => 'pl_midline_inspec_dt', 'placeholder' => 'Mid Line Inspaction Date', 'readonly' => true]) !!}
                                                @error('pl_midline_inspec_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_final_inspec_dt"><strong>Final Inspaction Date
                                                        (A+48)</strong></label>
                                                {!! Form::text('pl_final_inspec_dt', null, ['class' => 'form-control', 'id' => 'pl_final_inspec_dt', 'placeholder' => 'Final Inspaction Date', 'readonly' => true]) !!}
                                                @error('pl_final_inspec_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        {{-- Next Instruction Start --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_picture"><strong>Picture</strong></label><br>
                                                <img src="{{ asset('storage/app/public/orders/planned/' . $order->pl_picture) }}"
                                                    alt="Not Showing">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_germents_smv"><strong>Garment SMV</strong></label>
                                                {!! Form::text('pl_germents_smv', null, ['class' => 'form-control', 'id' => 'pl_germents_smv', 'placeholder' => 'Garments SMV', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_consumtion"><strong>Fabric Consumption
                                                        Kg/dzn</strong></label>
                                                <select disabled name="pl_fabric_consumtion" id="pl_fabric_consumtion"
                                                    class="form-control">
                                                    <option value="" selected>Select Fabric Consumtion</option>
                                                    <option @if ($order->pl_fabric_consumtion == 'kg') selected @endif value="kg">KG</option>
                                                    <option @if ($order->pl_fabric_consumtion == 'dzn') selected @endif value="dzn">Dogne</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_color_name"><strong> Color Name</strong></label>
                                                {!! Form::text('pl_color_name', null, ['class' => 'form-control', 'id' => 'pl_color_name', 'placeholder' => 'Color Name', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_color_wise_qty"><strong> Colour wise
                                                        Quantity</strong></label>
                                                {!! Form::number('pl_color_wise_qty', null, ['class' => 'form-control', 'id' => 'pl_color_wise_qty', 'placeholder' => 'Colour wise  Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_print_name"><strong> Print name</strong></label>
                                                {!! Form::text('pl_print_name', null, ['class' => 'form-control', 'id' => 'pl_print_name', 'placeholder' => ' Print name', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_acc_dets"><strong>Sewing Acc Details</strong></label>
                                                {!! Form::text('pl_sewing_acc_dets', null, ['class' => 'form-control', 'id' => 'pl_sewing_acc_dets', 'placeholder' => 'Sewing Acc Details', 'readonly' => true]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_packing_acc_dets"><strong>Packing Acc
                                                        Details</strong></label>
                                                {!! Form::text('pl_packing_acc_dets', null, ['class' => 'form-control', 'id' => 'pl_packing_acc_dets', 'placeholder' => 'Packing Acc  Details', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_buld_fab_qlt_app_dt"><strong>BulkFabric Quality Approval
                                                        date</strong></label>
                                                {!! Form::date('pl_buld_fab_qlt_app_dt', null, ['class' => 'form-control', 'id' => 'pl_buld_fab_qlt_app_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_lab_dip_app_dt"><strong>Lab dip Approval
                                                        Date</strong></label>
                                                {!! Form::date('pl_lab_dip_app_dt', null, ['class' => 'form-control', 'id' => 'pl_lab_dip_app_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_print_app_dt"><strong>Garment Approval Date</strong></label>
                                                {!! Form::date('pl_print_app_dt', null, ['class' => 'form-control', 'id' => 'pl_print_app_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_pp_app_dt"><strong>PP Approval Date</strong></label>
                                                {!! Form::date('pl_pp_app_dt', null, ['class' => 'form-control', 'id' => 'pl_pp_app_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_size_set_app_dt"><strong>Size set Approval
                                                        Date</strong></label>
                                                {!! Form::date('pl_size_set_app_dt', null, ['class' => 'form-control', 'id' => 'pl_size_set_app_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_yarn_rf_no"><strong>Yarn RF No</strong></label>
                                                {!! Form::text('pl_yarn_rf_no', null, ['class' => 'form-control', 'id' => 'pl_yarn_rf_no', 'placeholder' => 'Yarn RF No', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_yarn_qty"><strong>Yarn Quantity</strong></label>
                                                {!! Form::number('pl_yarn_qty', null, ['class' => 'form-control', 'id' => 'pl_yarn_qty', 'placeholder' => 'Yarn Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_qty"><strong>Fabric Quantity</strong></label>
                                                {!! Form::number('pl_fabric_qty', null, ['class' => 'form-control', 'id' => 'pl_fabric_qty', 'placeholder' => 'Fabric Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_ready_dt"><strong>Fabric Ready date</strong></label>
                                                {!! Form::date('pl_fabric_ready_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_ready_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_cutting_dt"><strong>Cutting date</strong></label>
                                                {!! Form::date('pl_cutting_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_no_of_line"><strong>No. of Lines</strong></label>
                                                {!! Form::text('pl_no_of_line', null, ['class' => 'form-control', 'id' => 'pl_no_of_line', 'placeholder' => 'No. of Lines', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_prod_line"><strong>Sewing Prod Line</strong></label>
                                                {!! Form::text('pl_sewing_prod_line', null, ['class' => 'form-control', 'id' => 'pl_sewing_prod_line', 'placeholder' => 'Sewing Prod Line', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_prod_day"><strong>Sewing prod day</strong></label>
                                                {!! Form::date('pl_sewing_prod_day', null, ['class' => 'form-control', 'id' => 'pl_sewing_prod_day', 'placeholder' => 'Sewing prod day', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_compl_dt"><strong>Sewing Completion
                                                        Date</strong></label>
                                                {!! Form::date('pl_sewing_compl_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_compl_dt', 'placeholder' => 'Sewing Completion  Date', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_finish_compl_dt"><strong>Finishing Completion
                                                        Date</strong></label>
                                                {!! Form::date('pl_finish_compl_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_compl_dt', 'placeholder' => 'Finishing  Completion Date', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_fabric_rejec"><strong>Fabric rejections</strong></label>
                                                {!! Form::text('pl_fabric_rejec', null, ['class' => 'form-control', 'id' => 'pl_fabric_rejec', 'placeholder' => 'Fabric rejections', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_cutting_rejec"><strong>Cutting Rejections</strong></label>
                                                {!! Form::text('pl_cutting_rejec', null, ['class' => 'form-control', 'id' => 'pl_cutting_rejec', 'placeholder' => 'Cutting Rejections', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_sewing_rejec"><strong>Sewing Rejections</strong></label>
                                                {!! Form::text('pl_sewing_rejec', null, ['class' => 'form-control', 'id' => 'pl_sewing_rejec', 'placeholder' => 'Sewing Rejections', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_finish_rejec"><strong>Finishing Rejections</strong></label>
                                                {!! Form::text('pl_finish_rejec', null, ['class' => 'form-control', 'id' => 'pl_finish_rejec', 'placeholder' => 'Finishing Rejections', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_dhu"><strong>DHU %</strong></label>
                                                {!! Form::text('pl_dhu', null, ['class' => 'form-control', 'id' => 'pl_dhu', 'placeholder' => 'DHU %', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_final_pack_qty"><strong>Final Packed
                                                        Quantity</strong></label>
                                                {!! Form::number('pl_final_pack_qty', null, ['class' => 'form-control', 'id' => 'pl_final_pack_qty', 'placeholder' => 'Final Packed Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_excess_short_qty"><strong>Excess / Short
                                                        Quantity</strong></label>
                                                {!! Form::number('pl_excess_short_qty', null, ['class' => 'form-control', 'id' => 'pl_excess_short_qty', 'placeholder' => 'Excess / Short Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_final_inspec_dt"><strong>Final Inspection Date
                                                    </strong></label>
                                                {!! Form::date('pl_final_inspec_dt', $order->al_final_inspec_dt, ['class' => 'form-control', 'id' => 'pl_final_inspec_dt', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_final_shipp_qty"><strong>Final Shipped
                                                        Quantity</strong></label>
                                                {!! Form::number('pl_final_shipp_qty', null, ['class' => 'form-control', 'id' => 'pl_final_shipp_qty', 'placeholder' => 'Final Shipped Quantity', 'readonly' => true]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_value"><strong>Value</strong></label>
                                                {!! Form::number('pl_value', null, ['class' => 'form-control', 'id' => 'pl_value', 'placeholder' => 'Value', 'readonly' => true]) !!}
                                            </div>
                                        </div>
                                        {{-- Next Instruction END --}}


                                        {{-- <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="btn btn-primary" type="submit">
                                            </div>
                                        </div> --}}

                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Actual Order</h3>
                                </div>
                                <div class="card-body">
                                    {!! Form::model($order, ['method' => 'PATCH', 'route' => ['orders.update', $order->id]]) !!}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="order_no"><strong>ORDER NO</strong></label>
                                                {!! Form::number('order_no', null, ['class' => 'form-control', 'id' => 'order_no', 'readonly' => true]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="buyer"><strong>BUYER</strong></label>
                                                <select name="buyer" id="buyer" class="form-control" disabled>
                                                    <option value="">Select Buyer</option>
                                                    @foreach ($buyers as $buyer)
                                                        <option @if ($buyer->id == $order->buyer_id) selected @endif value="{{ $buyer->id }}">
                                                            {{ $buyer->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_po_purch_recvd_d"><strong>Product purchase Received Date
                                                        (A)</strong></label>
                                                {!! Form::date('pl_po_purch_recvd_d', $order->pl_po_purch_recvd_d, ['class' => 'form-control', 'id' => 'pl_po_purch_recvd_d', 'readonly' => true]) !!}
                                                @error('pl_po_purch_recvd_d')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_shipment_dt"><strong>Shipment Date (A+49)</strong></label>
                                                {!! Form::text('pl_shipment_dt', null, ['class' => 'form-control', 'id' => 'pl_shipment_dt', 'placeholder' => 'Shipment Date', 'readonly' => true]) !!}
                                                @error('pl_shipment_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_quantity"><strong>Quantity</strong></label>
                                                {!! Form::number('pl_quantity', null, ['class' => 'form-control', 'id' => 'pl_quantity', 'readonly' => true]) !!}
                                                @error('pl_quantity')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="style_no"><strong>Style No</strong></label>
                                                {!! Form::number('style_no', null, ['class' => 'form-control', 'id' => 'style_no', 'readonly' => true]) !!}

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pl_germent_details"><strong>Germent Details</strong></label>
                                                {!! Form::textarea('pl_germent_details', null, ['class' => 'form-control', 'id' => 'pl_germent_details', 'rows' => 2, 'readonly' => true]) !!}
                                            </div>
                                        </div>


{{--                                         
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_details"><strong>Fabric Details</strong></label>
                                                {!! Form::textarea('al_fabric_details', null, ['class' => 'form-control', 'id' => 'al_fabric_details', 'rows' => 2]) !!}
                                                @error('al_fabric_details')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_yern_details"><strong>Yern Details</strong></label>
                                                {!! Form::textarea('al_yern_details', null, ['class' => 'form-control', 'id' => 'al_yern_details', 'rows' => 2]) !!}
                                                @error('al_yern_details')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_trim_details"><strong>Trim Details</strong></label>
                                                {!! Form::textarea('al_trim_details', null, ['class' => 'form-control', 'id' => 'al_trim_details', 'rows' => 2]) !!}
                                                @error('al_trim_details')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_quantity"><strong>Quantity</strong></label>
                                                {!! Form::number('al_quantity', null, ['class' => 'form-control', 'id' => 'al_quantity']) !!}
                                                @error('al_quantity')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_po_purch_recvd_d"><strong>Product purchase Received Date
                                                        (A)</strong></label>
                                                {!! Form::date('al_po_purch_recvd_d', $order->al_po_purch_recvd_d, ['class' => 'form-control', 'id' => 'al_po_purch_recvd_d']) !!}
                                                @error('al_po_purch_recvd_d')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_req_delv_dt"><strong>Required Delivery Date
                                                        (A+50)</strong></label>
                                                {!! Form::date('al_req_delv_dt', $order->al_req_delv_dt, ['class' => 'form-control', 'id' => 'al_req_delv_dt']) !!}
                                                @error('al_req_delv_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_lead_time"><strong>Lead Time (48)</strong></label>
                                                {!! Form::date('al_lead_time', $order->al_lead_time, ['class' => 'form-control', 'id' => 'al_lead_time']) !!}
                                                @error('al_lead_time')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_yern_recei_s_dt"><strong>Yearn Receipt Start Date
                                                        (A+10)</strong></label>
                                                {!! Form::date('al_yern_recei_s_dt', $order->al_yern_recei_s_dt, ['class' => 'form-control', 'id' => 'al_yern_recei_s_dt']) !!}
                                                @error('al_yern_recei_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_yern_recei_e_dt"><strong>Yearn Receipt End Date
                                                        (A+15)</strong></label>
                                                {!! Form::date('al_yern_recei_e_dt', $order->al_yern_recei_e_dt, ['class' => 'form-control', 'id' => 'al_yern_recei_e_dt']) !!}
                                                @error('al_yern_recei_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_qlt_sub_dt"><strong>Fabric Quality Subbmission Date
                                                        (A+10)</strong></label>
                                                {!! Form::date('al_fabric_qlt_sub_dt', $order->al_fabric_qlt_sub_dt, ['class' => 'form-control', 'id' => 'al_fabric_qlt_sub_dt', 'alaceholder' => 'Fabric Quality Submission Date']) !!}
                                                @error('al_fabric_qlt_sub_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_qlt_app_dt"><strong>Fabric Quality Approval Submission
                                                        Date (A+17)</strong></label>
                                                {!! Form::date('al_fabric_qlt_app_dt', $order->al_fabric_qlt_app_dt, ['class' => 'form-control', 'id' => 'al_fabric_qlt_app_dt', 'alaceholder' => 'Fabric Quality Approval Submission Date']) !!}
                                                @error('al_fabric_qlt_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_compo_tst_sub"><strong>Fabric Composition Test
                                                        Submission (A+8)</strong></label>
                                                {!! Form::date('al_fabric_compo_tst_sub', $order->al_fabric_compo_tst_sub, ['class' => 'form-control', 'id' => 'al_fabric_compo_tst_sub', 'alaceholder' => 'Fabric Composition Test Submission']) !!}
                                                @error('al_fabric_compo_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_compo_tst_app"><strong>Fabric Composition Test
                                                        Approval
                                                        (A+15)</strong></label>
                                                {!! Form::date('al_fabric_compo_tst_app', $order->al_fabric_compo_tst_app, ['class' => 'form-control', 'id' => 'al_fabric_compo_tst_app', 'alaceholder' => 'Fabric Composition Test Approval']) !!}
                                                @error('al_fabric_compo_tst_app')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_qlt_tst_sub"><strong>Fabric Quality Test Submission
                                                        (A+8)</strong></label>
                                                {!! Form::date('al_fabric_qlt_tst_sub', $order->al_fabric_qlt_tst_sub, ['class' => 'form-control', 'id' => 'al_fabric_qlt_tst_sub', 'alaceholder' => 'Fabric Quality Test Submission']) !!}
                                                @error('al_fabric_qlt_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_qlt_tst_app_dt"><strong>Fabric Quality Test Approval
                                                        Date (A+17)</strong></label>
                                                {!! Form::date('al_fabric_qlt_tst_app_dt', $order->al_fabric_qlt_tst_app_dt, ['class' => 'form-control', 'id' => 'al_fabric_qlt_tst_app_dt', 'alaceholder' => 'Fabric Subbmission Date']) !!}
                                                @error('al_fabric_qlt_tst_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sss_samp_sub_dt"><strong>SSS Samale Submission Date
                                                        (A+13)</strong></label>
                                                {!! Form::date('al_sss_samp_sub_dt', $order->al_sss_samp_sub_dt, ['class' => 'form-control', 'id' => 'al_sss_samp_sub_dt', 'alaceholder' => 'SSS Samale Submission Date']) !!}
                                                @error('al_sss_samp_sub_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sss_app_dt"><strong>SSS Approval Date (A+20)</strong></label>
                                                {!! Form::date('al_sss_app_dt', $order->al_sss_app_dt, ['class' => 'form-control', 'id' => 'al_sss_app_dt', 'alaceholder' => 'SSS Approval Date']) !!}
                                                @error('al_sss_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_knitting_s_dt"><strong>Knitting Start Date
                                                        (A+14)</strong></label>
                                                {!! Form::date('al_knitting_s_dt', $order->al_knitting_s_dt, ['class' => 'form-control', 'id' => 'al_knitting_s_dt', 'alaceholder' => 'Knitting Start Date']) !!}
                                                @error('al_knitting_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_knitting_e_dt"><strong>Knitting End Date
                                                        (A+28)</strong></label>
                                                {!! Form::date('al_knitting_e_dt', $order->al_knitting_e_dt, ['class' => 'form-control', 'id' => 'al_knitting_e_dt', 'alaceholder' => 'Knitting End Date']) !!}
                                                @error('al_knitting_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_dyeing_s_dt"><strong>Dyeing Start Date
                                                        (A+18)</strong></label>
                                                {!! Form::date('al_dyeing_s_dt', $order->al_dyeing_s_dt, ['class' => 'form-control', 'id' => 'al_dyeing_s_dt', 'alaceholder' => 'Dyeing Start Date']) !!}
                                                @error('al_dyeing_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_dyeing_e_dt"><strong>Dyeing End Date (A+32)</strong></label>
                                                {!! Form::date('al_dyeing_e_dt', $order->al_dyeing_e_dt, ['class' => 'form-control', 'id' => 'al_dyeing_e_dt', 'alaceholder' => 'Dyeing End Date']) !!}
                                                @error('al_dyeing_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_acce_tst_sub"><strong>Sewing Accessories Test
                                                        Subbmission (A+13)</strong></label>
                                                {!! Form::date('al_sewing_acce_tst_sub', $order->al_sewing_acce_tst_sub, ['class' => 'form-control', 'id' => 'al_sewing_acce_tst_sub', 'alaceholder' => 'Sewing Accessories Test Subbmission']) !!}
                                                @error('al_sewing_acce_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_acce_inhouse_dt"><strong>Sewing Accessories Inhouse
                                                        Date (A+20)</strong></label>
                                                {!! Form::date('al_sewing_acce_inhouse_dt', $order->al_sewing_acce_inhouse_dt, ['class' => 'form-control', 'id' => 'al_sewing_acce_inhouse_dt', 'alaceholder' => 'Sewing Accessories Inhouse Date']) !!}
                                                @error('al_sewing_acce_inhouse_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_packing_acce_tst_sub"><strong>Packing Accessories Test
                                                        Submission (A+15)</strong></label>
                                                {!! Form::date('al_packing_acce_tst_sub', $order->al_packing_acce_tst_sub, ['class' => 'form-control', 'id' => 'al_packing_acce_tst_sub', 'alaceholder' => 'Packing Accessories Test Submission']) !!}
                                                @error('al_packing_acce_tst_sub')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_packing_acce_inhouse_dt"><strong>Packing Accessories Inhouse
                                                        Date (A+30)</strong></label>
                                                {!! Form::date('al_packing_acce_inhouse_dt', $order->al_packing_acce_inhouse_dt, ['class' => 'form-control', 'id' => 'al_packing_acce_inhouse_dt', 'alaceholder' => 'Packing Accessories Inhouse Date']) !!}
                                                @error('al_packing_acce_inhouse_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_cutting_s_dt"><strong>Cutting Start Date
                                                        (A+25)</strong></label>
                                                {!! Form::date('al_cutting_s_dt', $order->al_cutting_s_dt, ['class' => 'form-control', 'id' => 'al_cutting_s_dt', 'alaceholder' => 'Cutting Start Date']) !!}
                                                @error('al_cutting_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_cutting_e_dt"><strong>Cutting End Date
                                                        (A+40)</strong></label>
                                                {!! Form::date('al_cutting_e_dt', $order->al_cutting_e_dt, ['class' => 'form-control', 'id' => 'al_cutting_e_dt', 'alaceholder' => 'Cutting End Date']) !!}
                                                @error('al_cutting_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_print_emb_s_dt"><strong>Print/EMB Start Date
                                                        (A+26)</strong></label>
                                                {!! Form::date('al_print_emb_s_dt', $order->al_print_emb_s_dt, ['class' => 'form-control', 'id' => 'al_print_emb_s_dt', 'alaceholder' => 'Print/EMB Start Date']) !!}
                                                @error('al_print_emb_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_print_emb_e_dt"><strong>Print/EMB End Date
                                                        (A+42)</strong></label>
                                                {!! Form::date('al_print_emb_e_dt', $order->al_print_emb_e_dt, ['class' => 'form-control', 'id' => 'al_print_emb_e_dt', 'alaceholder' => 'Print/EMB End Date']) !!}
                                                @error('al_print_emb_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_s_dt"><strong>Sewing Start Date
                                                        (A+28)</strong></label>
                                                {!! Form::date('al_sewing_s_dt', $order->al_sewing_s_dt, ['class' => 'form-control', 'id' => 'al_sewing_s_dt', 'alaceholder' => 'Sewing Start Date']) !!}
                                                @error('al_sewing_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_e_dt"><strong>Sewing End Date (A+44)</strong></label>
                                                {!! Form::date('al_sewing_e_dt', $order->al_sewing_e_dt, ['class' => 'form-control', 'id' => 'al_sewing_e_dt', 'alaceholder' => 'Sewing End Date']) !!}
                                                @error('al_sewing_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_finish_s_dt"><strong>Finishing Start Date
                                                        (A+29)</strong></label>
                                                {!! Form::date('al_finish_s_dt', $order->al_finish_s_dt, ['class' => 'form-control', 'id' => 'al_finish_s_dt', 'alaceholder' => 'Finishing Start Date']) !!}
                                                @error('al_finish_s_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_finish_e_dt"><strong>Finishing End Date
                                                        (A+46)</strong></label>
                                                {!! Form::date('al_finish_e_dt', $order->al_finish_e_dt, ['class' => 'form-control', 'id' => 'al_finish_e_dt', 'alaceholder' => 'Finishing End Date']) !!}
                                                @error('al_finish_e_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_midline_inspec_dt"><strong>Mid Line Inspaction Date
                                                        (A+34)</strong></label>
                                                {!! Form::date('al_midline_inspec_dt', $order->al_midline_inspec_dt, ['class' => 'form-control', 'id' => 'al_midline_inspec_dt', 'alaceholder' => 'Mid Line Inspaction Date']) !!}
                                                @error('al_midline_inspec_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_final_inspec_dt"><strong>Final Inspaction Date
                                                        (A+48)</strong></label>
                                                {!! Form::date('al_final_inspec_dt', $order->al_final_inspec_dt, ['class' => 'form-control', 'id' => 'al_final_inspec_dt', 'alaceholder' => 'Final Inspaction Date']) !!}
                                                @error('al_final_inspec_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_shipment_dt"><strong>Shipment Date (A+49)</strong></label>
                                                {!! Form::date('al_shipment_dt', $order->al_shipment_dt, ['class' => 'form-control', 'id' => 'al_shipment_dt', 'alaceholder' => 'Shipment Date']) !!}
                                                @error('al_shipment_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        
                                        {{-- Next Instruction Start --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_picture"><strong>Picture</strong></label><br>
                                                {!! Form::file('al_picture', null, ['class' => 'form-control', 'id' => 'al_picture', 'alaceholder' => 'Select a Photo']) !!}
                                                @error('al_picture')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_germents_smv"><strong>Garment SMV</strong></label>
                                                {!! Form::text('al_germents_smv', null, ['class' => 'form-control', 'id' => 'al_germents_smv', 'alaceholder' => 'Garments SMV']) !!}
                                                @error('al_germents_smv')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_consumtion"><strong>Fabric Consumption
                                                        Kg/dzn</strong></label>
                                                <select name="al_fabric_consumtion" id="al_fabric_consumtion"
                                                    class="form-control">
                                                    <option value="" selected>Select Fabric Consumtion</option>
                                                    <option value="kg">KG</option>
                                                    <option value="dzn">Dogne</option>
                                                </select>
                                                @error('al_fabric_consumtion')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_color_name"><strong> Color Name</strong></label>
                                                {!! Form::text('al_color_name', null, ['class' => 'form-control', 'id' => 'al_color_name', 'alaceholder' => 'Color Name']) !!}
                                                @error('al_color_name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_color_wise_qty"><strong> Colour wise
                                                        Quantity</strong></label>
                                                {!! Form::number('al_color_wise_qty', null, ['class' => 'form-control', 'id' => 'al_color_wise_qty', 'alaceholder' => 'Colour wise  Quantity']) !!}
                                                @error('al_color_wise_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_print_name"><strong> Print name</strong></label>
                                                {!! Form::text('al_print_name', null, ['class' => 'form-control', 'id' => 'al_print_name', 'alaceholder' => ' Print name']) !!}
                                                @error('al_print_name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_acc_dets"><strong>Sewing Acc Details</strong></label>
                                                {!! Form::text('al_sewing_acc_dets', null, ['class' => 'form-control', 'id' => 'al_sewing_acc_dets', 'alaceholder' => 'Sewing Acc Details']) !!}
                                                @error('al_sewing_acc_dets')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_packing_acc_dets"><strong>Packing Acc
                                                        Details</strong></label>
                                                {!! Form::text('al_packing_acc_dets', null, ['class' => 'form-control', 'id' => 'al_packing_acc_dets', 'alaceholder' => 'Packing Acc  Details']) !!}
                                                @error('al_packing_acc_dets')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_buld_fab_qlt_app_dt"><strong>BulkFabric Quality Approval
                                                        date</strong></label>
                                                {!! Form::date('al_buld_fab_qlt_app_dt', null, ['class' => 'form-control', 'id' => 'al_buld_fab_qlt_app_dt']) !!}
                                                @error('al_buld_fab_qlt_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_lab_dip_app_dt"><strong>Lab dip Approval
                                                        Date</strong></label>
                                                {!! Form::date('al_lab_dip_app_dt', null, ['class' => 'form-control', 'id' => 'al_lab_dip_app_dt']) !!}
                                                @error('al_lab_dip_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_print_app_dt"><strong>Garment Approval Date</strong></label>
                                                {!! Form::date('al_print_app_dt', null, ['class' => 'form-control', 'id' => 'al_print_app_dt']) !!}
                                                @error('al_print_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_pp_app_dt"><strong>PP Approval Date</strong></label>
                                                {!! Form::date('al_pp_app_dt', null, ['class' => 'form-control', 'id' => 'al_pp_app_dt']) !!}
                                                @error('al_pp_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_size_set_app_dt"><strong>Size set Approval
                                                        Date</strong></label>
                                                {!! Form::date('al_size_set_app_dt', null, ['class' => 'form-control', 'id' => 'al_size_set_app_dt']) !!}
                                                @error('al_size_set_app_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_yarn_rf_no"><strong>Yarn RF No</strong></label>
                                                {!! Form::text('al_yarn_rf_no', null, ['class' => 'form-control', 'id' => 'al_yarn_rf_no', 'alaceholder' => 'Yarn RF No']) !!}
                                                @error('al_yarn_rf_no')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_yarn_qty"><strong>Yarn Quantity</strong></label>
                                                {!! Form::number('al_yarn_qty', null, ['class' => 'form-control', 'id' => 'al_yarn_qty', 'alaceholder' => 'Yarn Quantity']) !!}
                                                @error('al_yarn_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_qty"><strong>Fabric Quantity</strong></label>
                                                {!! Form::number('al_fabric_qty', null, ['class' => 'form-control', 'id' => 'al_fabric_qty', 'alaceholder' => 'Fabric Quantity']) !!}
                                                @error('al_fabric_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_ready_dt"><strong>Fabric Ready date</strong></label>
                                                {!! Form::date('al_fabric_ready_dt', null, ['class' => 'form-control', 'id' => 'al_fabric_ready_dt']) !!}
                                                @error('al_fabric_ready_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_cutting_dt"><strong>Cutting date</strong></label>
                                                {!! Form::date('al_cutting_dt', null, ['class' => 'form-control', 'id' => 'al_cutting_dt']) !!}
                                                @error('al_cutting_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_no_of_line"><strong>No. of Lines</strong></label>
                                                {!! Form::text('al_no_of_line', null, ['class' => 'form-control', 'id' => 'al_no_of_line', 'alaceholder' => 'No. of Lines']) !!}
                                                @error('al_no_of_line')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_prod_line"><strong>Sewing Prod Line</strong></label>
                                                {!! Form::text('al_sewing_prod_line', null, ['class' => 'form-control', 'id' => 'al_sewing_prod_line', 'alaceholder' => 'Sewing Prod Line']) !!}
                                                @error('al_sewing_prod_line')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_prod_day"><strong>Sewing prod day</strong></label>
                                                {!! Form::date('al_sewing_prod_day', null, ['class' => 'form-control', 'id' => 'al_sewing_prod_day', 'alaceholder' => 'Sewing prod day']) !!}
                                                @error('al_sewing_prod_day')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_comal_dt"><strong>Sewing Comaletion
                                                        Date</strong></label>
                                                {!! Form::date('al_sewing_comal_dt', null, ['class' => 'form-control', 'id' => 'al_sewing_comal_dt', 'alaceholder' => 'Sewing Comaletion  Date']) !!}
                                                @error('al_sewing_comal_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_finish_comal_dt"><strong>Finishing Comaletion
                                                        Date</strong></label>
                                                {!! Form::date('al_finish_comal_dt', null, ['class' => 'form-control', 'id' => 'al_finish_comal_dt', 'alaceholder' => 'Finishing  Comaletion Date']) !!}
                                                @error('al_finish_comal_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_fabric_rejec"><strong>Fabric rejections</strong></label>
                                                {!! Form::text('al_fabric_rejec', null, ['class' => 'form-control', 'id' => 'al_fabric_rejec', 'alaceholder' => 'Fabric rejections']) !!}
                                                @error('al_fabric_rejec')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_cutting_rejec"><strong>Cutting Rejections</strong></label>
                                                {!! Form::text('al_cutting_rejec', null, ['class' => 'form-control', 'id' => 'al_cutting_rejec', 'alaceholder' => 'Cutting Rejections']) !!}
                                                @error('al_cutting_rejec')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_sewing_rejec"><strong>Sewing Rejections</strong></label>
                                                {!! Form::text('al_sewing_rejec', null, ['class' => 'form-control', 'id' => 'al_sewing_rejec', 'alaceholder' => 'Sewing Rejections']) !!}
                                                @error('al_sewing_rejec')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_finish_rejec"><strong>Finishing Rejections</strong></label>
                                                {!! Form::text('al_finish_rejec', null, ['class' => 'form-control', 'id' => 'al_finish_rejec', 'alaceholder' => 'Finishing Rejections']) !!}
                                                @error('al_finish_rejec')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_dhu"><strong>DHU %</strong></label>
                                                {!! Form::text('al_dhu', null, ['class' => 'form-control', 'id' => 'al_dhu', 'alaceholder' => 'DHU %']) !!}
                                                @error('al_dhu')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_final_pack_qty"><strong>Final Packed
                                                        Quantity</strong></label>
                                                {!! Form::number('al_final_pack_qty', null, ['class' => 'form-control', 'id' => 'al_final_pack_qty', 'alaceholder' => 'Final Packed Quantity']) !!}
                                                @error('al_final_pack_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_excess_short_qty"><strong>Excess / Short
                                                        Quantity</strong></label>
                                                {!! Form::number('al_excess_short_qty', null, ['class' => 'form-control', 'id' => 'al_excess_short_qty', 'alaceholder' => 'Excess / Short Quantity']) !!}
                                                @error('al_excess_short_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_final_inspec_dt"><strong>Final Inspection Date
                                                    </strong></label>
                                                {!! Form::date('al_final_inspec_dt', null, ['class' => 'form-control', 'id' => 'al_final_inspec_dt']) !!}
                                                @error('al_final_inspec_dt')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_final_shipp_qty"><strong>Final Shipped
                                                        Quantity</strong></label>
                                                {!! Form::number('al_final_shipp_qty', null, ['class' => 'form-control', 'id' => 'al_final_shipp_qty', 'alaceholder' => 'Final Shipped Quantity']) !!}
                                                @error('al_final_shipp_qty')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="al_value"><strong>Value</strong></label>
                                                {!! Form::number('al_value', $order->al_value, ['class' => 'form-control', 'id' => 'al_value', 'alaceholder' => 'Value']) !!}
                                                @error('al_value')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- Next Instruction END --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask> --}}
                                                <input class="btn btn-primary" type="submit" value="Update">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

@endsection
{{-- @push('js')
<script>
    $(document).ready(function(){
      

    });
</script>
    
@endpush --}}
