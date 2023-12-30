@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
<style>
  .flowpaper_viewer_container>* {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background: white !important;
    background-color: white !important;
  }
</style>
<div class="container-fluid">
  <div class="row breadcrumb-banner-area p-5"
    style="background-image: url(https://img.virtual-expo.com/media/ps/images/di/source/block-01.jpg);">
    <div class="col-lg-12">
      <div class="breadcrumbs">
        <div>
          <a href="index.html" class="">Home</a> &gt;
          <span class="txt-mcl">How to source products on DirectIndustry</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid p-0 my-5">
  <h1 class="text-center mt-3 fw-bold">Ter<span style="color: var(--primary-color);
    font-size: 40px; font-weight: bold;">ms & Po</span>licy</h1>
  <p class="text-center">Explore the intricate landscape of our 'Terms & Conditions' as we delineate the rules.</p>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-2">
        <div class="mt-2" style="border: 10px solid var(--primary-color);
        padding: 0; box-shadow: var(--custom-shadow)">
          <iframe class="fp-embed"
            src="http://flowpaper.com/flipbook/http://ngenitltd.com/storage/files/DTCBdrWUiJ9QEJyE4XZtNN80ySnCHBmXstUluR2w.pdf"
            width="100%" height="800" allowFullScreen>
          </iframe>
        </div>

        <p class="pt-5 text-center">Terms & Conditions' as we delineate the rules, agreements, and expectations that govern our digital space. Delve into the fine print where clarity meets responsibility, ensuring a harmonious interaction between users and the platform.</p>
      </div>
    </div>
  </div>
</div>
@endsection