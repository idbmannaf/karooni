{{-- 1st Color Section --}}
<th>Planned & Actual</th>
<th>Sl No.</th>
<th>PO No</th> //phurches order number
<th>Buyer</th>
<th>PO date</th>
<th>Shipment date</th>
<th>Order Quantity</th>
<th>Style No</th>
<th>Picture</th>
<th>Garment Details</th>
<th>Garment SMV</th>
<th>Fabric Consumption Kg/dzn</th>
<th> Fabric Details </th>
<th>Yarn Details</th>
{{-- //2nd Color Start --}}
<th>Color name</th>
<th>Colour Wize Quantity</th>
<th>Print Name</th>
<th>Sewing Acc Details</th>
<th>Packing Acc Details</th>
<th>BulkFabric Quality Approval date</th>
<th>Lab dip Approval Date</th>
<th>Print Approval Date</th>
{{-- 3rd Color Start --}}
<th>Garment Approval Date</th>
<th>PP Approval Date</th>
<th>Size set Approval Date</th>
<th>Yarn RF No</th>
<th>Yarn Quantity</th>
<th>Fabric Quantity</th>
<th>Fabric Ready date</th>
{{-- 4th Color Start --}}
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
<th>Value</th>
<th class="wid" width="200">Action</th>


{{-- /////////////////////////////// --}}
{{-- 1st Color Section --}}
<td>Planned</td>
<td>{{ $item->id }}</td>
<td>{{ $item->order_no }}</td> //phurches order number
<td>{{ $item->buyer->name }}</td>
<td>{{ $item->pl_po_purch_recvd_d }}</td>
<td>{{ $item->pl_shipment_dt }}</td>
<td>{{ $item->pl_quantity }}</td>
<td>{{ $item->style_no }}</td>
<td>{{ $item->pl_picture }}</td>
<td>{{ $item->pl_germent_details }}</td>
<td>{{ $item->pl_germents_smv }}</td>
<td>{{ $item->pl_fabric_consumtion }}</td>
<td>Fabric Details </td>
<td>Yarn Details</td>
{{-- //2nd Color Start --}}
<td>{{ $item->pl_color_name }}</td>
<td>{{ $item->pl_color_wise_qty }}</td>
<td>{{ $item->pl_print_name }}</td>
<td>{{ $item->pl_sewing_acc_dets }}</td>
<td>{{ $item->pl_packing_acc_dets }}</td>
<td>{{ $item->pl_buld_fab_qlt_app_dt }}</td>
<td>{{ $item->pl_lab_dip_app_dt }}</td>
<td>{{ $item->pl_print_app_dt }}</td>
{{-- 3rd Color Start --}}
<td>{{ $item->pl_garments_app_dt }}</td>
<td>{{ $item->pl_pp_app_dt }}</td>
<td>{{ $item->pl_size_set_app_dt }}</td>
<td>{{ $item->pl_yarn_rf_no }}</td>
<td>{{ $item->pl_yarn_qty }}</td>
<td>{{ $item->pl_fabric_qty }}</td>
<td>{{ $item->pl_fabric_ready_dt }}</td>
{{-- 4td Color Start --}}
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
<td>{{ $item->pl_dhu }} %</td>
<td>{{ $item->pl_final_pack_qty }}</td>
<td>{{ $item->pl_excess_short_qty }}</td>
<td>{{ $item->pl_final_shipp_qty }}</td>
<td>$item->pl_value </td>
<td class="wid" widtd="200">Action</td>