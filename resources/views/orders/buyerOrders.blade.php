@extends('layouts.master')

@push('css')
    <style>
        tr.nowrap>th,
        td {
            white-space: nowrap;
        }

    </style>
@endpush

@section('content')

    <section class="container">
        <div class="container-fluid">

            <br>
            @include('alert.alerts')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Orders Of {{ $buyer->name }} ({{ $buyer->id }})</h4>
                    <div class="card-tools">
                        <a class="btn btn-primary btn-xs" href="{{ route('orders.create') }}"> Create New Order</a>&nbsp;
                        <button class="btn btn-xs btn-info float-right"
                            onclick="exportTableToCSV('orders.csv')">Export To CSV</button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                            <thead>

                                <tr class="nowrap">
                                    <th>Sl No.</th>
                                    <th>Planned & Actual</th>
                                    <th class="wid" width="200">Action</th>
                                    <th>Order No.</th>
                                    <th>Buyer</th>
                                    <th>Style No.</th>
                                    <th>Garment Details</th>
                                    <th>Fabric Details</th>
                                    <th>Yarn Details</th>
                                    <th>Trim Details</th>
                                    <th>Quantity</th>
                                    <th>Delivery Date Interval</th>
                                    <th>Purchase Order Recv Date</th>
                                    <th>Required Delivery Date</th>
                                    <th>Lead Time</th>
                                    <th>Yarn Received Start Date</th>
                                    <th>Yarn Received End Date</th>
                                    <th>Fabric Quality Subbmission Date</th>
                                    <th>Fabric Composition Test Submission</th>
                                    <th>Fabric Composition Test Approval </th>
                                    <th>Fabric Quality Test Submission</th>

                                    <th>Fabric Quality Test Approval Date</th>
                                    <th>SSS Sample Submission Date</th>
                                    <th>SSS Approval Date </th>
                                    <th>Knitting Start Date </th>
                                    <th>Knitting End Date </th>
                                    <th>Dyeing Start Date</th>
                                    <th>Dyeing End Date</th>
                                    <th>Sewing Accessories Test Subbmission</th>
                                    <th>Sewing Accessories Inhouse Date</th>
                                    <th>Packing Accessories Test Submission</th>
                                    <th>Packing Accessories Inhouse Date</th>
                                    <th>Cutting Start Date</th>
                                    <th>Cutting End Date</th>
                                    <th>Print/EMB Start Date</th>
                                    <th>Print/EMB End Date</th>
                                    <th>Sewing Start Date</th>
                                    <th>Sewing End Date</th>
                                    <th>Finishing Start Date </th>
                                    <th>Finishing End Date </th>
                                    <th>Mid Line Inspaction Date</th>
                                    <th>Inspaction Date</th>
                                    <th> Shipped Date</th>
                                    {{-- //Next Instruction --}}
                                    {{-- <th>Photo</th>
                                    <th>Garment SMV</th>
                                    <th>Fabric Consumption Kg/dzn</th>
                                    <th>Color Name</th>
                                    <th>Colour wise Quantity</th>
                                    <th>Print name</th>
                                    <th>Sewing Acc Details</th>
                                    <th>Packing Acc Details</th>
                                    <th>BulkFabric Quality Approval date</th>
                                    <th>Lab dip Approval Date</th>
                                    <th>Print Approval Date</th>
                                    <th>Garment Approval Date</th>
                                    <th>PP Approval Date</th>
                                    <th>Size set Approval Date</th>
                                    <th>Yarn RF No</th>
                                    <th>Yarn Quantity</th>
                                    <th>Fabric Quantity</th>
                                    <th>Fabric Ready date</th>
                                    <th>Cutting date</th>
                                    <th>No. of Lines</th>
                                    <th>Sewing Prod Line</th>
                                    <th>Sewing prod day</th>
                                    <th>Sewing Completion Date</th>
                                    <th>Finishing Completion Date</th>
                                    <th>Fabric rejections</th>
                                    <th>Cutting Rejections</th>
                                    <th>Sewing Rejections</th>
                                    <th>Finishing Rejections</th>
                                    <th>DHU %</th>
                                    <th>Final Packed Quantity</th>
                                    <th>Excess / Short Quantity</th>
                                    <th>Final Shipped Quantity</th>
                                    <th>Value</th> --}}



                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>

                                <?php $i = (($data->currentPage() - 1) * $data->perPage() + 1); ?>
                                @forelse ($data as $item)
                                    <tr class="nowrap">
                                        <td>{{ $i }}</td>
                                        <td>Planned</td>
                                        <td width="200" valign="center">
                                            <?php
                                                $me= Auth::user();
                                                ?>
                                            @if ($me->hasRole('Admin'))
                                                <a class="btn w3-purple btn-xs" href="{{ route('editPlannedOrder',['order'=>$item->id]) }}">Edit Planned Info</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->order_no }}</td>
                                        {{-- <td>{{ $item->buyer->name?$item->buyer->name:'5' }}</td> --}}
                                        <td> @if (isset($item->buyer))
                                            {{ $item->buyer->name }}
                                        @endif</td>
                                        <td>{{ $item->style_no }}</td>
                                        <td>{{ $item->pl_germent_details }}</td>
                                        <td>{{ $item->pl_fabric_details }}</td>
                                        <td>{{ $item->pl_yern_details }}</td>
                                        <td>{{ $item->pl_trim_details }}</td>
                                        <td>{{ $item->pl_quantity }}</td>
                                        <td>{{ $item->delivery_date_interval }}</td>
                                        <td>{{ $item->pl_po_purch_recvd_d }}</td>
                                        <td>{{ $item->pl_req_delv_dt }}</td>
                                        <td>{{ $item->pl_lead_time }}</td>
                                        <td>{{ $item->pl_yern_recei_s_dt }}</td>
                                        <td>{{ $item->pl_yern_recei_e_dt }}</td>
                                        <td>{{ $item->pl_fabric_qlt_sub_dt }}</td>
                                        <td>{{ $item->pl_fabric_compo_tst_sub }}</td>
                                        <td>{{ $item->pl_fabric_compo_tst_app }}</td>
                                        <td>{{ $item->pl_fabric_qlt_tst_sub }}</td>

                                        <td>{{ $item->pl_fabric_qlt_tst_app_dt }}</td>
                                        <td>{{ $item->pl_sss_samp_sub_dt }}</td>
                                        <td>{{ $item->pl_sss_app_dt }}</td>
                                        <td>{{ $item->pl_knitting_s_dt }}</td>
                                        <td>{{ $item->pl_knitting_e_dt }} </td>
                                        <td>{{ $item->pl_dyeing_s_dt }}</td>
                                        <td>{{ $item->pl_dyeing_e_dt }}</td>
                                        <td>{{ $item->pl_sewing_acce_tst_sub }}</td>
                                        <td>{{ $item->pl_sewing_acce_inhouse_dt }}</td>
                                        <td>{{ $item->pl_packing_acce_tst_sub }}</td>
                                        <td>{{ $item->pl_packing_acce_inhouse_dt }}</td>
                                        <td>{{ $item->pl_cutting_s_dt }}</td>
                                        <td>{{ $item->pl_cutting_e_dt }}</td>
                                        <td>{{ $item->pl_print_emb_s_dt }}</td>
                                        <td>{{ $item->pl_print_emb_e_dt }}</td>
                                        <td>{{ $item->pl_sewing_s_dt }}</td>
                                        <td>{{ $item->pl_sewing_e_dt }}</td>
                                        <td>{{ $item->pl_finish_s_dt }}</td>
                                        <td>{{ $item->pl_finish_e_dt }}</td>
                                        <td>{{ $item->pl_midline_inspec_dt }}</td>
                                        <td>{{ $item->pl_final_inspec_dt }}</td>
                                        <td>{{ $item->pl_shipment_dt }}</td>
                                        {{-- //Next Instruction --}}
                                        {{-- <td>{{ $item->pl_picture }}</td>
                                        <td>{{ $item->pl_germents_smv }}</td>
                                        <td>{{ $item->pl_fabric_consumtion }}</td>
                                        <td>{{ $item->pl_color_name }}</td>
                                        <td>{{ $item->pl_color_wise_qty }}</td>
                                        <td>{{ $item->pl_print_name }}</td>
                                        <td>{{ $item->pl_sewing_acc_dets }}</td>
                                        <td>{{ $item->pl_packing_acc_dets }}</td>
                                        <td>{{ $item->pl_buld_fab_qlt_app_dt }}</td>
                                        <td>{{ $item->pl_lab_dip_app_dt }}</td>
                                        <td>{{ $item->pl_print_app_dt }}</td>
                                        <td>{{ $item->pl_garments_app_dt }}</td>
                                        <td>{{ $item->pl_pp_app_dt }}</td>
                                        <td>{{ $item->pl_size_set_app_dt }}</td>
                                        <td>{{ $item->pl_yarn_rf_no }}</td>
                                        <td>{{ $item->pl_yarn_qty }}</td>
                                        <td>{{ $item->pl_fabric_qty }}</td>
                                        <td>{{ $item->pl_fabric_ready_dt }}</td>
                                        <td>{{ $item->pl_cutting_dt }}</td>
                                        <td>{{ $item->pl_no_of_line }}</td>
                                        <td>{{ $item->pl_sewing_prod_line }}</td>
                                        <td>{{ $item->pl_sewing_prod_day }}</td>
                                        <td>{{ $item->pl_sewing_compl_dt }}</td>
                                        <td>{{ $item->pl_finish_compl_dt }}</td>
                                        <td>{{ $item->pl_fabric_rejec }}</td>
                                        <td>{{ $item->pl_cutting_rejec }}</td>
                                        <td>{{ $item->pl_sewing_rejec }}</td>
                                        <td>{{ $item->pl_finish_rejec }}</td>
                                        <td>{{ $item->pl_dhu }}</td>
                                        <td>{{ $item->pl_final_pack_qty }}</td>
                                        <td>{{ $item->pl_excess_short_qty }}</td>
                                        <td>{{ $item->pl_final_shipp_qty }}</td>
                                        <td>{{ $item->pl_value }}</td> --}}


                                        
                                        </td>
                                    </tr>
                                    <tr class="nowrap">
                                        <td>{{ $i }}</td>
                                        <td>Actual</td>
                                        <td width="200" valign="center">
                                            <a class="btn btn-info btn-xs"
                                                href="{{ route('orders.edit', ['order' => $item->id]) }}">Edit</a>
                                                {!! Form::open(['route' => ['orders.destroy', $item->id],'method'=>'delete','class'=>'d-inline'])!!}
                                              <input type="hidden" name="order_id" value="{{ $item->id }}">
                                                <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                                {!! Form::close() !!}
                                                <a class="btn btn-warning btn-xs"
                                                href="{{ route('buyerOrdersList', ['buyer' => $item->buyer_id??0]) }}">Buyers Order</a>
                                            {{-- <a class="btn btn-danger btn-xs"
                                                href="{{ route('orders.destroy', ['order' => $item->id]) }}">Delete</a> --}}
                                        </td>
                                        <td>{{ $item->order_no }}</td>
                                        {{-- <td>{{ $item->buyer->name }}</td> --}}
                                        {{-- <td>{{ $item->buyer->name?$item->buyer->name:'5' }}</td> --}}
                                        <td> @if (isset($item->buyer))
                                            {{ $item->buyer->name }}
                                        @endif</td>
                                        <td>{{ $item->style_no }}</td>
                                        <td>{{ $item->al_germent_details }}</td>
                                        <td>{{ $item->al_fabric_details }}</td>
                                        <td>{{ $item->al_yern_details }}</td>
                                        <td>{{ $item->al_trim_details }}</td>
                                        <td>{{ $item->al_quantity }}</td>
                                        <td>{{ $item->delivery_date_interval }}</td>
                                        <td>{{ $item->al_po_purch_recvd_d }}</td>
                                        <td>{{ $item->al_req_delv_dt }}</td>
                                        <td>{{ $item->al_lead_time }}</td>
                                        <td>{{ $item->al_yern_recei_s_dt }}</td>
                                        <td>{{ $item->al_yern_recei_e_dt }}</td>
                                        <td>{{ $item->al_fabric_qlt_sub_dt }}</td>
                                        <td>{{ $item->al_fabric_compo_tst_sub }}</td>
                                        <td>{{ $item->al_fabric_compo_tst_app }}</td>
                                        <td>{{ $item->al_fabric_qlt_tst_sub }}</td>

                                        <td>{{ $item->al_fabric_qlt_tst_app_dt }}</td>
                                        <td>{{ $item->al_sss_samp_sub_dt }}</td>
                                        <td>{{ $item->al_sss_app_dt }}</td>
                                        <td>{{ $item->al_knitting_s_dt }}</td>
                                        <td>{{ $item->al_knitting_e_dt }} </td>
                                        <td>{{ $item->al_dyeing_s_dt }}</td>
                                        <td>{{ $item->al_dyeing_e_dt }}</td>
                                        <td>{{ $item->al_sewing_acce_tst_sub }}</td>
                                        <td>{{ $item->al_sewing_acce_inhouse_dt }}</td>
                                        {{-- <td>{{ $item->al_sewing_alce_tst_sub }}</td>
                                    <td>{{ $item->al_sewing_alce_inhouse_dt }}</td> --}}
                                        <td>{{ $item->al_packing_acce_tst_sub }}</td>
                                        <td>{{ $item->al_packing_acce_inhouse_dt }}</td>
                                        {{-- <td>{{ $item->al_palking_alce_tst_sub }}</td>
                                    <td>{{ $item->al_palking_alce_inhouse_dt }}</td> --}}
                                        <td>{{ $item->al_cutting_s_dt }}</td>
                                        <td>{{ $item->al_cutting_e_dt }}</td>
                                        <td>{{ $item->al_print_emb_s_dt }}</td>
                                        <td>{{ $item->al_print_emb_e_dt }}</td>
                                        <td>{{ $item->al_sewing_s_dt }}</td>
                                        <td>{{ $item->al_sewing_e_dt }}</td>
                                        <td>{{ $item->al_finish_s_dt }}</td>
                                        <td>{{ $item->al_finish_e_dt }}</td>
                                        <td>{{ $item->al_midline_inspec_dt }}</td>
                                        <td>{{ $item->al_final_inspec_dt }}</td>
                                        <td>{{ $item->al_shipment_dt }}</td>
                                       
                                        {{-- //Next Instruction --}}
                                        {{-- <td>{{ $item->al_picture }}</td>
                                        <td>{{ $item->al_germents_smv }}</td>
                                        <td>{{ $item->al_fabric_consumtion }}</td>
                                        <td>{{ $item->al_color_name }}</td>
                                        <td>{{ $item->al_color_wise_qty }}</td>
                                        <td>{{ $item->al_print_name }}</td>
                                        <td>{{ $item->al_sewing_acc_dets }}</td>
                                        <td>{{ $item->al_packing_acc_dets }}</td>
                                        <td>{{ $item->al_buld_fab_qlt_app_dt }}</td>
                                        <td>{{ $item->al_lab_dip_app_dt }}</td>
                                        <td>{{ $item->al_print_app_dt }}</td>
                                        <td>{{ $item->al_garments_app_dt }}</td>
                                        <td>{{ $item->al_pp_app_dt }}</td>
                                        <td>{{ $item->al_size_set_app_dt }}</td>
                                        <td>{{ $item->al_yarn_rf_no }}</td>
                                        <td>{{ $item->al_yarn_qty }}</td>
                                        <td>{{ $item->al_fabric_qty }}</td>
                                        <td>{{ $item->al_fabric_ready_dt }}</td>
                                        <td>{{ $item->al_cutting_dt }}</td>
                                        <td>{{ $item->al_no_of_line }}</td>
                                        <td>{{ $item->al_sewing_prod_line }}</td>
                                        <td>{{ $item->al_sewing_prod_day }}</td>
                                        <td>{{ $item->al_sewing_comal_dt }}</td>
                                        <td>{{ $item->al_finish_comal_dt }}</td>
                                        <td>{{ $item->al_fabric_rejec }}</td>
                                        <td>{{ $item->al_cutting_rejec }}</td>
                                        <td>{{ $item->al_sewing_rejec }}</td>
                                        <td>{{ $item->al_finish_rejec }}</td>
                                        <td>{{ $item->al_dhu }}</td>
                                        <td>{{ $item->al_final_pack_qty }}</td>
                                        <td>{{ $item->al_excess_short_qty }}</td>
                                        <td>{{ $item->al_final_shipp_qty }}</td>
                                        <td>{{ $item->al_value }}</td> --}}
                                    </tr>
                                    <?php $i++; ?>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-danger text-center">No Order Found in this Buyer</td>
                                    </tr>
                                @endforelse
                                {{-- <tr>
                                    <td>Planned</td>
                                    <td>1</td>
                                    <td>2109105</td>
                                    <td>Suhel Khan</td>
                                    <td>5004</td>
                                    <td>Some details about garment</td>
                                    <td>Some details about fabric</td>
                                    <td>Some details about yarn</td>
                                    <td>Some details about trim</td>
                                    <td>2000</td>
                                    <td>2021-09-23</td>
                                </tr>


                                <tr>
                                    <td>Actual</td>
                                    <td>1</td>
                                    <td>2109105</td>
                                    <td>Suhel Khan</td>
                                    <td>5004</td>
                                    <td>Some details about garment</td>
                                    <td>Some details about fabric</td>
                                    <td>Some details about yarn</td>
                                    <td>Some details about trim</td>
                                    <td>2000</td>
                                    <td>2021-09-23</td>
                                </tr> --}}

                            </tbody>

                        </table>



                    </div>
{{ $data->render() }}
                </div>
            </div>








        </div>
    </section>
@endsection

@push('js')
<script>
    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {
            type: "text/csv"
        });

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Hide download link
        downloadLink.style.display = "none";

        // Add the link to DOM
        document.body.appendChild(downloadLink);

        // Click download link
        downloadLink.click();
    }

    function exportTableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");

        for (var i = 0; i < rows.length; i++) {
            var row = [],
                cols = rows[i].querySelectorAll("td, th");

            for (var j = 0; j < cols.length; j++)
                row.push("\"" + cols[j].innerText + "\"");

            csv.push(row.join(","));
        }

        // Download CSV file
        downloadCSV(csv.join("\n"), filename);
    }
</script>
@endpush
