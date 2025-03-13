@extends('layouts.main')

@section('contents')
@include('layouts.nav')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white--- mt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Contact Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <i class="icon-location-pin"></i>
                    </div>
                    <h3>Email Address</h3>
                    <p>info@webmail.com <br>
                        jobs@webexample.com</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <h3>Phone Number</h3>
                    <p>+1234-567 890 <br>
                        +09876-543 210</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <i class="icon-envelope"></i>
                    </div>
                    <h3>Email & Web</h3>
                    <p>info@webmail.com <br>
                        jobs@webexample.com</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <i class="icon-speedometer"></i>
                    </div>
                    <h3>Opening Hours</h3>
                    <p>Fri to Wed: 6:00 Am to 8:00 Pm <br>
                        Thursday - Off</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->
@endsection