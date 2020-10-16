
<body>
    <div class="mobile-menu-overlay"></div>

    <!-- Main content -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Invoice List start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Invoice List</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th class="table-plus datatable-nosort">Sales Register ID#</th>
                                    <th class="table-plus datatable-nosort">Invoice ID#</th>
                                    <th class="table-plus datatable-nosort">Billing To</th>
                                    <th class="table-plus datatable-nosort">Total Amount</th>
                                    <th class="table-plus datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $cnt=1;
                                foreach($list as $row):?>
                                <tr>
                                    <td><?php  echo $cnt++ ?></td>
                                    <td><?php echo $row->i_regid ?></td>
                                    <td><?php echo $row->i_invno ?></td>
                                    <td><?php echo $row->i_billname ?></td>
                                    <td><?php echo "490" ?></td>
                                    <td>
                                       <a href="<?php echo base_url('Invoice/viewpdf/'.$row->i_id.'');  ?>"> <button type="button" class="btn btn-link" >view</button></a>
                                    </td>
                                    <!-- data-toggle="modal" data-target="#bd-example-modal-lg" data-backdrop="static" -->
                                </tr>
                                <?php  endforeach; ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Invoice List End -->
            </div>
        </div>
    </div>





    <!-- Created Invoice form modal -->
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 left-side">

                            </div>
                            <div class="col-md-4 no-padding">
                            </div>
                            <div class="col-md-6">
                                <h3 class="right-invoice">Invoice #</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="right-img">
                                    <img src="<?php echo base_url() ?>assets/vendors/images/paid.png" class="img-fluid paid-img" alt="Paid Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="modal-body custom-body">
                    <div class="container-fluid">

                        <form class="invoice-form">
                            <fieldset disabled="disabled">
                                <div class="form-group">

                                    <div class="row mb-2">
                                        <label class="col-md-3 inv-title">Invoice #</label>
                                        <div class="col-md-3 no-padding">
                                            <input type="text" class="input-txt-invoice" placeholder="Enter Invoice Number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-md-3 sale-title">Sales Register ID #</label>
                                        <div class="col-md-3 no-padding">
                                            <input type="text" class="input-txt-invoice" placeholder="1223454" name="" id="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="inv-hr"></div>

                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label class="">Billing Name:</label>
                                        <input type="text" class="form-control input-txt-invoice" name="" id="" placeholder="Raghuveer Singh" disabled>

                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                        <div class="row rowww">
                                            <div class="col-sm-12 col-md-12">
                                                <label class="">Billing Address:</label>
                                                <textarea class="form-control bil-addr" rows="1" name="" id="" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2">Mobile No</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="" name="" id="" require>
                                    </div>
                                    <label class="col-md-1">Email ID</label>
                                    <div class="col-md-5">
                                        <input type="email" class="form-control" placeholder="" name="" id="" require>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-md-2">Shop Name:</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="" name="" id="" require>
                                    </div>
                                    <label class="col-md-1">Shop Address</label>
                                    <div class="col-md-5">
                                        <textarea class="form-control bil-addr" rows="1" name="" id="" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2">Issue Date:</label>
                                    <div class="col-md-4">
                                        <input type="date" class="custom-date" name="" id="" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2">Expire Date:</label>
                                    <div class="col-md-4">
                                        <input type="date" class="custom-date" name="" id="" />
                                    </div>
                                </div>


                                <div class="inv-hr"></div>
                                <div class="row form-group">
                                    <div class="col-md-10">
                                        <textarea class="form-control bil-addr" placeholder="Enter a  Brief Description or Summary" rows="1"></textarea>
                                    </div>
                                </div>
                            </fieldset>


                        </form>
                        <div class="inv-hr1"></div>

                        <div class="row drqt">
                            <div class="col-md-4">
                                <span>Discription</span>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <span>Rate/Item</span>
                            </div>
                            <div class="col-md-2">
                                <span>QTY</span>
                            </div>
                            <div class="col-md-2">
                                <span>Total</span>
                            </div>
                        </div>
                        <div class="row select-item">
                            <div class="col-md-4">
                                <label class="">Select an item:</label>
                                <select class="selectpicker form-control inv-cust-border" data-size="5">
                                    <option disabled>Select item</option>
                                    <option>abcd</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                </select>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p>Rs. 499.00</p>
                            </div>
                            <div class="col-md-2">
                                <p>1</p>
                            </div>
                            <div class="col-md-2">
                                <p>RS. 499.00</p>
                            </div>

                            <div class="col-md-2"></div>
                        </div>

                        <div class="row select-item1">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-2">
                                <p>Sub Total</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p>Rs 499.00</p>
                            </div>
                        </div>

                        <div class="row select-item1">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-2">
                                <p>Total Tax</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p>Rs 0.00</p>
                            </div>
                        </div>

                        <div class="row select-item1">
                            <div class="col-md-6"> </div>
                            <div class="col-md-2">
                                <p style="font-weight: 600;">Total</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p style="font-weight: 600;">Rs 499.00</p>
                            </div>
                        </div>
                        <div class="row select-item1">
                            <div class="col-md-6"> </div>
                            <div class="col-md-2">
                                <p style="color: green;">Amount Paid</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p style="color: green;">Rs 499.00</p>
                            </div>
                        </div>

                        <div class="row select-item1">
                            <div class="col-md-6"> </div>
                            <div class="col-md-2">
                                <p style="font-weight: 600;">Amount Due</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <p style="font-weight: 600;">Rs 0.00</p>
                            </div>
                        </div>

                        <div class="inv-hr"></div>
                        <div class="row">
                            <div class="col-md-7">
                                <label for="">Customer Note:</label>
                                <textarea class="form-control" rows="4" name="" id="" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="inv-hr"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Terms and conditions</p>
                                <ul>
                                    <li>1.&nbsp;&nbsp; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore odio nihil aut veniam.
                                        Laborum magnam mollitia sequi incidunt, nemo quibusdam iste cum deleniti in corrupti molestiae minima, vitae ullam blanditiis.</li>
                                    <li>2.&nbsp;&nbsp; perperljjdwg;iBFGPIUBSF;JGBAUIFGINDFper</li>
                                    <li>3.&nbsp;&nbsp; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore odio nihil aut veniam.
                                        Laborum magnam mollitia sequi incidunt, nemo quibusdam iste cum deleniti in corrupti molestiae minima, vitae ullam blanditiis</li>
                                    <li>4.&nbsp;&nbsp; perperljjdwg;iBFGPIUBSF;JGBAUIFGINDFper</li>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer custon-footer">
                    <button type="button" class="on-cancel-btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="ok-btn" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>