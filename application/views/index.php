
<body>
    <div class="mobile-menu-overlay"></div>

    <!-- Main content -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="pd-20 card-box mb-30" id="invoice-form">
                <div class="row">
                    <div class="col-md-2 left-side"></div>
                    <div class="col-md-4 no-padding"> </div>
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

                <form class="invoice-form" action="<?php echo base_url('Invoice/send');  ?>" method="post">
                    <div class="form-group">

                        <div class="row mb-2">
                            <label class="col-md-3 inv-title">Invoice #</label>
                            <div class="col-md-3 no-padding">
                                <input type="text" class="input-txt-invoice" placeholder="Enter Invoice Number" name="i_invno" id="">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-md-3 sale-title">Sales Registration ID #</label>
                            <div class="col-md-3 no-padding">
                                <input type="text" class="input-txt-invoice" placeholder="1223454" value="1223454" name="i_regid" id="" >
                            </div>
                        </div>
                    </div>

                    <div class="inv-hr"></div>

                    <div class="row form-group">
                        <div class="col-md-5">
                            <label class="">Billing Name:</label>
                            <input type="text" class="form-control input-txt-invoice" name="i_billname" id="" placeholder="Raghuveer Singh" value="Raghuveer Singh" >

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <div class="row rowww">
                                <div class="col-sm-12 col-md-12">
                                    <label class="">Billing Address:</label>
                                    <textarea class="form-control bil-addr" rows="1" name="i_billaddress" id="" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-2">Mobile No</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="" name="i_phno" id="" require>
                        </div>
                        <label class="col-md-1">Email ID</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" placeholder="" name="i_email" id="" require>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-2">Shop Name:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="" name="i_shopname" id="" require>
                        </div>
                        <label class="col-md-1">Shop Address</label>
                        <div class="col-md-5">
                        <textarea class="form-control bil-addr" rows="1" name="i_shopaddress" id="" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-2">Issue Date:</label>
                        <div class="col-md-4">
                            <input type="date" class="custom-date" name="i_issuedate" id="" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-2">Expire Date:</label>
                        <div class="col-md-4">
                            <input type="date" class="custom-date" name="i_expiredate" id="" />
                        </div>
                    </div>


                    <div class="inv-hr"></div>
                    <div class="row form-group">
                        <div class="col-md-10">
                            <textarea class="form-control bil-addr" name="i_desc" placeholder="Enter a  Brief Description or Summary" rows="1"></textarea>
                        </div>
                    </div>

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
                        <textarea class="form-control" rows="4" name="i_custnote" id="" placeholder=""></textarea>
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
                            <button class="btn btn-primary" style="float: right;">Create Invoice</button>
                            </form>
                    </div>
                </div>
            </div>


            <div class="footer-wrap pd-20 mb-20 card-box invoice-footer">
                <span>eFlystore India</span>
                <p>PL-13,SR NO.157, AUNDH, NR GAIKWAD WASTI, Aundh, Pune (M .CORP.) ,PUNE, Pune, Maharashtra, India - 411007</p>
            </div>
        </div>
    </div>
</body>

</html>