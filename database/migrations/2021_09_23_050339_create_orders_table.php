<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
     * pl : Planned
     * ac:Actual
     * dt: Date
     * s: Start
     * e: End
     * delv: Devlivery Date
     * qlt:quality
     * sub:submission
     * app:approval
     * tst:test
     * samp: Sample
     * inspec: Inspection
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->nullable();
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->string('style_no')->nullable();

            //Planned Section 
            $table->text('pl_germent_details')->nullable();
            $table->text('pl_fabric_details')->nullable();
            $table->text('pl_yern_details')->nullable();
            $table->text('pl_trim_details')->nullable();
            $table->decimal('pl_quantity', 10, 2)->nullable();
            $table->date('pl_po_purch_recvd_d')->nullable(); // Purches Order Received Date
            $table->date('pl_req_delv_dt')->nullable(); // Required Delivery Date
            $table->date('pl_lead_time')->nullable();
            $table->date('pl_yern_recei_s_dt')->nullable(); // Yearn Received  Start Date
            $table->date('pl_yern_recei_e_dt')->nullable(); // Yearn Received  End Date
            $table->date('pl_fabric_qlt_sub_dt')->nullable(); //  Fabric Quality Subbmission Date
            $table->date('pl_fabric_qlt_app_dt')->nullable(); //  Fabric Quality Approval Submission Date
            $table->date('pl_fabric_compo_tst_sub')->nullable(); // Fabric Composition Test Submission
            $table->date('pl_fabric_compo_tst_app')->nullable(); // Fabric Composition Test Approval 
            $table->date('pl_fabric_qlt_tst_sub')->nullable(); // Fabric Quality Test Submission
            $table->date('pl_fabric_qlt_tst_app_dt')->nullable(); // Fabric Quality Test Approval Date
            $table->date('pl_sss_samp_sub_dt')->nullable(); // SSS Sample Submission Date
            $table->date('pl_sss_app_dt')->nullable(); // SSS Approval Date 
            $table->date('pl_knitting_s_dt')->nullable(); // Knitting Start Date 
            $table->date('pl_knitting_e_dt')->nullable(); //  Knitting End Date
            $table->date('pl_dyeing_s_dt')->nullable(); // Dyeing Start Date
            $table->date('pl_dyeing_e_dt')->nullable(); // Dyeing End Date
            $table->date('pl_sewing_acce_tst_sub')->nullable(); // Sewing Accessories Test Subbmission
            $table->date('pl_sewing_acce_inhouse_dt')->nullable(); //Sewing Accessories Inhouse Date
            $table->date('pl_packing_acce_tst_sub')->nullable(); // Packing Accessories Test Submission
            $table->date('pl_packing_acce_inhouse_dt')->nullable(); // Packing Accessories Inhouse Date
            $table->date('pl_cutting_s_dt')->nullable(); //  Cutting Start Date
            $table->date('pl_cutting_e_dt')->nullable(); // Cutting End Date
            $table->date('pl_print_emb_s_dt')->nullable(); //  Print/EMB Start Date
            $table->date('pl_print_emb_e_dt')->nullable(); //  Print/EMB End Date
            $table->date('pl_sewing_s_dt')->nullable(); //  Sewing Start Date
            $table->date('pl_sewing_e_dt')->nullable(); //  Sewing End Date
            $table->date('pl_finish_s_dt')->nullable(); //  Finishing Start Date 
            $table->date('pl_finish_e_dt')->nullable(); //  Finishing End Date 
            $table->date('pl_midline_inspec_dt')->nullable(); //  Mid Line Inspaction Date
            $table->date('pl_final_inspec_dt')->nullable(); // Final Inspaction Date
            $table->date('pl_shipment_dt')->nullable(); // Shipped Date

            //Next Instruction
            $table->string('pl_picture')->nullable();  
            $table->string('pl_germents_smv')->nullable();  //  Garment  SMV
            $table->string('pl_fabric_consumtion')->nullable();  //  Fabric  Consumption  Kg/dzn
            $table->string('pl_sewing_acc_dets')->nullable(); //Sewing Acc Details
            $table->string('pl_packing_acc_dets')->nullable(); //Packing Acc  Details
            $table->date('pl_buld_fab_qlt_app_dt')->nullable(); //BulkFabric Quality Approval date
            $table->date('pl_lab_dip_app_dt')->nullable(); // Lab dip Approval  Date
            $table->date('pl_print_app_dt')->nullable(); // Print Approval Date
            $table->date('pl_garments_app_dt')->nullable(); // Garment Approval Date
            $table->date('pl_pp_app_dt')->nullable(); // PP Approval Date
            $table->date('pl_size_set_app_dt')->nullable(); // Size set  Approval Date
            $table->string('pl_yarn_rf_no')->nullable(); // Yarn RF No
            $table->string('pl_yarn_qty')->nullable(); // Yarn Quantity
            $table->string('pl_fabric_qty')->nullable(); // Fabric Quantity
            $table->date('pl_fabric_ready_dt')->nullable(); // Fabric Ready date
            $table->date('pl_cutting_dt')->nullable(); //Cutting date
            $table->string('pl_no_of_line')->nullable(); // No. of Lines
            $table->string('pl_sewing_prod_line')->nullable(); // Sewing Prod Line
            $table->date('pl_sewing_prod_day')->nullable(); // Sewing prod day
            $table->date('pl_sewing_compl_dt')->nullable(); // Sewing Completion  Date
            $table->date('pl_finish_compl_dt')->nullable(); // Finishing  Completion Date
            $table->string('pl_fabric_rejec')->nullable(); // Fabric rejections
            $table->string('pl_cutting_rejec')->nullable(); // Cutting Rejections
            $table->string('pl_sewing_rejec')->nullable(); // Sewing Rejections
            $table->string('pl_finish_rejec')->nullable(); // Finishing Rejections
            $table->string('pl_dhu')->nullable(); //DHU %
            $table->string('pl_final_pack_qty')->nullable(); // Final Packed Quantity
            $table->string('pl_excess_short_qty')->nullable(); // Excess / Short Quantity
            // $table->date('pl_final_inspec_dt')->nullable(); // Final  Inspection Date 
            $table->string('pl_final_shipp_qty')->nullable(); // Final Shipped Quantity
            $table->string('pl_value')->nullable(); // Value

            
            //Actual Section 
            $table->text('al_germent_details')->nullable();
            $table->text('al_fabric_details')->nullable();
            $table->text('al_yern_details')->nullable();
            $table->text('al_trim_details')->nullable();
            $table->decimal('al_quantity', 10, 2)->nullable();
            $table->date('al_po_purch_recvd_d')->nullable(); //Purches Order Received Date
            $table->date('al_req_delv_dt')->nullable(); // Required Delivery Date
            $table->date('al_lead_time')->nullable();
            $table->date('al_yern_recei_s_dt')->nullable(); //Yearn Received  Start Date
            $table->date('al_yern_recei_e_dt')->nullable(); //Yearn Received  End Date
            $table->date('al_fabric_qlt_sub_dt')->nullable(); // Fabric Quality Subbmission Date
            $table->date('al_fabric_qlt_app_dt')->nullable(); // Fabric Quality Approval Submission Date
            $table->date('al_fabric_compo_tst_sub')->nullable(); //Fabric Composition Test Submission
            $table->date('al_fabric_compo_tst_app')->nullable(); //Fabric Composition Test Approval 
            $table->date('al_fabric_qlt_tst_sub')->nullable(); //Fabric Quality Test Submission
            $table->date('al_fabric_qlt_tst_app_dt')->nullable(); //Fabric Quality Test Approval Date
            $table->date('al_sss_samp_sub_dt')->nullable(); //SSS Samale Submission Date
            $table->date('al_sss_app_dt')->nullable(); //SSS Approval Date 
            $table->date('al_knitting_s_dt')->nullable(); //Knitting Start Date 
            $table->date('al_knitting_e_dt')->nullable(); // Knitting End Date
            $table->date('al_dyeing_s_dt')->nullable(); //Dyeing Start Date
            $table->date('al_dyeing_e_dt')->nullable(); //Dyeing End Date
            $table->date('al_sewing_acce_tst_sub')->nullable(); //Sewing Accessories Test Subbmission
            $table->date('al_sewing_acce_inhouse_dt')->nullable(); //Sewing Accessories Inhouse Date
            $table->date('al_packing_acce_tst_sub')->nullable(); //Packing Accessories Test Submission
            $table->date('al_packing_acce_inhouse_dt')->nullable(); //Packing Accessories Inhouse Date
            $table->date('al_cutting_s_dt')->nullable(); // Cutting Start Date
            $table->date('al_cutting_e_dt')->nullable(); //Cutting End Date
            $table->date('al_print_emb_s_dt')->nullable(); // Print/EMB Start Date
            $table->date('al_print_emb_e_dt')->nullable(); // Print/EMB Start Date
            $table->date('al_sewing_s_dt')->nullable(); // Sewing Start Date
            $table->date('al_sewing_e_dt')->nullable(); // Sewing End Date
            $table->date('al_finish_s_dt')->nullable(); // Finishing Start Date 
            $table->date('al_finish_e_dt')->nullable(); // Finishing End Date 
            $table->date('al_midline_inspec_dt')->nullable(); // Mid Line Inspaction Date
            $table->date('al_final_inspec_dt')->nullable(); //Final Inspaction Date
            $table->date('al_shipment_dt')->nullable(); //Shipped Date

            //Next instruction
            $table->string('al_picture')->nullable();  
            $table->string('al_germents_smv')->nullable();  //  Garment  SMV
            $table->string('al_fabric_consumtion')->nullable();  //  Fabric  Consumption  Kg/dzn
            $table->string('al_color_name')->nullable();  //  Color Name
            $table->string('al_color_wise_qty')->nullable();  //  Colour wise  Quantity
            $table->string('al_print_name')->nullable();  //  Print name
            $table->string('al_sewing_acc_dets')->nullable(); //Sewing Acc Details
            $table->string('al_packing_acc_dets')->nullable(); //Packing Acc  Details
            $table->date('al_buld_fab_qlt_app_dt')->nullable(); //BulkFabric Quality Approval date
            $table->date('al_lab_dip_app_dt')->nullable(); // Lab dip Approval  Date
            $table->date('al_print_app_dt')->nullable(); // Print Approval Date
            $table->date('al_garments_app_dt')->nullable(); // Garment Approval Date
            $table->date('al_pp_app_dt')->nullable(); // PP Approval Date
            $table->date('al_size_set_app_dt')->nullable(); // Size set  Approval Date
            $table->string('al_yarn_rf_no')->nullable(); // Yarn RF No.
            $table->string('al_yarn_qty')->nullable(); // Yarn Quantity
            $table->string('al_fabric_qty')->nullable(); // Fabric Quantity
            $table->date('al_fabric_ready_dt')->nullable(); // Fabric Ready date
            $table->date('al_cutting_dt')->nullable(); //Cutting date
            $table->string('al_no_of_line')->nullable(); // No. of Lines
            $table->string('al_sewing_prod_line')->nullable(); // Sewing Prod Line
            $table->date('al_sewing_prod_day')->nullable(); // Sewing prod day
            $table->date('al_sewing_comal_dt')->nullable(); // Sewing Comaletion  Date
            $table->date('al_finish_comal_dt')->nullable(); // Finishing  Comaletion Date
            $table->string('al_fabric_rejec')->nullable(); // Fabric rejections
            $table->string('al_cutting_rejec')->nullable(); // Cutting Rejections
            $table->string('al_sewing_rejec')->nullable(); // Sewing Rejections
            $table->string('al_finish_rejec')->nullable(); // Finishing Rejections
            $table->string('al_dhu')->nullable(); //DHU %
            $table->string('al_final_pack_qty')->nullable(); // Final Packed Quantity
            $table->string('al_excess_short_qty')->nullable(); // Excess / Short Quantity
            // $table->date('al_final_inspec_dt')->nullable(); // Final  Inspection Date 
            $table->string('al_final_shipp_qty')->nullable(); // Final Shipped Quantity
            $table->string('al_value')->nullable(); // Value
            $table->bigInteger('addedby_id')->unsigned()->nullable();
            $table->bigInteger('editedby_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
