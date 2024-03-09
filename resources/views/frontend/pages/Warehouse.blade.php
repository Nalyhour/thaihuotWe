

@extends('frontend.layouts.master')

@section('title','Thai Huot || Our Store')

@section('main-content')
<style>


/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/

.team .member {
    margin-bottom: 20px;
    box-shadow: 0px 0px 12px 0px rgba(34, 34, 34, 0.07);
    padding: 30px 20px;
    background: #fff;
}

.team .member img {
    max-width: 100%;
    margin: 0 0 30px 0;
}

.team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #234285;
}

.team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}

.team .member p {
    padding-top: 10px;
    font-size: 14px;
    color: #aaaaaa;
}

.team .member .social {
    margin-top: 15px;
}

.team .member .social a {
    color: #919191;
    transition: 0.3s;
}

.team .member .social a:hover {
    color: #5cb874;
}

.team .member .social i {
    font-size: 18px;
    margin: 0 2px;
}
.section-titless {
    text-align: left;
    padding-bottom: 20px;
    color: #234285;
    width: auto;
}

</style>

<section id="team" class="team section-bg">
        <div class="container">



            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="{{ URL::to('/') }}/images/team/5.jpg" alt="">

                        <h4>Ambient & Air Conditional 18-22 ᵒC</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="{{ URL::to('/') }}/images/team/car.jpg" alt="">
                        <h4>21 BOX TRUCKS</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="{{ URL::to('/') }}/images/team/COLD STORAGE.jpg" alt="">
                        <h4>Chilled Products: 0 - 7ᵒC & Frozen: - 20ᵒC</h4>


                    </div>
                </div>
                <div class="section-titless">
                    <h4><strong>WAREHOUSE & LOGISTIC TEAM </strong></h4>
                    <p>The warehouse and logistics team is responsible for managing the storage, movement, and distribution of goods and materials within a company. This team is critical to ensuring that products are delivered to customers on time and in
                        good condition.<br></p>
                    <p>There are 21 Box Trucks & Vans and 35 Warehouse & Logistic Personnels that can support warehouse and logistic process run smoothly.</p>

                    <p>There are ambient 4,000 palettes & Aircon 2,000 palettes which are approximately 9,000 sq meters and chilled 500 palettes & frozen 1,000 palettes which are approximately 5,000 sq meters. We deliver six days a week via our own trucks
                        with a response time of 24 hours for any order in Phnom Penh and 48 hours for orders in other provinces. </p>

                </div>
            </div>
        </div>
    </section>

    
@endsection