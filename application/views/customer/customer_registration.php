<link href="<?php echo base_url(); ?>assets/select2/dist/css/select2.min.css" rel="stylesheet" />

<div class="container-fluid mt-n4 py-4">
    <div class="row">
        <div class="col-12 ">
            <form action="">
                <div class="card  p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">

                    <div>
                        <h5 class="font-weight-bolder mb-0">New Enquiry </h5>
                        <p class="mb-0 text-sm">Mandatory informations</p>

                        <div class="button-row d-flex mt-n5 mb-4">
                            <a href="<?= base_url() ?>customer_order_confirm" class="col-4 btn bg-gradient-dark ms-auto mb-0 js-btn-next p-3" type="button" title="Next">Next</a>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-4">
                                        <label>Name</label>
                                        <input class=" form-control" type="text" placeholder="customer name" />
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label>Enter Mobile Number</label>
                                        <input type="number" id="phone" class=" form-control" placeholder="Enter Mobile Number" value="">
                                        <div class="row px-xl-5 px-sm-4 px-0  mt-1">
                                            <div class="col-3 ms-auto px-1">
                                                <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                                    <img width="32px" height="22px" src="assets/img/GL-img/flag/ind.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                                    <img width="32px" height="22px" src="assets/img/GL-img/flag/uk.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                                    <img width="32px" height="22px" src="assets/img/GL-img/flag/usa.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-3 me-auto px-1">
                                                <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                                    <img width="32px" height="22px" src="assets/img/GL-img/flag/canada.jpg" alt="" value="+1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                        <label>Email Address</label>
                                        <input class=" form-control" type="email" placeholder="Email Address" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-lg-3 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row   mt-3">
                                        <h6 class="font-weight-bolder text-center">Socials</h6>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btnche">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/fb-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btnche">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck2">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/insta-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck2">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1  form-check">

                                            <label class="btn  btn-outline-secondary custom-control-label " for="btncheck3">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/youtube-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck3">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck4">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/whatapp-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck4">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck5">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/pint-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck5">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck6">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/be-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck6">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck7">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/linkin-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck7">
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-3 me-auto px-1 form-check">

                                            <label class="btn  btn-outline-secondary  " for="btncheck8">
                                                <img width="32px" height="32px" src="assets/img/GL-img/social/twe-01.png" alt="">
                                                <input class="form-check-input social-btn" type="checkbox" value="" id="btncheck8">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row  mt-3">
                                        <div class="col">

                                            <div class="form-check ">
                                                <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault1">
                                                <label class="custom-control-label " style="" for="flexCheckDefault1">Google</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">

                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="custom-control-label " for="flexCheckDefault2">Website </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-sm-3 mt-3 me-3">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="custom-control-label" for="flexCheckDefault3">Horlding </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-3 me-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                <label class="custom-control-label" for="flexCheckDefault4">Exhibition </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-3 me-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                <label class="custom-control-label" for="flexCheckDefault5">PaperAd</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-3  me-3">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                <label class="custom-control-label" for="flexCheckDefault6">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-3 me-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                <label class="custom-control-label" for="flexCheckDefault7">Email </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Other Sources</label>
                                            <input class=" form-control" type="text" placeholder="Others" />
                                            <button class="btn btn-primary btn-xs mt-2" id="other_src_btn" type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-12 col-sm-12 mt-3">
                                            <label class="form-label">Agent</label>
                                            <select class="select-box form-control select2_agent" name="agent" id="choices-button-agent">
                                                <option value="" selected disabled>Select Agent</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-sm-12 mt-3">
                                            <label class="form-label">Customers</label>
                                            <select class="select-box form-control select2_customer" name="Customers" id="choices-button-customers">
                                                <option value="" selected disabled>Select Customers</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>

                                        <div class="modal fade" id="addagent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Label">Add Agent</h5>
                                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <input class=" form-control" type="text" placeholder="Agent Name" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-primary">Add Agent</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Label">Add Customers</h5>
                                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <input class=" form-control" type="text" placeholder="Customers Name" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-primary">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="<?php echo base_url(); ?>assets/select2/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2_agent').select2();
        $('.select2_customer').select2();
    })
    var add = $('<button type="button" class="col-12 btn btn-block btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#addagent">Add Agent</button>');;

    
</script>