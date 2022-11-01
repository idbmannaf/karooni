<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="order_no"><strong>ORDER NO</strong></label>
            {!! Form::text('order_no', $order->order_no, ['class' => 'form-control', 'id' => 'order_no']) !!}
            @error('order_no')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="buyer"><strong>BUYER</strong></label>
            <select name="buyer" id="buyer" class="form-control">
                <option value="">Select Buyer</option>
                @foreach ($buyers as $buyer)
                    <option @if ($buyer->id == $order->buyer_id) selected @endif value="{{ $buyer->id }}">
                        {{ $buyer->name }}</option>
                @endforeach
            </select>
            {{-- {!! Form::select('buyer', $buyers, $order->buyer, ['placeholder' => 'Select Buyer', 'class' => 'form-control', 'id' => 'buyer']) !!} --}}
            @error('buyer')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="style_no"><strong>Style No</strong></label>
            {!! Form::text('style_no', null, ['class' => 'form-control', 'id' => 'style_no']) !!}
            @error('style_no')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_germent_details"><strong>Garment Details</strong></label>
            {!! Form::textarea('pl_germent_details', $order->pl_germent_details, ['class' => 'form-control', 'id' => 'pl_germent_details', 'rows' => 2]) !!}
            @error('germent_details')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_details"><strong>Fabric Details</strong></label>
            {!! Form::textarea('pl_fabric_details', null, ['class' => 'form-control', 'id' => 'pl_fabric_details', 'rows' => 2]) !!}
            @error('pl_fabric_details')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_yern_details"><strong>Yarn Details</strong></label>
            {!! Form::textarea('pl_yern_details', null, ['class' => 'form-control', 'id' => 'pl_yern_details', 'rows' => 2]) !!}
            @error('pl_yern_details')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_trim_details"><strong>Trim Details</strong></label>
            {!! Form::textarea('pl_trim_details', null, ['class' => 'form-control', 'id' => 'pl_trim_details', 'rows' => 2]) !!}
            @error('pl_trim_details')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_quantity"><strong>pl_quantity</strong></label>
            {!! Form::number('pl_quantity', null, ['class' => 'form-control', 'id' => 'pl_quantity']) !!}
            @error('pl_quantity')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="delivery_date_interval"><strong>Delivery Date Interval
                </strong></label>
            {!! Form::number('delivery_date_interval', null, ['class' => 'form-control', 'id' => 'delivery_date_interval', 'min'=>1,'max'=>300,'step'=>1]) !!}
            @error('delivery_date_interval')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_po_purch_recvd_d"><strong>Product purchase Received Date
                    (A)</strong></label>
            {!! Form::date('pl_po_purch_recvd_d', null, ['class' => 'form-control', 'id' => 'pl_po_purch_recvd_d', 'placeholder']) !!}
            @error('pl_po_purch_recvd_d')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>



    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_req_delv_dt"><strong>Required Delivery Date (A+ <span id="po-date"></span>)</strong></label>
            {!! Form::text('pl_req_delv_dt', null, ['class' => 'form-control', 'id' => 'pl_req_delv_dt']) !!}
            @error('pl_req_delv_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_lead_time"><strong>Lead Time (A+ <span class="lead_time"></span>)</strong></label>
            {!! Form::text('pl_lead_time', null, ['class' => 'form-control', 'id' => 'pl_lead_time']) !!}
            @error('pl_lead_time')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_yern_recei_s_dt"><strong>Yarn Receipt Start Date (A+<span class="yern_recei_s_dt"></span>)</strong></label>
            {!! Form::text('pl_yern_recei_s_dt', $order->pl_yern_recei_s_dt, ['class' => 'form-control', 'id' => 'pl_yern_recei_s_dt']) !!}
            @error('pl_yern_recei_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_yern_recei_e_dt"><strong>Yarn Receipt End Date (A+<span class="yern_recei_e_dt"></span>)</strong></label>
            {!! Form::text('pl_yern_recei_e_dt', null, ['class' => 'form-control', 'id' => 'pl_yern_recei_e_dt']) !!}
            @error('pl_yern_recei_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_qlt_sub_dt"><strong>Fabric Quality Subbmission Date
                    (A+<span class="fabric_qlt_sub_dt"></span>)</strong></label>
            {!! Form::text('pl_fabric_qlt_sub_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_sub_dt', 'placeholder' => 'Fabric Quality Submission Date']) !!}
            @error('pl_fabric_qlt_sub_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_qlt_app_dt"><strong>Fabric Quality Approval Submission
                    Date (A+<span class="fabric_qlt_app_dt"></span>)</strong></label>
            {!! Form::text('pl_fabric_qlt_app_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_app_dt', 'placeholder' => 'Fabric Quality Approval Submission Date']) !!}
            @error('pl_fabric_qlt_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_compo_tst_sub"><strong>Fabric Composition Test
                    Submission (A+ <span class="fabric_compo_tst_sub"></span>)</strong></label>
            {!! Form::text('pl_fabric_compo_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_fabric_compo_tst_sub', 'placeholder' => 'Fabric Composition Test Submission']) !!}
            @error('pl_fabric_compo_tst_sub')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_compo_tst_app"><strong>Fabric Composition Test Approval
                    (A+<span class="fabric_compo_tst_app"></span>)</strong></label>
            {!! Form::text('pl_fabric_compo_tst_app', null, ['class' => 'form-control', 'id' => 'pl_fabric_compo_tst_app', 'placeholder' => 'Fabric Composition Test Approval']) !!}
            @error('pl_fabric_compo_tst_app')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_qlt_tst_sub"><strong>Fabric Quality Test Submission
                    (A+<span class="fabric_qlt_tst_sub"></span>)</strong></label>
            {!! Form::text('pl_fabric_qlt_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_tst_sub', 'placeholder' => 'Fabric Quality Test Submission']) !!}
            @error('pl_fabric_qlt_tst_sub')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_qlt_tst_app_dt"><strong>Fabric Quality Test Approval
                    Date (A+<span class="fabric_qlt_tst_app_dt"></span>)</strong></label>
            {!! Form::text('pl_fabric_qlt_tst_app_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_qlt_tst_app_dt', 'placeholder' => 'Fabric Subbmission Date']) !!}
            @error('pl_fabric_qlt_tst_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sss_samp_sub_dt"><strong>SSS Sample Submission Date (A+<span class="sss_samp_sub_d"></span>)</strong></label>
            {!! Form::text('pl_sss_samp_sub_dt', null, ['class' => 'form-control', 'id' => 'pl_sss_samp_sub_dt', 'placeholder' => 'SSS Sample Submission Date']) !!}
            @error('pl_sss_samp_sub_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sss_app_dt"><strong>SSS Approval Date (A+<span class="sss_app_dt"></span>)</strong></label>
            {!! Form::text('pl_sss_app_dt', null, ['class' => 'form-control', 'id' => 'pl_sss_app_dt', 'placeholder' => 'SSS Approval Date']) !!}
            @error('pl_sss_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_knitting_s_dt"><strong>Knitting Start Date (A+<span class="knitting_s_dt"></span>)</strong></label>
            {!! Form::text('pl_knitting_s_dt', null, ['class' => 'form-control', 'id' => 'pl_knitting_s_dt', 'placeholder' => 'Knitting Start Date']) !!}
            @error('pl_knitting_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_knitting_e_dt"><strong>Knitting End Date (A+<span class="knitting_e_dt"></span>)</strong></label>
            {!! Form::text('pl_knitting_e_dt', null, ['class' => 'form-control', 'id' => 'pl_knitting_e_dt', 'placeholder' => 'Knitting End Date']) !!}
            @error('pl_knitting_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_dyeing_s_dt"><strong>Dyeing Start Date (A+<span class="dyeing_s_dt"></span>)</strong></label>
            {!! Form::text('pl_dyeing_s_dt', null, ['class' => 'form-control', 'id' => 'pl_dyeing_s_dt', 'placeholder' => 'Dyeing Start Date']) !!}
            @error('pl_dyeing_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_dyeing_e_dt"><strong>Dyeing End Date (A+<span class="dyeing_e_dt"></span>)</strong></label>
            {!! Form::text('pl_dyeing_e_dt', null, ['class' => 'form-control', 'id' => 'pl_dyeing_e_dt', 'placeholder' => 'Dyeing End Date']) !!}
            @error('pl_dyeing_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_acce_tst_sub"><strong>Sewing Accessories Test
                    Subbmission (A+<span class="sewing_acce_tst_sub"></span>)</strong></label>
            {!! Form::text('pl_sewing_acce_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_sewing_acce_tst_sub', 'placeholder' => 'Sewing Accessories Test Subbmission']) !!}
            @error('pl_sewing_acce_tst_sub')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_acce_inhouse_dt"><strong>Sewing Accessories Inhouse
                    Date (A+<span class="sewing_acce_inhouse_dt"></span>)</strong></label>
            {!! Form::text('pl_sewing_acce_inhouse_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_acce_inhouse_dt', 'placeholder' => 'Sewing Accessories Inhouse Date']) !!}
            @error('pl_sewing_acce_inhouse_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_packing_acce_tst_sub"><strong>Packing Accessories Test
                    Submission (A+<span class="packing_acce_tst_sub"></span>)</strong></label>
            {!! Form::text('pl_packing_acce_tst_sub', null, ['class' => 'form-control', 'id' => 'pl_packing_acce_tst_sub', 'placeholder' => 'Packing Accessories Test Submission']) !!}
            @error('pl_packing_acce_tst_sub')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_packing_acce_inhouse_dt"><strong>Packing Accessories Inhouse
                    Date (A+<span class="packing_acce_inhouse_dt"></span>)</strong></label>
            {!! Form::text('pl_packing_acce_inhouse_dt', null, ['class' => 'form-control', 'id' => 'pl_packing_acce_inhouse_dt', 'placeholder' => 'Packing Accessories Inhouse Date']) !!}
            @error('pl_packing_acce_inhouse_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_cutting_s_dt"><strong>Cutting Start Date (A+<span class="cutting_s_dt"></span>)</strong></label>
            {!! Form::text('pl_cutting_s_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_s_dt', 'placeholder' => 'Cutting Start Date']) !!}
            @error('pl_cutting_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_cutting_e_dt"><strong>Cutting End Date (A+<span class="cutting_e_dt"></span>)</strong></label>
            {!! Form::text('pl_cutting_e_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_e_dt', 'placeholder' => 'Cutting End Date']) !!}
            @error('pl_cutting_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_print_emb_s_dt"><strong>Print/EMB Start Date (A+<span class="print_emb_s_dt"></span>)</strong></label>
            {!! Form::text('pl_print_emb_s_dt', null, ['class' => 'form-control', 'id' => 'pl_print_emb_s_dt', 'placeholder' => 'Print/EMB Start Date']) !!}
            @error('pl_print_emb_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_print_emb_e_dt"><strong>Print/EMB End Date (A+<span class="print_emb_e_dt"></span>)</strong></label>
            {!! Form::text('pl_print_emb_e_dt', null, ['class' => 'form-control', 'id' => 'pl_print_emb_e_dt', 'placeholder' => 'Print/EMB End Date']) !!}
            @error('pl_print_emb_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_s_dt"><strong>Sewing Start Date (A+<span class="sewing_s_dt"></span>)</strong></label>
            {!! Form::text('pl_sewing_s_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_s_dt', 'placeholder' => 'Sewing Start Date']) !!}
            @error('pl_sewing_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_e_dt"><strong>Sewing End Date (A+<span class="sewing_e_dt"></span>)</strong></label>
            {!! Form::text('pl_sewing_e_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_e_dt', 'placeholder' => 'Sewing End Date']) !!}
            @error('pl_sewing_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_finish_s_dt"><strong>Finishing Start Date (A+<span class="finish_s_dt"></span>)</strong></label>
            {!! Form::text('pl_finish_s_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_s_dt', 'placeholder' => 'Finishing Start Date']) !!}
            @error('pl_finish_s_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_finish_e_dt"><strong>Finishing End Date (A+<span class="finish_e_dt"></span>)</strong></label>
            {!! Form::text('pl_finish_e_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_e_dt', 'placeholder' => 'Finishing End Date']) !!}
            @error('pl_finish_e_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_midline_inspec_dt"><strong>Mid Line Inspaction Date (A+<span class="midline_inspec_dt"></span>)</strong></label>
            {!! Form::text('pl_midline_inspec_dt', null, ['class' => 'form-control', 'id' => 'pl_midline_inspec_dt', 'placeholder' => 'Mid Line Inspaction Date']) !!}
            @error('pl_midline_inspec_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_final_inspec_dt"><strong>Final Inspaction Date (A+<span class="final_inspec_dt"></span>)</strong></label>
            {!! Form::text('pl_final_inspec_dt', null, ['class' => 'form-control', 'id' => 'pl_final_inspec_dt', 'placeholder' => 'Final Inspaction Date']) !!}
            @error('pl_final_inspec_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_shipment_dt"><strong>Shipment Date (A+<span class="shipment_dt"></span>)</strong></label>
            {!! Form::text('pl_shipment_dt', null, ['class' => 'form-control', 'id' => 'pl_shipment_dt', 'placeholder' => 'Shipment Date']) !!}
            @error('pl_shipment_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    {{-- Next Instruction Start --}}
    <div class="col-md-12 my-2">
        <div class="card-body bg-info" id="colorPart">
            <h4>Color Wise Details</h4>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_picture"><strong>Picture</strong></label><br>
            {!! Form::file('pl_picture', null, ['class' => 'form-control', 'id' => 'pl_picture', 'placeholder' => 'Select a Photo']) !!}
            @error('pl_picture')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_germents_smv"><strong>Garment SMV</strong></label>
            {!! Form::text('pl_germents_smv', null, ['class' => 'form-control', 'id' => 'pl_germents_smv', 'placeholder' => 'Garments SMV']) !!}
            @error('pl_germents_smv')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_consumtion"><strong>Fabric Consumption Kg/dzn</strong></label>
            <select name="pl_fabric_consumtion" id="pl_fabric_consumtion" class="form-control">
                <option value="" selected>Select Fabric Consumtion</option>
                <option {{ $order->pl_fabric_consumtion=='kg'?'selected':'' }} value="kg">KG</option>
                <option {{ $order->pl_fabric_consumtion=='dzn'?'selected':'' }}  value="dzn">Dogne</option>
            </select>

            @error('pl_fabric_consumtion')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    @if (isset($order->plcolorquantity))
    <div class="col-md-12">
        <div class="card w3-border w3-border-blue">
            <div class="card-body">
                <table class="table table-bordered table-sm w3-border w3-border-blue">
                    <tr>
                        <th>Color Name</th>
                        <th>Color Wise Qty</th>
                        <th>Print Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($order->plcolorquantity as $item)
                        <tr>
                            <td>{{ $item->pl_color_name }}</td>
                            <td>{{ $item->pl_color_wise_qty }}</td>
                            <td>{{ $item->pl_print_name }}</td>
                            <td><a href="{{ route('colorwiseqtu.delete',['color'=>$item->id,'order'=>$order->id]) }}" onclick="return confirm('Are you sure? you want to delete this color details?');" class="btn btn-danger btn-xs">Delete</a></td>
                         
                        </tr>
                    @endforeach
                </table>
                <hr>
                <div class="col-md-12" id="dynamicColor">
                    <div class="row" >
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pl_color_name"><strong> Color Name</strong></label>
                                {!! Form::text('pl_color_name[0]', null, ['class' => 'form-control', 'id' => 'pl_color_name', 'placeholder' => 'Color Name']) !!}
                                @error('pl_color_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pl_color_wise_qty"><strong> Colour wise Quantity</strong></label>
                                {!! Form::number('pl_color_wise_qty[0]', null, ['class' => 'form-control', 'id' => 'pl_color_wise_qty', 'placeholder' => 'Colour wise  Quantity']) !!}
                                @error('pl_color_wise_qty')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="pl_print_name"><strong> Print name</strong></label>
                                {!! Form::text('pl_print_name[0]', null, ['class' => 'form-control', 'id' => 'pl_print_name', 'placeholder' => ' Print name']) !!}
                                @error('pl_print_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">  &nbsp; </label>
                            <input type="button" class="name2 btn btn-info form-control " name="name2" id="addMore" value="Add more">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    

    {{-- <div class="col-md-12">
        <div class="form-group">
            <label for="pl_color_name"><strong> Color Name</strong></label>
            {!! Form::text('pl_color_name', null, ['class' => 'form-control', 'id' => 'pl_color_name', 'placeholder' => 'Color Name']) !!}
            @error('pl_color_name')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_color_wise_qty"><strong> Colour wise Quantity</strong></label>
            {!! Form::number('pl_color_wise_qty', null, ['class' => 'form-control', 'id' => 'pl_color_wise_qty', 'placeholder' => 'Colour wise  Quantity']) !!}
            @error('pl_color_wise_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_print_name"><strong> Print name</strong></label>
            {!! Form::text('pl_print_name', null, ['class' => 'form-control', 'id' => 'pl_print_name', 'placeholder' => ' Print name']) !!}
            @error('pl_print_name')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div> --}}

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_acc_dets"><strong>Sewing Acc Details</strong></label>
            {!! Form::text('pl_sewing_acc_dets', null, ['class' => 'form-control', 'id' => 'pl_sewing_acc_dets', 'placeholder' => 'Sewing Acc Details']) !!}
            @error('pl_sewing_acc_dets')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_packing_acc_dets"><strong>Packing Acc Details</strong></label>
            {!! Form::text('pl_packing_acc_dets', null, ['class' => 'form-control', 'id' => 'pl_packing_acc_dets', 'placeholder' => 'Packing Acc  Details']) !!}
            @error('pl_packing_acc_dets')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_buld_fab_qlt_app_dt"><strong>BulkFabric Quality Approval date</strong></label>
            {!! Form::date('pl_buld_fab_qlt_app_dt', null, ['class' => 'form-control', 'id' => 'pl_buld_fab_qlt_app_dt']) !!}
            @error('pl_buld_fab_qlt_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_lab_dip_app_dt"><strong>Lab dip Approval Date</strong></label>
            {!! Form::date('pl_lab_dip_app_dt', null, ['class' => 'form-control', 'id' => 'pl_lab_dip_app_dt']) !!}
            @error('pl_lab_dip_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_print_app_dt"><strong>Garment Approval Date</strong></label>
            {!! Form::date('pl_print_app_dt', null, ['class' => 'form-control', 'id' => 'pl_print_app_dt']) !!}
            @error('pl_print_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_pp_app_dt"><strong>PP Approval Date</strong></label>
            {!! Form::date('pl_pp_app_dt', null, ['class' => 'form-control', 'id' => 'pl_pp_app_dt']) !!}
            @error('pl_pp_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_size_set_app_dt"><strong>Size set Approval Date</strong></label>
            {!! Form::date('pl_size_set_app_dt', null, ['class' => 'form-control', 'id' => 'pl_size_set_app_dt']) !!}
            @error('pl_size_set_app_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_yarn_rf_no"><strong>Yarn RF No</strong></label>
            {!! Form::text('pl_yarn_rf_no', null, ['class' => 'form-control', 'id' => 'pl_yarn_rf_no', 'placeholder' => 'Yarn RF No']) !!}
            @error('pl_yarn_rf_no')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_yarn_qty"><strong>Yarn Quantity</strong></label>
            {!! Form::number('pl_yarn_qty', null, ['class' => 'form-control', 'id' => 'pl_yarn_qty', 'placeholder' => 'Yarn Quantity']) !!}
            @error('pl_yarn_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_qty"><strong>Fabric Quantity</strong></label>
            {!! Form::number('pl_fabric_qty', null, ['class' => 'form-control', 'id' => 'pl_fabric_qty', 'placeholder' => 'Fabric Quantity']) !!}
            @error('pl_fabric_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_ready_dt"><strong>Fabric Ready date</strong></label>
            {!! Form::date('pl_fabric_ready_dt', null, ['class' => 'form-control', 'id' => 'pl_fabric_ready_dt']) !!}
            @error('pl_fabric_ready_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_cutting_dt"><strong>Cutting date</strong></label>
            {!! Form::date('pl_cutting_dt', null, ['class' => 'form-control', 'id' => 'pl_cutting_dt']) !!}
            @error('pl_cutting_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_no_of_line"><strong>No. of Lines</strong></label>
            {!! Form::text('pl_no_of_line', null, ['class' => 'form-control', 'id' => 'pl_no_of_line', 'placeholder' => 'No. of Lines']) !!}
            @error('pl_no_of_line')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_prod_line"><strong>Sewing Prod Line</strong></label>
            {!! Form::text('pl_sewing_prod_line', null, ['class' => 'form-control', 'id' => 'pl_sewing_prod_line', 'placeholder' => 'Sewing Prod Line']) !!}
            @error('pl_sewing_prod_line')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_prod_day"><strong>Sewing prod day</strong></label>
            {!! Form::date('pl_sewing_prod_day', null, ['class' => 'form-control', 'id' => 'pl_sewing_prod_day', 'placeholder' => 'Sewing prod day']) !!}
            @error('pl_sewing_prod_day')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_compl_dt"><strong>Sewing Completion Date</strong></label>
            {!! Form::date('pl_sewing_compl_dt', null, ['class' => 'form-control', 'id' => 'pl_sewing_compl_dt', 'placeholder' => 'Sewing Completion  Date']) !!}
            @error('pl_sewing_compl_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_finish_compl_dt"><strong>Finishing Completion Date</strong></label>
            {!! Form::date('pl_finish_compl_dt', null, ['class' => 'form-control', 'id' => 'pl_finish_compl_dt', 'placeholder' => 'Finishing  Completion Date']) !!}
            @error('pl_finish_compl_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_fabric_rejec"><strong>Fabric rejections</strong></label>
            {!! Form::text('pl_fabric_rejec', null, ['class' => 'form-control', 'id' => 'pl_fabric_rejec', 'placeholder' => 'Fabric rejections']) !!}
            @error('pl_fabric_rejec')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_cutting_rejec"><strong>Cutting Rejections</strong></label>
            {!! Form::text('pl_cutting_rejec', null, ['class' => 'form-control', 'id' => 'pl_cutting_rejec', 'placeholder' => 'Cutting Rejections']) !!}
            @error('pl_cutting_rejec')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_sewing_rejec"><strong>Sewing Rejections</strong></label>
            {!! Form::text('pl_sewing_rejec', null, ['class' => 'form-control', 'id' => 'pl_sewing_rejec', 'placeholder' => 'Sewing Rejections']) !!}
            @error('pl_sewing_rejec')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_finish_rejec"><strong>Finishing Rejections</strong></label>
            {!! Form::text('pl_finish_rejec', null, ['class' => 'form-control', 'id' => 'pl_finish_rejec', 'placeholder' => 'Finishing Rejections']) !!}
            @error('pl_finish_rejec')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_dhu"><strong>DHU %</strong></label>
            {!! Form::text('pl_dhu', null, ['class' => 'form-control', 'id' => 'pl_dhu', 'placeholder' => 'DHU %']) !!}
            @error('pl_dhu')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_final_pack_qty"><strong>Final Packed Quantity</strong></label>
            {!! Form::number('pl_final_pack_qty', null, ['class' => 'form-control', 'id' => 'pl_final_pack_qty', 'placeholder' => 'Final Packed Quantity']) !!}
            @error('pl_final_pack_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_excess_short_qty"><strong>Excess / Short Quantity</strong></label>
            {!! Form::number('pl_excess_short_qty', null, ['class' => 'form-control', 'id' => 'pl_excess_short_qty', 'placeholder' => 'Excess / Short Quantity']) !!}
            @error('pl_excess_short_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_final_inspec_dt"><strong>Final Inspection Date </strong></label>
            {!! Form::date('pl_final_inspec_dt', null, ['class' => 'form-control', 'id' => 'pl_final_inspec_dt']) !!}
            @error('pl_final_inspec_dt')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_final_shipp_qty"><strong>Final Shipped Quantity</strong></label>
            {!! Form::number('pl_final_shipp_qty', null, ['class' => 'form-control', 'id' => 'pl_final_shipp_qty', 'placeholder' => 'Final Shipped Quantity']) !!}
            @error('pl_final_shipp_qty')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="pl_value"><strong>Final Shipped Value</strong></label>
            {!! Form::number('pl_value', null, ['class' => 'form-control', 'id' => 'pl_value', 'placeholder' => 'Value']) !!}
            @error('pl_value')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- Next Instruction END --}}



    <div class="col-md-12">
        <div class="form-group">
            <input class="btn btn-primary" type="submit">
        </div>
    </div>

</div>
