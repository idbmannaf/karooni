@extends('layouts.master')

@push('css')
    <style>
        tr.nowrap>th,
        td {
            white-space: nowrap;
        }

        th.colorOne,
        td.colorOne {

            background-color: #D9E1F2;
            border: 1px solid lightgoldenrodyellow;

        }

        th.colorTwo,
        td.colorTwo {
            background: #FCE4D6;
            border: 1px solid lightblue;
        }

        th.colorThree,
        td.colorThree {
            background-color: #E2EFDA;
            border: 1px solid #9cbebc;
        }

        th.colorFour,
        td.colorFour {
            background-color: #FFE699;
            border: 1px solid #beb28e;
        }

        @media print {

            .content-header,
            .main-header,
            .main-sidebar,
            .no-print {
                display: none !important
            }

            .content-wrapper,
            .main-footer {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
                margin-left: 0 !important;
                min-height: 0 !important
            }
        }
    </style>
@endpush

@section('content')

    <section class="container">
        <div class="container-fluid">

            <br>
            @include('alert.alerts')
             <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="input-group input-group-sm ">
                            <input type="text"
                                data-url="{{ route('searchAjax', ['type' => 'catwise', 'status' => isset($status) ? $status : null]) }}"
                                class="form-control ajax-data-search" placeholder="Search Orders">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary w3-border">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Colorwise Quantity Management</h4>
                    <div class="card-tools">
                        <a class="btn btn-primary btn-xs" href="{{ route('orders.create') }}"> Create New Order</a> &nbsp;
                        <button class="btn btn-xs btn-info float-right"
                            onclick="exportTableToCSV('colorwiseOrders.csv')">Export To CSV</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                            <thead>
                                <tr class="nowrap">
                                    {{-- 1st Color Section --}}
                                    <th class="colorOne">Sl No.</th>
                                    <th class="colorOne">Planned & Actual</th>
                                    <th class="colorOne no-print" width="200">Action</th>
                                    <th class="colorOne">PO No</th>
                                    <th class="colorOne">Buyer</th>
                                    <th class="colorOne">PO date</th>
                                    <th class="colorOne">Shipment date</th>
                                    <th class="colorOne">Order Quantity</th>
                                    <th class="colorOne">Style No</th>
                                    <th class="colorOne">Picture</th>
                                    <th class="colorOne">Garment Details</th>
                                    <th class="colorOne">Garment SMV</th>
                                    <th class="colorOne">Fabric Consumption Kg/dzn</th>
                                    <th class="colorOne"> Fabric Details </th>
                                    <th class="colorOne">Yarn Details</th>
                                    {{-- //2nd Color Start --}}
                                    <th class="colorTwo">Color name</th>
                                    <th class="colorTwo">Colour Wize Quantity</th>
                                    <th class="colorTwo">Print Name</th>
                                    <th class="colorTwo">Sewing Acc Details</th>
                                    <th class="colorTwo">Packing Acc Details</th>
                                    <th class="colorTwo">BulkFabric Quality Approval date</th>
                                    <th class="colorTwo">Lab dip Approval Date</th>
                                    <th class="colorTwo">Print Approval Date</th>
                                    {{-- 3rd Color Start --}}
                                    <th class="colorThree">Garment Approval Date</th>
                                    <th class="colorThree">PP Approval Date</th>
                                    <th class="colorThree">Size set Approval Date</th>
                                    <th class="colorThree">Yarn RF No</th>
                                    <th class="colorThree">Yarn Quantity</th>
                                    <th class="colorThree">Fabric Quantity</th>
                                    <th class="colorThree">Fabric Ready date</th>
                                    {{-- 4th Color Start --}}
                                    <th class="colorFour">Cutting date</th>
                                    <th class="colorFour">No. of Lines</th>
                                    <th class="colorFour">Sewing Prod Line</th>
                                    <th class="colorFour">Sewing prod day</th>
                                    <th class="colorFour">Sewing Completion Date</th>
                                    <th class="colorFour">Finishing Completion Date</th>
                                    <th class="colorFour">Fabric rejections</th>
                                    <th class="colorFour">Cutting Rejections</th>
                                    <th class="colorFour">Sewing Rejections</th>
                                    <th class="colorFour">Finishing Rejections</th>
                                    <th class="colorFour">DHU %</th>
                                    <th class="colorFour">Final Packed Quantity</th>
                                    <th class="colorFour">Excess / Short Quantity</th>
                                    <th class="colorFour">Final Shipped Quantity</th>
                                    <th class="colorFour">Value</th>
            
                                </tr>
                            </thead>
                            <tbody class="ajax-data-container">
                                <?php $i = 1; ?>
            
                                <?php $i = ($data->currentPage() - 1) * $data->perPage() + 1; ?>
                                @forelse ($data as $item)
                                    <tr class="nowrap">
                                        <td class="colorOne">{{ $i }}</td>
                                        <td class="colorOne">Planned</td>
                                        <td class="colorOne no-print" widtd="200"> <?php
                                            $me= Auth::user();
                                            ?>
                                        @if ($me->hasRole('Admin'))
                                            <a class="btn w3-purple btn-xs" href="{{ route('editPlannedOrder',['order'=>$item->id]) }}#colorPart">Edit Planned Info</a>
                                        @endif</td>
                                        <td class="colorOne">{{ $item->order_no }}</td>
                                        <td class="colorOne"> @if (isset($item->buyer))
                                            {{ $item->buyer->name }}
                                        @endif</td>
                                        <td class="colorOne">{{ $item->pl_po_purch_recvd_d }}</td>
                                        <td class="colorOne">{{ $item->pl_shipment_dt }}</td>
                                        <td class="colorOne">{{ $item->pl_quantity }}</td>
                                        <td class="colorOne">{{ $item->style_no }}</td>
                                        <td class="colorOne"> <img
                                                src="{{ route('imagecache', ['template' => 'sbixs', 'filename' => $item->fi()]) }}"
                                                alt=""></td>
                                        <td class="colorOne">{{ $item->pl_germent_details }}</td>
                                        <td class="colorOne">{{ $item->pl_germents_smv }}</td>
                                        <td class="colorOne">{{ $item->pl_fabric_consumtion }}</td>
                                        <td class="colorOne">Fabric Details </td>
                                        <td class="colorOne">Yarn Details</td>
                                        {{-- //2nd Color Start --}}
                                        {{-- <td class="colorTwo">{{ $item->pl_color_name }}</td>
                                        <td class="colorTwo">{{ $item->pl_color_wise_qty }}</td>
                                        <td class="colorTwo">{{ $item->pl_print_name }}</td> --}}
                                        <td colspan="3">
                                          <table class="table table-striped table-sm">
                                            @foreach ($item->plcolorquantity as $colorpart)
                                              <tr>
                                                <td>{{ $colorpart->pl_color_name }}</td>
                                                <td>{{ $colorpart->pl_color_wise_qty }}</td>
                                                <td>{{ $colorpart->pl_print_name }}</td>
                                              </tr>
                                              @endforeach
                                          </table>
                                        </td>
                                        <td class="colorTwo">{{ $item->pl_sewing_acc_dets }}</td>
                                        <td class="colorTwo">{{ $item->pl_packing_acc_dets }}</td>
                                        <td class="colorTwo">{{ $item->pl_buld_fab_qlt_app_dt }}</td>
                                        <td class="colorTwo">{{ $item->pl_lab_dip_app_dt }}</td>
                                        <td class="colorTwo">{{ $item->pl_print_app_dt }}</td>
                                        {{-- 3rd Color Start --}}
                                        <td class="colorThree">{{ $item->pl_garments_app_dt }}</td>
                                        <td class="colorThree">{{ $item->pl_pp_app_dt }}</td>
                                        <td class="colorThree">{{ $item->pl_size_set_app_dt }}</td>
                                        <td class="colorThree">{{ $item->pl_yarn_rf_no }}</td>
                                        <td class="colorThree">{{ $item->pl_yarn_qty }}</td>
                                        <td class="colorThree">{{ $item->pl_fabric_qty }}</td>
                                        <td class="colorThree">{{ $item->pl_fabric_ready_dt }}</td>
                                        {{-- 4td Color Start --}}
                                        <td class="colorFour">{{ $item->pl_cutting_dt }}</td>
                                        <td class="colorFour">{{ $item->pl_no_of_line }}</td>
                                        <td class="colorFour">{{ $item->pl_sewing_prod_line }}</td>
                                        <td class="colorFour">{{ $item->pl_sewing_prod_day }}</td>
                                        <td class="colorFour">{{ $item->pl_sewing_compl_dt }}</td>
                                        <td class="colorFour">{{ $item->pl_finish_compl_dt }}</td>
                                        <td class="colorFour">{{ $item->pl_fabric_rejec }}</td>
                                        <td class="colorFour">{{ $item->pl_cutting_rejec }}</td>
                                        <td class="colorFour">{{ $item->pl_sewing_rejec }}</td>
                                        <td class="colorFour">{{ $item->pl_finish_rejec }}</td>
                                        <td class="colorFour">{{ $item->pl_dhu }} %</td>
                                        <td class="colorFour">{{ $item->pl_final_pack_qty }}</td>
                                        <td class="colorFour">{{ $item->pl_excess_short_qty }}</td>
                                        <td class="colorFour">{{ $item->pl_final_shipp_qty }}</td>
                                        <td class="colorFour">{{ $item->pl_value }} </td>
            
                                    </tr>
                                    <tr class="nowrap">
                                        <td class="colorOne">{{ $i }}</td>
                                        <td class="colorOne">Actual</td>
                                        <td class="colorOne no-print" widtd="200"><a class="btn btn-info btn-xs no-print"
                                                href="{{ route('orders.edit', ['order' => $item->id]) }}/#colorPart">Edit</a>
                                        </td>
                                        <td class="colorOne">{{ $item->order_no }}</td>
                                        <td class="colorOne"> @if (isset($item->buyer))
                                            {{ $item->buyer->name }}
                                        @endif</td>
                                        <td class="colorOne">{{ $item->al_po_purch_recvd_d }}</td>
                                        <td class="colorOne">{{ $item->al_shipment_dt }}</td>
                                        <td class="colorOne">{{ $item->al_quantity }}</td>
                                        <td class="colorOne">{{ $item->style_no }}</td>
                                        <td class="colorOne">
                                            <img
                                            src="{{ route('imagecache', ['template' => 'sbixs', 'filename' => $item->fi_al()]) }}"
                                            alt="">
                                        </td>
                                        <td class="colorOne">{{ $item->al_germent_details }}</td>
                                        <td class="colorOne">{{ $item->al_germents_smv }}</td>
                                        <td class="colorOne">{{ $item->al_fabric_consumtion }}</td>
                                        <td class="colorOne">Fabric Details </td>
                                        <td class="colorOne">Yarn Details</td>
                                        {{-- //2nd Color Start --}}
                                        <td colspan="3" class="shadow">
                                            <table class="table table-borderd table-sm">
                                              <tbody>
                                                @foreach ($item->alcolorquantity as $colorpart)
                                                <tr>
                                                  <td>{{ $colorpart->al_color_name }}</td>
                                                  <td>{{ $colorpart->al_color_wise_qty }}</td>
                                                  <td>{{ $colorpart->al_print_name }}</td>
                                                </tr>
                                                @endforeach
                                              </tbody>
                                            </table>
                                          </td>
                                        {{-- <td class="colorTwo">{{ $item->al_color_name }}</td>
                                        <td class="colorTwo">{{ $item->al_color_wise_qty }}</td>
                                        <td class="colorTwo">{{ $item->al_print_name }}</td> --}}
                                        <td class="colorTwo">{{ $item->al_sewing_acc_dets }}</td>
                                        <td class="colorTwo">{{ $item->al_packing_acc_dets }}</td>
                                        <td class="colorTwo">{{ $item->al_buld_fab_qlt_app_dt }}</td>
                                        <td class="colorTwo">{{ $item->al_lab_dip_app_dt }}</td>
                                        <td class="colorTwo">{{ $item->al_print_app_dt }}</td>
                                        {{-- 3rd Color Start --}}
                                        <td class="colorThree">{{ $item->al_garments_app_dt }}</td>
                                        <td class="colorThree">{{ $item->al_pp_app_dt }}</td>
                                        <td class="colorThree">{{ $item->al_size_set_app_dt }}</td>
                                        <td class="colorThree">{{ $item->al_yarn_rf_no }}</td>
                                        <td class="colorThree">{{ $item->al_yarn_qty }}</td>
                                        <td class="colorThree">{{ $item->al_fabric_qty }}</td>
                                        <td class="colorThree">{{ $item->al_fabric_ready_dt }}</td>
                                        {{-- 4td Color Start --}}
                                        <td class="colorFour">{{ $item->al_cutting_dt }}</td>
                                        <td class="colorFour">{{ $item->al_no_of_line }}</td>
                                        <td class="colorFour">{{ $item->al_sewing_prod_line }}</td>
                                        <td class="colorFour">{{ $item->al_sewing_prod_day }}</td>
                                        <td class="colorFour">{{ $item->al_sewing_compl_dt }}</td>
                                        <td class="colorFour">{{ $item->al_finish_compl_dt }}</td>
                                        <td class="colorFour">{{ $item->al_fabric_rejec }}</td>
                                        <td class="colorFour">{{ $item->al_cutting_rejec }}</td>
                                        <td class="colorFour">{{ $item->al_sewing_rejec }}</td>
                                        <td class="colorFour">{{ $item->al_finish_rejec }}</td>
                                        <td class="colorFour">{{ $item->al_dhu }} %</td>
                                        <td class="colorFour">{{ $item->al_final_pack_qty }}</td>
                                        <td class="colorFour">{{ $item->al_excess_short_qty }}</td>
                                        <td class="colorFour">{{ $item->al_final_shipp_qty }}</td>
                                        <td class="colorFour">{{ $item->pl_value }} </td>
            
                                    </tr>
                                    <?php $i++; ?>
                                @empty
                                    <tr>
                                        <td colspan="40" class="text-danger">No Order Found</td>
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
    <script>
        $(function() {
    
    
            var delay = (function() {
                var timer = 0;
                return function(callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
    
    
            //////////////////////
            $(document).on('keypress', '.ajax-data-search', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                }
            });
            //////////////////////
            $(document).on("keyup", ".ajax-data-search", function(e) {
                e.preventDefault();
                var that = $(this);
                var q = e.target.value;
                console.log(q)
                var url = that.attr("data-url");
                var urls = url + '?q=' + q;
                console.log(urls)
    
    
                delay(function() {
                    $.ajax({
                        url: urls,
                        type: 'GET',
                        cache: false,
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response.page);
                            $(".ajax-data-container").empty().append(response.page);
                        },
                        error: function() {}
    
    
                    });
                }, 999);
    
    
    
            });
            //////////////////////admin search end //////////////////
            $(document).on('click', '.ajax-pagination-area .pagination li a', function(e) {
                e.preventDefault();
    
                var url = $(this).attr('href');
    
                $.ajax({
                    url: url,
                    type: 'GET',
                    cache: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response.page)
                        $(".ajax-data-container").empty().append(response.page);
                    },
                    error: function() {}
                });
    
            });
    
        });
    </script>
@endpush
