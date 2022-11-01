<?php $i = 1; ?>

<?php $i = ($data->currentPage() - 1) * $data->perPage() + 1; ?>
@forelse ($data as $item)
    <tr class="nowrap">
        <td>{{ $i }}</td>
        <td>Planned</td>
        <td width="200" valign="center">
            <?php
            $me = Auth::user();
            ?>
            @if ($me->hasRole('Admin'))
                <a class="btn w3-purple btn-xs"
                    href="{{ route('editPlannedOrder', ['order' => $item->id]) }}">Edit
                    Planned Info</a>
            @endif
        </td>
        <td>{{ $item->order_no }}</td>
        {{-- <td>{{ $item->buyer->name?$item->buyer->name:'5' }}</td> --}}
        <td>
            @if (isset($item->buyer))
                {{ $item->buyer->name }}
            @endif
        </td>
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
            {!! Form::open(['route' => ['orders.destroy', $item->id], 'method' => 'delete', 'class' => 'd-inline']) !!}
            <input type="hidden" name="order_id" value="{{ $item->id }}">
            <input class="btn btn-danger btn-xs" type="submit" value="Delete">
            {!! Form::close() !!}
            <a class="btn btn-warning btn-xs"
                href="{{ route('buyerOrdersList', ['buyer' => $item->buyer_id ?? 0]) }}">Buyers
                Order</a>
            {{-- <a class="btn btn-danger btn-xs"
                href="{{ route('orders.destroy', ['order' => $item->id]) }}">Delete</a> --}}
        </td>
        <td>{{ $item->order_no }}</td>
        {{-- <td>{{ $item->buyer->name }}</td> --}}
        {{-- <td>{{ $item->buyer->name?$item->buyer->name:'5' }}</td> --}}
        <td>
            @if (isset($item->buyer))
                {{ $item->buyer->name }}
            @endif
        </td>
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