
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
