@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
<style>
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 1450px;
    }
</style>
<section class="ban_sec">
    <div class="container-fluid p-0">
        <div class="ban_img">
            <img src="https://myefilings.com/wp-content/uploads/2020/06/contact-us-banner.jpg" alt="banner" border="0">
            <div class="ban_text">
                <strong>
                    Contact Us
                </strong>
                <ul class="d-flex align-items-center ps-0 mt-5">
                    <li class="text-white"><a href="#" class="">Home</a></li>
                    <li class="text-white"><span class="me-2 ms-2">/</span></li>
                    <li class="main-color"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container custom-spacer">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4">
                    <p class="main-color mb-0 fw-bold">CONTACT INFO</p>
                    <h1 class="pt-4 fw-bold" style="font-size: 42px;"><span class="main-color">Hotline :</span> +84 1900
                        8198</h1>
                    <ul class="ms-0 ps-0">
                        <li class="pt-3">
                            <a href=""><i class="fa-solid fa-envelope pe-2 main-color"></i>Info.industris@gmail.com</a>
                        </li>
                        <li class="pt-3"><i class="fa-solid fa-location-dot pe-2 main-color"></i> Crows Nest Apt 69
                            Sydney,
                            Australia <a href="" class="main-color">(View map)</a> Info.industris@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="border-top pt-3">
                    <div>
                        <h2 class="py-3">Contact Form</h2>
                        <div>
                            <form action="" method="post" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-0 p-3"
                                                id="exampleFormControlInput1" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="number" class="form-control rounded-0 p-3"
                                                id="exampleFormControlInput1" placeholder="Your Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="email" class="form-control rounded-0 p-3"
                                                id="exampleFormControlInput1" placeholder="Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <textarea class="form-control rounded-0 p-3"
                                                id="exampleFormControlTextarea1" rows="10" placeholder="Your Message"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 15%;">
                                    <button type="submit" class="common-btn-3 mx-auto p-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681"
                    width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container custom-spacer">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="fw-bold"><span style="border-top: 2px solid var(--primary-color);">Get</span> in Touch</h1>
                <p class="w-50 mx-auto">TechFocus strives to provide the best service possible with every contact! Fill
                    the online forms to get
                    the info you're looking for right now!</p>
            </div>
            <div class="col-lg-4">
                <div class="contact-card card border-0 p-3"
                    style=" background-color: var(--secondary-deep-color); box-shadow: var(--custom-shadow)">
                    <img class="mx-auto" width="150px"
                        src="https://www.cosmed.com/images/08_icons/get_in_touch/register_product.svg"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title text-white">Partner Registration</h3>
                        <p class="card-text text-white py-2 w-75 mx-auto">Fill the online form to get software upgrades
                            and more
                            advantages</p>
                        <a href="guide.html" class="btn common-btn-2 mt-2 rounded-0 bg-white border w-50 mx-auto">
                            <span class="text-gradient">Register Now</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card card border-0 p-3" style=" box-shadow: var(--custom-shadow)">
                    <img class="mx-auto" width="150px"
                        src="https://www.cosmed.com/images/08_icons/get_in_touch/request_information.svg"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title">Get Support Now</h3>
                        <p class="card-text py-2 w-75 mx-auto">Fill the online form to get software upgrades
                            and more
                            advantages</p>
                        <a href="guide.html" class="btn common-btn-3 mt-2 rounded-0 border w-50 mx-auto">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card card border-0 p-3"
                    style=" background-color: var(--secondary-deep-color); box-shadow: var(--custom-shadow)">
                    <img class="mx-auto" width="150px"
                        src="https://www.cosmed.com/images/08_icons/get_in_touch/register_product.svg"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title text-white">Get Support Now</h3>
                        <p class="card-text text-white py-2 w-75 mx-auto">Fill the online form to get software upgrades
                            and more
                            advantages</p>
                        <a href="guide.html" class="btn common-btn-2 mt-2 rounded-0 bg-white border w-50 mx-auto">
                            <span class="text-gradient">Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12 text-center my-5">
                <h1 class="fw-bold"><span class="" style="border-top: 2px solid var(--primary-color);">Our</span> Office Location
                </h1>
            </div>
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0"><i class="fa-solid fa-location-crosshairs main-color pe-2"></i>Probal Housing, Ring
                        Road,</p>
                        <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0"><i class="fa-solid fa-location-crosshairs main-color pe-2"></i> Probal Housing, Ring Road,</p>
                    <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0"><i class="fa-solid fa-location-crosshairs main-color pe-2"></i>36-37, Probal Housing,
                        Ring Road,</p>
                        <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
            <hr class="mt-3">
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0">36-37, Probal Housing, Ring Road,</p>
                    <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0"><i class="fa-solid fa-location-crosshairs main-color pe-2"></i>36-37, Probal Housing,
                        Ring Road,</p>
                        <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3">
                    <h4>Company In <span class="" style="border-top: 3px solid var(--primary-color)">Por</span>tugal</h4>
                    <p class="m-0"><i class="fa-solid fa-location-crosshairs main-color pe-2"></i>36-37, Probal Housing,
                        Ring Road,</p>
                        <p class="m-0 ps-4">Mohammadpur, Dhaka-1207, Bangladesh</p>
                    <p class="m-0"><i class="fa-solid fa-mobile-screen main-color pe-2"></i>+44 7423 060208</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endpush