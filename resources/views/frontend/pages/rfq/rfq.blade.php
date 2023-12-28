@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <div class="container mm">
        <div class="row align-items-center">
            <div class="col-lg-12 my-5">
                <h2 class="titles text-center font-two mb-1">
                    RECEIVE AND <span class="main-color"> COMPARE </span>
                </h2>
                <h2 class="titles text-center font-two">
                    <span class="main-color">QUOTATIONS</span> FOR FREE
                </h2>
                <p class="text-center pt-2">
                    Take advantage of our supplier network to complete your purchasing
                    projects.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column align-items-center">
                                <p>
                                    <img class="rfq-img rounded-circle"
                                        src="https://img.directindustry.com/media/ps/images/common/rfq/ao-step-01.svg"
                                        alt="" />
                                </p>
                                <p class="font-three">DESCRIBE YOUR PURCHASE PROJECT</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-column align-items-center">
                                <p>
                                    <img class="rfq-img rounded-circle"
                                        src="https://img.directindustry.com/media/ps/images/common/rfq/ao-step-02.svg"
                                        alt="" />
                                </p>
                                <p class="font-three">DESCRIBE YOUR PURCHASE PROJECT</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-column align-items-center">
                                <p>
                                    <img class="rfq-img rounded-circle"
                                        src="https://img.directindustry.com/media/ps/images/common/rfq/ao-step-03.svg"
                                        alt="" />
                                </p>
                                <p class="font-three">DESCRIBE YOUR PURCHASE PROJECT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="devider-wrap">
                        <h4 class="devider-content mb-4">
                            <span class="devider-text">SUBMIT YOUR REQUEST FOR QUOTATION</span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <form class="card rounded-0 border-0 shadow-sm rfq-img  action=">
                    <div class="card-header p-0 m-0 rounded-0 border-0" style="background-color: var(--secondary-color)">
                        <nav class="nav nav-pills nav-fill">
                            <a class="nav-link tab-pills step-form-btn rounded-0 p-3" href="#">Your Needs</span>
                                </a>
                            <a class="nav-link tab-pills step-form-btn rounded-0 p-3" href="#">Address Details</a>
                            <a class="nav-link tab-pills step-form-btn rounded-0 p-3" href="#">Company Details</a>
                            <a class="nav-link tab-pills step-form-btn rounded-0 p-3" href="#">Finish</a>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="tab d-none">
                            <!-- First Tabing -->
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <!-- Form Info -->
                                    <div class="d-flex">
                                        <div class="me-2 mt-2">
                                            <i class="fa-solid fa-circle-info text-muted" style="font-size: 30px"></i>
                                        </div>
                                        <div>
                                            <p class="pt-0 pb-2 m-2 font-three">
                                                Do you need detailed and personalized quotes for a
                                                specific project?
                                            </p>
                                            <div>
                                                <p class="m-2 font-three">
                                                    ➔ Looking for one product? Fill out our Request
                                                    for Quotation (RFQ) form and get custom offers
                                                    within 48 hours!
                                                </p>
                                                <p class="m-2 font-three">
                                                    ➔ Looking for several products? Submit as many
                                                    Requests for Quotation (RFQs) as products
                                                    requested (one request per product).
                                                </p>
                                                <p class="m-2 font-three">
                                                    ➔ Looking for one product? Fill out our Request
                                                    for Quotation (RFQ) form and get custom offers
                                                    within 48 hours!
                                                </p>
                                                <p class="m-2 font-three">
                                                    ➔ Looking for several products? Submit as many
                                                    Requests for Quotation (RFQs) as products
                                                    requested (one request per product).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Info End-->
                                </div>
                            </div>
                            <!-- Form Content -->
                            <div>
                                <div class="row align-items-center mt-5">
                                    <div class="col-lg-2">
                                        <label class="wrapper" for="states">YOUR SELECTION <span>*</span></label>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="button dropdown">
                                            <select id="rfqselector" class="form-select rounded-0 form-control"
                                                name="conceptTermId">
                                                <option>Chose A Options</option>
                                                <option value="software">Software</option>
                                                <option value="hardware">Hardware</option>
                                                <option value="product">Product</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="output">
                                    <div id="software" class="rfqoutput red mt-5">
                                        <div class="row">
                                            <hr />
                                            <div class="col-lg-6">
                                                <div class="title-select mt-3">
                                                    <label class="wrapper" for="states">YOUR SELECTION
                                                        <span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container">
                                                    <select id="rfqselector" class="form-select" name="feature_7021">
                                                        <option>Chose A Options</option>
                                                        <option value="software">Software</option>
                                                        <option value="hardware">Hardware</option>
                                                        <option value="product">Product</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="title-select w-75">
                                                    <label class="wrapper font-two" for="states">Add complementary
                                                        characteristics: this
                                                        information will help <br />
                                                        suppliers provide the most suitable quote
                                                        possible.<span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container"
                                                    style="
                              box-shadow: rgba(17, 12, 46, 0.15) 0px 48px
                                100px 0px;
                            ">
                                                    <select id="rfqselector" class="form-select rounded-0">
                                                        <option>Applications</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Type</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Operating System</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Other Characteristics</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hardware" class="rfqoutput yellow mt-5">
                                        <div class="row">
                                            <hr />
                                            <div class="col-lg-6">
                                                <div class="title-select mt-3">
                                                    <label class="wrapper" for="states">YOUR SELECTION
                                                        <span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container">
                                                    <select id="rfqselector" class="form-select">
                                                        <option>Chose A Options</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="title-select w-75">
                                                    <label class="wrapper font-two" for="states">Add complementary
                                                        characteristics: this
                                                        information will help <br />
                                                        suppliers provide the most suitable quote
                                                        possible.<span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container"
                                                    style="
                              box-shadow: rgba(17, 12, 46, 0.15) 0px 48px
                                100px 0px;
                            ">
                                                    <select id="rfqselector" class="form-select rounded-0">
                                                        <option>Applications</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Type</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Operating System</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Other Characteristics</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product" class="rfqoutput blue mt-5">
                                        <div class="row">
                                            <hr />
                                            <div class="col-lg-6">
                                                <div class="title-select mt-3">
                                                    <label class="wrapper" for="states">YOUR SELECTION
                                                        <span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container">
                                                    <select id="rfqselector" class="form-select">
                                                        <option>Chose A Options</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="title-select w-75">
                                                    <label class="wrapper font-two" for="states">Add complementary
                                                        characteristics: this
                                                        information will help <br />
                                                        suppliers provide the most suitable quote
                                                        possible.<span>*</span></label>
                                                </div>
                                                <div class="p-4 border-container"
                                                    style="
                              box-shadow: rgba(17, 12, 46, 0.15) 0px 48px
                                100px 0px;
                            ">
                                                    <select id="rfqselector" class="form-select rounded-0">
                                                        <option>Applications</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Type</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Operating System</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                    <select id="rfqselector" class="form-select rounded-0 mt-2">
                                                        <option>Other Characteristics</option>
                                                        <option value="software">software</option>
                                                        <option value="hardware">Yellow</option>
                                                        <option value="product">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Tabing -->
                        <div class="tab d-none">
                            <!-- First Tabing -->
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <!-- Form Info -->
                                    <div class="d-flex">
                                        <div class="me-2 mt-2">
                                            <i class="fa-solid fa-circle-info text-muted" style="font-size: 30px"></i>
                                        </div>
                                        <div>
                                            <p class="pt-0 pb-2 m-2 font-three">
                                                Why should you enter complete project details here?
                                            </p>
                                            <div>
                                                <p class="m-2 font-three">
                                                    Describing project details will enable suppliers
                                                    to prepare a proposal perfectly suited to your
                                                    needs. Your project details remain confidential.
                                                    Only the suppliers we select will have access to
                                                    the information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Info End-->
                                </div>
                            </div>
                            <!-- Form Content -->
                            <div>
                                <hr />
                                <div>
                                    <p class="text-danger mb-2 font-two">
                                        Describe your project in detail here. Include for
                                        example: the context, your progress, the desired level
                                        of quality, etc. * (Enter at least 300 characters : 0 /
                                        300)
                                    </p>
                                    <textarea class="form-control border rounded-0" name="info" id="" cols="30" rows="10"
                                        placeholder="Enter Info" required></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <label for="" class="mb-1">Quantity <span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control rounded-0"
                                            placeholder="Enter The Quantity" required />
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label for="" class="mb-1">Budget (minimum €5,000)
                                            <span class="text-danger">*</span></label>
                                        <select id="rfqselector" class="form-select rounded-0 form-control"
                                            name="conceptTermId" required>
                                            <option>Chose A Options</option>
                                            <option value="software">Software</option>
                                            <option value="hardware">Hardware</option>
                                            <option value="product">Product</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label for="" class="mb-1">Delivery city
                                            <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control rounded-0"
                                            placeholder="Enter The Quantity" required />
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label for="" class="mb-1">Decision period *</label>
                                        <input type="number" class="form-control rounded-0"
                                            placeholder="Enter The Quantity" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Third Tabing -->
                        <div class="tab d-none">
                            <!-- First Tabing -->
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <!-- Form Info -->
                                    <div class="d-flex">
                                        <div class="me-2 mt-2">
                                            <i class="fa-solid fa-circle-info text-muted" style="font-size: 30px"></i>
                                        </div>
                                        <div>
                                            <p class="pt-0 pb-2 m-2 font-three">
                                                Why is it important to enter your contact
                                                information?
                                            </p>
                                            <div>
                                                <p class="m-2 font-three">
                                                    Entering precise contact information ensures you
                                                    will receive the quotation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Info End-->
                                </div>
                            </div>
                            <!-- Form Content -->
                            <div>
                                <hr />
                                <div>
                                    <p class="text-danger m-2 font-two fst-italic font-two">
                                        Enter your contact information to receive quotations
                                        from our qualified suppliers
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="mb-1">
                                                <label for="" class="mb-1">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control rounded-0"
                                                    placeholder="Enter Email" required />
                                            </div>

                                            <div class="mb-1">
                                                <label for="" class="mb-1">
                                                    Last Name
                                                    <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control rounded-0"
                                                    placeholder="Enter Email" required />
                                            </div>

                                            <div class="mb-1">
                                                <label for="" class="mb-1">
                                                    City <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Enter Email" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-1">
                                                    <label for="" class="mb-1">
                                                        Your company name
                                                        <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control rounded-0"
                                                        placeholder="Enter Email" required />
                                                </div>
                                                <div class="mb-1">
                                                    <label for="" class="mb-1">
                                                        First Name
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control rounded-0"
                                                        placeholder="Enter Email" required />
                                                </div>
                                                <div class="mb-1">
                                                    <label for="" class="mb-1">
                                                        Cell phone number (We may call you to discuss
                                                        your project)<span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control rounded-0"
                                                        placeholder="Enter Email" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fourth Tabing -->
                        <div class="tab d-none">
                            <p class="text-center font-four subtitles">
                                Thank you for considering our service. Your request is
                                important to us. To proceed,
                            </p>
                            <div class="justify-content-center align-content-center d-flex">
                                <img src="https://i.ibb.co/27nsMpC/7efs.gif" class="text-center" width="220px"
                                    alt="" />
                            </div>
                            <p class="text-center">
                                Please press the
                                <span class="main-color">Submit</span> button below. <br />
                                We appreciate your trust in us.
                            </p>
                            <div class="d-flex justify-content-center">
                                <button class="btn signin w-auto rounded-0 text-center" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <button type="button" id="back_button" class="btn common-btn-4 w-auto rounded-0" onclick="back()">
                                Back
                            </button>
                            <button type="button" id="next_button" class="btn signin ms-auto w-auto rounded-0"
                                onclick="next()">
                                Next
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
