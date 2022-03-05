@extends('layouts.master')

@section('title')
Home
@endsection


@section('section')


<h1>Home</h1>

<div class="row row-cols-1 row-cols-md-4 g-4 align-self-center" >
    <div class="col" style="width: auto; margin:3rem; ">
        <div class="card" style="width: 20rem;">
            <a href="LifeInsurance" >
            <img src="https://life.futuregenerali.in/media/408244/traditional-life-insurance.jpg" class="card-img-top" alt="..." style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem;">
            <div class="card-body">
              <h5 class="card-title">Term Life Insurance</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
        </a>
        </div>
    </div>

    <div class="col" style="width: auto; margin:3rem;">
        <div class="card" style="width: 20rem;">
            <a href="HealthInsurance" >
            <img src="https://www.icicilombard.com/docs/default-source/assets/freshlook/images/ui-health-insurance-policy.png" class="card-img-top" alt="..." style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem; ">
            <div class="card-body">
              <h5 class="card-title">Health Insurance</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

              </a>
            </div>
        </div>
    </div>

    <div class="col" style="width: auto; margin:3rem; ">
        <div class="card"  style="width: 20rem;">
            <a href="BikeInsurance" >
            <img src="https://images.ctfassets.net/uwf0n1j71a7j/3hsbWvbJauXM1g4VTLDn6A/c0bdbe4ea5cf6b57e0547db4e268d95b/motor-insurance-policy-online.png" class="card-img-top" alt="..." style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem;  ">
            <div class="card-body">
              <h5 class="card-title">Bike Insurance</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

              </a>
            </div>
          </div>
    </div>

    <div class="col"  style="width: auto; margin:3rem; ">
        <div class="card" style="width: 20rem;">
            <a href="CarInsurance" >
            <img src="https://www.bharti-axagi.co.in/drupal_backend/sites/default/files/2019-07/vector-smart-object%402x.png" class="card-img-top" alt="..." style="max-width:20rem; max-height:10rem; min-width:20rem; min-height:10rem; ">
            <div class="card-body">
              <h5 class="card-title">Car Insurance</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

              </a>
            </div>
        </div>
    </div>

  </div>

@endsection

