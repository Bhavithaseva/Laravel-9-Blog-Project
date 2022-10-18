<div id="main-wrapper">
    <?php include('header.php'); ?>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <?php include('leftmenu.php'); ?>
    </aside>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit</h4>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('vendors.update',$vendors->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">



                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="vendor_name" value="{{ $vendors->vendor_name }}" class="form-control" id="fname" placeholder="Name">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">LUT Number</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="lut_number" value="" class="form-control" id="fname" placeholder="LUT Number">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">LUT Notes</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="lut_notes" value="" class="form-control" id="fname" placeholder="LUT Notes">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="email" value="" class="form-control" id="fname" placeholder="Email">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="mobile" value="" class="form-control" id="fname" placeholder="Mobile">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="address" value="" class="form-control" id="address" placeholder="Address">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Country</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <?php
                                        // $js = 'id="country" onchange="return fetchdepartments(this.value)" class=" select2 form-control custom-select"';
                                        // echo form_dropdown('country', $this->dropdownclass->getcountries(), set_value('country'), $js); 
                                        ?>


                                    </div>
                                </div>
                                <div id="state" class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">State</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <?php
                                        // $js = 'id="state" class="select2 form-control custom-select"';
                                        // echo form_dropdown('state', $this->dropdownclass->getstates(), set_value('state'), $js); 
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">City</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="city" value="" class="form-control" id="city" placeholder="City">

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Pincode</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="pincode" value="" class="form-control" id="pincode" placeholder="Pincode">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Same Address as above</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="checkbox" onClick="FillBilling(this.form)" name="samec">

                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function FillBilling(fm) {


                                        //alert(fm);

                                        if (fm.samec.checked == true) {


                                            fm.saddress.value = fm.address.value;
                                            fm.slocation.value = fm.location.value;
                                            fm.scity.value = fm.city.value;
                                            fm.sstate.value = fm.state.value;
                                            fm.scountry.value = fm.country.value;
                                            fm.spincode.value = fm.pincode.value;


                                            //alert(result);


                                        } else {
                                            fm.saddress.value = "";
                                            fm.slocation.value = "";
                                            fm.scity.value = "";
                                            fm.sstate.value = "";
                                            fm.scountry.value = "";
                                            fm.spincode.value = "";

                                        }
                                    }
                                </script>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ship Address</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="ship_address" value="" class="form-control" id="saddress" placeholder="Address">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ship City</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="ship_city" value="" class="form-control" id="scity" placeholder="City">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ship State</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <?php
                                        // $js = 'id="sstate" class="select2 form-control custom-select"';
                                        // echo form_dropdown('ship_state', $this->dropdownclass->getstates(), set_value('ship_state'), $js); 
                                        ?>


                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ship Country</label>
                                    <div class="col-sm-9" style="max-width: 50%;">

                                        <?php
                                        // $js = 'id="scountry" class="select2 form-control custom-select"';
                                        // echo form_dropdown('ship_country', $this->dropdownclass->getcountries(), set_value('ship_country'), $js); 
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ship Pincode</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="ship_pincode" value="" class="form-control" id="spincode" placeholder="Pincode">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">GST</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="gst_number" value="" class="form-control" id="fname" placeholder="GST Number">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">PAN</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="pan" value="" class="form-control" id="fname" placeholder="PAN Number">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">CIN</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="text" name="cin" value="" class="form-control" id="fname" placeholder="CIN">

                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Logo</label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="file" class="form-control" name="logo" value="" id="lname" placeholder="">
                                        (Width x Height : 300 x 300)

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    <div class="col-sm-9" style="max-width: 50%;">
                                        <input type="hidden" name="vendor_id" value="<?php echo $rec_editvendor['vendor_id']; ?>">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>


                </div>

            </div>
            <!-- editor -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('footer.php'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>