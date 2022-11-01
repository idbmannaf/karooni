@extends('layouts.master')


@section('content')
    <section class="container">
        <div class="container-fluid">
            <br>

            {{-- MSG --}}
            @include('alert.alerts')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Planned Order</h4>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('orders.index') }}"> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- {!! Form::modal($order,['route' => 'orders.store', 'method' => 'POST', 'files' => true]) !!} --}}
                    {!! Form::model($order, ['route' => ['update.order', $order->id], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('orders.orderForm')
                    {!! Form::close() !!}
                </div>
            </div>


        </div>
    </section>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // $('#po_purch_arecvd_date').dateEntry({dateFormat: 'ymd-'});
            function getFullDate(order_date, day) {
                var date = new Date(order_date);
                date.setDate(date.getDate() + day);

                myDate = date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date
                    .getDate()).slice(-2);
                return myDate;
            }
            $(document).on('keyup', '#delivery_date_interval', function(e) {
                e.preventDefault();

                var pidate = $(this).val();
                $('#po-date').text(pidate);
                var date = new Date();
                myDate = date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' +
                    date.getDate()).slice(-2);
                var order_date = $('#pl_po_purch_recvd_d').val();

                if (pidate == '') {
                    // $('#pl_po_purch_recvd_d').val(null);
                    $('#pl_req_delv_dt').val('');
                    $('#pl_lead_time').val('');
                    $('#pl_yern_recei_s_dt').val('');
                    $('#pl_yern_recei_e_dt').val('');
                    $('#pl_fabric_qlt_sub_dt').val('');
                    $('#pl_fabric_qlt_app_dt').val('');
                    $('#pl_fabric_compo_tst_sub').val('');
                    $('#pl_fabric_compo_tst_app').val('');
                    $('#pl_fabric_qlt_tst_sub').val('');
                    $('#pl_fabric_qlt_tst_app_dt').val('');
                    $('#pl_sss_samp_sub_dt').val('');
                    $('#pl_sss_app_dt').val('');
                    $('#pl_knitting_s_dt').val('');
                    $('#pl_knitting_e_dt').val('');
                    $('#pl_dyeing_s_dt').val('');
                    $('#pl_dyeing_e_dt').val('');
                    $('#pl_sewing_acce_tst_sub').val('');
                    $('#pl_sewing_acce_inhouse_dt').val('');
                    $('#pl_packing_acce_tst_sub').val('');
                    $('#pl_packing_acce_inhouse_dt').val('');
                    $('#pl_cutting_s_dt').val('');
                    $('#pl_cutting_e_dt').val('');
                    $('#pl_print_emb_s_dt').val('');
                    $('#pl_print_emb_e_dt').val('');
                    $('#pl_sewing_s_dt').val('');
                    $('#pl_sewing_e_dt').val('');
                    $('#pl_finish_s_dt').val('');
                    $('#pl_finish_e_dt').val('');
                    $('#pl_midline_inspec_dt').val('');
                    $('#pl_final_inspec_dt').val('');
                    $('#pl_shipment_dt').val('');
                } else {

                    $('#pl_po_purch_recvd_d').val(myDate);
                    $('#pl_req_delv_dt').val(getFullDate(order_date, parseInt(pidate)));

                    var lead_time = parseInt(Math.ceil((pidate * 48) / 50));
                    $('.lead_time').text(lead_time);
                    $('#pl_lead_time').val(getFullDate(order_date, parseInt(lead_time)));

                    var yern_recei_s_dt = parseInt(Math.ceil((pidate * 10) / 50));
                    $('.yern_recei_s_dt').text(yern_recei_s_dt);
                    $('#pl_yern_recei_s_dt').val(getFullDate(order_date, yern_recei_s_dt));

                    var yern_recei_e_dt = parseInt(Math.ceil((pidate * 15) / 50));
                    $('.yern_recei_e_dt').text(yern_recei_e_dt);
                    $('#pl_yern_recei_e_dt').val(getFullDate(order_date, yern_recei_e_dt));

                    var fabric_qlt_sub_dt = parseInt(Math.ceil((pidate * 10) / 50));
                    $('.fabric_qlt_sub_dt').text(fabric_qlt_sub_dt);
                    $('#pl_fabric_qlt_sub_dt').val(getFullDate(order_date, fabric_qlt_sub_dt));

                    var fabric_qlt_app_dt = parseInt(Math.ceil((pidate * 17) / 50));
                    $('.fabric_qlt_app_dt').text(fabric_qlt_app_dt);
                    $('#pl_fabric_qlt_app_dt').val(getFullDate(order_date, fabric_qlt_app_dt));

                    var fabric_compo_tst_sub= parseInt(Math.ceil((pidate * 8) / 50));
                    $('.fabric_compo_tst_sub').text(fabric_compo_tst_sub);
                    $('#pl_fabric_compo_tst_sub').val(getFullDate(order_date, fabric_compo_tst_sub));

                    var fabric_compo_tst_app= parseInt(Math.ceil((pidate * 15) / 50));
                    $('.fabric_compo_tst_app').text(fabric_compo_tst_app);
                    $('#pl_fabric_compo_tst_app').val(getFullDate(order_date, fabric_compo_tst_app));

                    var fabric_qlt_tst_sub= parseInt(Math.ceil((pidate * 8) / 50));
                    $('.fabric_qlt_tst_sub').text(fabric_qlt_tst_sub);
                    $('#pl_fabric_qlt_tst_sub').val(getFullDate(order_date, fabric_qlt_tst_sub));

                    var fabric_qlt_tst_app_dt= parseInt(Math.ceil((pidate * 17) / 50));
                    $('.fabric_qlt_tst_app_dt').text(fabric_qlt_tst_app_dt);
                    $('#pl_fabric_qlt_tst_app_dt').val(getFullDate(order_date, fabric_qlt_tst_app_dt));

                    var sss_samp_sub_d= parseInt(Math.ceil((pidate * 13) / 50));
                    $('.sss_samp_sub_d').text(sss_samp_sub_d);
                    $('#pl_sss_samp_sub_dt').val(getFullDate(order_date, sss_samp_sub_d));

                    var sss_app_dt= parseInt(Math.ceil((pidate * 20) / 50));
                    $('.sss_app_dt').text(sss_app_dt);
                    $('#pl_sss_app_dt').val(getFullDate(order_date, sss_app_dt));

                    var knitting_s_dt= parseInt(Math.ceil((pidate * 14) / 50));
                    $('.knitting_s_dt').text(knitting_s_dt);
                    $('#pl_knitting_s_dt').val(getFullDate(order_date, knitting_s_dt));

                    var knitting_e_dt= parseInt(Math.ceil((pidate * 28) / 50));
                    $('.knitting_e_dt').text(knitting_e_dt);
                    $('#pl_knitting_e_dt').val(getFullDate(order_date, knitting_e_dt));

                    var dyeing_s_dt= parseInt(Math.ceil((pidate * 18) / 50));
                    $('.dyeing_s_dt').text(dyeing_s_dt);
                    $('#pl_dyeing_s_dt').val(getFullDate(order_date, dyeing_s_dt));

                    var dyeing_e_dt= parseInt(Math.ceil((pidate * 32) / 50));
                    $('.dyeing_e_dt').text(dyeing_e_dt);
                    $('#pl_dyeing_e_dt').val(getFullDate(order_date, dyeing_e_dt));

                    var sewing_acce_tst_sub= parseInt(Math.ceil((pidate *13) / 50));
                    $('.sewing_acce_tst_sub').text(sewing_acce_tst_sub);
                    $('#pl_sewing_acce_tst_sub').val(getFullDate(order_date,sewing_acce_tst_sub));

                    var sewing_acce_inhouse_dt= parseInt(Math.ceil((pidate *20) / 50));
                    $('.sewing_acce_inhouse_dt').text(sewing_acce_inhouse_dt);
                    $('#pl_sewing_acce_inhouse_dt').val(getFullDate(order_date, sewing_acce_inhouse_dt));

                    var packing_acce_tst_sub= parseInt(Math.ceil((pidate *15) / 50));
                    $('.packing_acce_tst_sub').text(packing_acce_tst_sub);
                    $('#pl_packing_acce_tst_sub').val(getFullDate(order_date, packing_acce_tst_sub));

                    var packing_acce_inhouse_dt= parseInt(Math.ceil((pidate *30) / 50));
                    $('.packing_acce_inhouse_dt').text(packing_acce_inhouse_dt);
                    $('#pl_packing_acce_inhouse_dt').val(getFullDate(order_date, packing_acce_inhouse_dt));

                    var cutting_s_dt= parseInt(Math.ceil((pidate *25) / 50));
                    $('.cutting_s_dt').text(cutting_s_dt);
                    $('#pl_cutting_s_dt').val(getFullDate(order_date,cutting_s_dt));

                    var cutting_e_dt= parseInt(Math.ceil((pidate *40) / 50));
                    $('.cutting_e_dt').text(cutting_e_dt);
                    $('#pl_cutting_e_dt').val(getFullDate(order_date,cutting_e_dt));

                    var print_emb_s_dt= parseInt(Math.ceil((pidate *26) / 50));
                    $('.print_emb_s_dt').text(print_emb_s_dt);
                    $('#pl_print_emb_s_dt').val(getFullDate(order_date, print_emb_s_dt));

                    var print_emb_e_dt= parseInt(Math.ceil((pidate *42) / 50));
                    $('.print_emb_e_dt').text(print_emb_e_dt);
                    $('#pl_print_emb_e_dt').val(getFullDate(order_date,print_emb_e_dt));

                    var sewing_s_dt= parseInt(Math.ceil((pidate *28) / 50));
                    $('.sewing_s_dt').text(sewing_s_dt);
                    $('#pl_sewing_s_dt').val(getFullDate(order_date,sewing_s_dt));

                    var sewing_e_dt= parseInt(Math.ceil((pidate *44) / 50));
                    $('.sewing_e_dt').text(sewing_e_dt);
                    $('#pl_sewing_e_dt').val(getFullDate(order_date,sewing_e_dt));

                    var finish_s_dt= parseInt(Math.ceil((pidate *29) / 50));
                    $('.finish_s_dt').text(finish_s_dt);
                    $('#pl_finish_s_dt').val(getFullDate(order_date, finish_s_dt));

                    var finish_e_dt= parseInt(Math.ceil((pidate *46) / 50));
                    $('.finish_e_dt').text(finish_e_dt);
                    $('#pl_finish_e_dt').val(getFullDate(order_date, finish_e_dt));

                    var midline_inspec_dt= parseInt(Math.ceil((pidate *34) / 50));
                    $('.midline_inspec_dt').text(midline_inspec_dt);
                    $('#pl_midline_inspec_dt').val(getFullDate(order_date, midline_inspec_dt));

                    var final_inspec_dt= parseInt(Math.floor((pidate *48) / 50));
                    $('.final_inspec_dt').text(final_inspec_dt);
                    $('#pl_final_inspec_dt').val(getFullDate(order_date, final_inspec_dt));

                    var shipment_dt= parseInt(Math.ceil((pidate *49) / 50));
                    $('.shipment_dt').text(shipment_dt);
                    $('#pl_shipment_dt').val(getFullDate(order_date,shipment_dt));
                }
            });


            $('#pl_po_purch_recvd_d').change(function() {
                var order_date = $(this).val();
                var intervention_date = $('#delivery_date_interval').val();
                
                // alert(order_date);

                $('#pl_req_delv_dt').val(getFullDate(order_date, parseInt(intervention_date)));

                var lead_time = parseInt($('.lead_time').text());
                $('#pl_lead_time').val(getFullDate(order_date, parseInt(lead_time)));

                var yern_recei_s_dt = parseInt($('.yern_recei_s_dt').text());
                $('#pl_yern_recei_s_dt').val(getFullDate(order_date, parseInt(yern_recei_s_dt)));

                    var yern_recei_e_dt = parseInt($('.yern_recei_e_dt').text());
                $('#pl_yern_recei_e_dt').val(getFullDate(order_date, parseInt(yern_recei_e_dt)));

                    var fabric_qlt_sub_dt = parseInt($('.fabric_qlt_sub_dt').text());
                $('#pl_fabric_qlt_sub_dt').val(getFullDate(order_date, parseInt(fabric_qlt_sub_dt)));


                    var fabric_qlt_app_dt = parseInt($('.fabric_qlt_app_dt').text());
                $('#pl_fabric_qlt_app_dt').val(getFullDate(order_date, parseInt(fabric_qlt_app_dt)));

                    var fabric_compo_tst_sub = parseInt($('.fabric_compo_tst_sub').text());
                $('#pl_fabric_compo_tst_sub').val(getFullDate(order_date, parseInt(fabric_compo_tst_sub)));


                var fabric_compo_tst_app = parseInt($('.fabric_compo_tst_app').text());
                $('#pl_fabric_compo_tst_app').val(getFullDate(order_date, parseInt(fabric_compo_tst_app)));

                    var fabric_qlt_tst_sub = parseInt($('.fabric_qlt_tst_sub').text());
                $('#pl_fabric_qlt_tst_sub').val(getFullDate(order_date, parseInt(fabric_qlt_tst_sub)));

                    var fabric_qlt_tst_app_dt= parseInt($('.fabric_qlt_tst_app_dt').text());
                $('#pl_fabric_qlt_tst_app_dt').val(getFullDate(order_date, parseInt(fabric_qlt_tst_app_dt)));

                    var sss_samp_sub_dt = parseInt($('.sss_samp_sub_d').text());
                $('#pl_sss_samp_sub_dt').val(getFullDate(order_date, parseInt(sss_samp_sub_dt)));

                    var sss_app_dt = parseInt($('.sss_app_dt').text());
                $('#pl_sss_app_dt').val(getFullDate(order_date, parseInt(sss_app_dt)));


                    var knitting_s_dt = parseInt($('.knitting_s_dt').text());
                $('#pl_knitting_s_dt').val(getFullDate(order_date, parseInt(knitting_s_dt)));


                    var knitting_e_dt = parseInt($('.knitting_e_dt').text());
                $('#pl_knitting_e_dt').val(getFullDate(order_date, parseInt(knitting_e_dt)));

                    var dyeing_s_dt = parseInt($('.dyeing_s_dt').text());
                $('#pl_dyeing_s_dt').val(getFullDate(order_date, parseInt(dyeing_s_dt)));

                    var dyeing_e_dt = parseInt($('.dyeing_e_dt').text());
                $('#pl_dyeing_e_dt').val(getFullDate(order_date, parseInt(dyeing_e_dt)));

                    var sewing_acce_tst_sub = parseInt($('.sewing_acce_tst_sub').text());
                $('#pl_sewing_acce_tst_sub').val(getFullDate(order_date, parseInt(sewing_acce_tst_sub)));

                var sewing_acce_inhouse_dt = parseInt($('.sewing_acce_inhouse_dt').text());
                $('#pl_sewing_acce_inhouse_dt').val(getFullDate(order_date, parseInt(sewing_acce_inhouse_dt)));

                    var packing_acce_tst_sub = parseInt($('.packing_acce_tst_sub').text());
                $('#pl_packing_acce_tst_sub').val(getFullDate(order_date, parseInt(packing_acce_tst_sub)));

                    var packing_acce_inhouse_dt = parseInt($('.packing_acce_inhouse_dt').text());
                $('#pl_packing_acce_inhouse_dt').val(getFullDate(order_date, parseInt(packing_acce_inhouse_dt)));

                    var cutting_s_dt = parseInt($('.cutting_s_dt').text());
                $('#pl_cutting_s_dt').val(getFullDate(order_date, parseInt(cutting_s_dt)));

                    var cutting_e_dt = parseInt($('.cutting_e_dt').text());
                $('#pl_cutting_e_dt').val(getFullDate(order_date, parseInt(cutting_e_dt)));

                    var print_emb_s_dt = parseInt($('.print_emb_s_dt').text());
                $('#pl_print_emb_s_dt').val(getFullDate(order_date, parseInt(print_emb_s_dt)));

                    var print_emb_e_dt = parseInt($('.print_emb_e_dt').text());
                $('#pl_print_emb_e_dt').val(getFullDate(order_date, parseInt(print_emb_e_dt)));

                    var sewing_s_dt = parseInt($('.sewing_s_dt').text());
                $('#pl_sewing_s_dt').val(getFullDate(order_date, parseInt(sewing_s_dt)));
                    var sewing_e_dt = parseInt($('.sewing_e_dt').text());
                $('#pl_sewing_e_dt').val(getFullDate(order_date, parseInt(sewing_e_dt)));
                    var finish_s_dt = parseInt($('.finish_s_dt').text());
                $('#pl_finish_s_dt').val(getFullDate(order_date, parseInt(finish_s_dt)));

                    var finish_e_dt = parseInt($('.finish_e_dt').text());
                $('#pl_finish_e_dt').val(getFullDate(order_date, parseInt(finish_e_dt)));

                    var midline_inspec_dt = parseInt($('.midline_inspec_dt').text());
                $('#pl_midline_inspec_dt').val(getFullDate(order_date, parseInt(midline_inspec_dt)));

                var final_inspec_dt = parseInt($('.final_inspec_dt').text());
                $('#pl_final_inspec_dt').val(getFullDate(order_date, parseInt(final_inspec_dt)));

                    var shipment_dt = parseInt($('.shipment_dt').text());
                $('#pl_shipment_dt').val(getFullDate(order_date, parseInt(shipment_dt)));
            });
            var i = 0;
            $('#addMore').click(function() {
                ++i;
                $('#dynamicColor').prepend(
                    '<div class="row"><div class="col-md-3"> <div class="form-group"><label for="pl_color_name"><strong> Color Name</strong></label><input type="text" name="pl_color_name[' +
                    i +
                    ']" class="form-control" id="pl_color_name" placeholder="Color name"/></div></div><div class="col-md-3"><div class="form-group"><label for="pl_color_wise_qty"><strong> Colour wise Quantity</strong></label><input type="text" name="pl_color_wise_qty[' +
                    i +
                    ']" class="form-control" id="pl_color_wise_qty" placeholder="Color Wise Quantity"/></div></div><div class="col-md-3"><div class="form-group"><label for="pl_color_wise_qty"><strong> Print Name</strong></label><input type="text" name="pl_print_name[' +
                    i +
                    ']" class="form-control" id="pl_print_name" placeholder="Print namey"/></div></div><div class="col-md-3"><label for=""></label><input type="button" style="margin-top:28px;" class="name2 btn btn-danger" name="remove" id="remove" value="Remove "></div></div>'
                );
            });

            $(document).on('click', '#remove', function() {
                $(this).parent().parent().remove()
                //  console.log($(this).parent().parent().remove())
            });
            var delivery_date_interval = $('#delivery_date_interval').val();
            if (empty(delivery_date_interval)) {
                alert("Empty");
            }

        });
    </script>

@endpush
