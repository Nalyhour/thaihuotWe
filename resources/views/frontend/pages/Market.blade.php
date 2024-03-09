

@extends('frontend.layouts.master')

@section('title','Thai Huot || Our Store')

@section('main-content')
<style>


/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/

.why-us {
    padding: 5;
}

.why-us p {
    color: #000000;
}

.why-us .row {
    overflow: hidden;
}

.why-us .content-item {
    padding: 40px;
    border-left: 1px solid #eee;
    border-bottom: 1px solid #eee;
    margin: -1px;
}

.why-us img {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
}

.why-us .content-item span {
    display: block;
    font-size: 24px;
    font-weight: 400;
    color: #aaaaaa;
}

.why-us h6 {
    color: #234285;
}

.why-us h6 :hover {
    color: red;
}

.why-us .content-item h4 {
    font-size: 26px;
    font-weight: 300;
    padding: 0;
    margin: 20px 0;
}

.why-us .content-item p {
    color: #234285;
    font-size: 15px;
    margin: 0;
    padding: 0;
}

@media (max-width: 768px) {
    .why-us .content-item {
        padding: 40px 0;
    }
}


</style>
<section id="why-us" class="why-us">
        <div class="container">
            <p>To make it easy for shopping, Thai Huot has opening its operation retailors in 6 branches in Phnom Penh. Mostly the are located in the highly populated areas. Find out the location as below:
            </p>
            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 content-item">
                    <img src="{{ URL::to('/') }}/images/Market/TH-MV.png" alt="">
                    <span><a href="https://goo.gl/maps/VFeCxuSXroB4iGnd7"><br><h6><b>THAI HUOT MONIVONG</b></h6></a>
           </span>
                    <p>#99 - 105, Preah Monivong Blvd, Phnom Penh, Cambodia. Tel: 087 900 816 | 092 900 290</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">

                <img src="{{ URL::to('/') }}/images/Market/TH TK.png" alt="">
                    <span><a href="https://goo.gl/maps/GLr3pYwADB6hMJi99"><br><h6><b> THAI HUOT TUOL KORK </b> </h6> </a>
            </span>
                    <p>#6 St.592, Sangkat Beung Kok 2 Khan Tuol Kork, Phnom Penh, Cambodia Tel: 015 882 755 | 086 882 775</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                <img src="{{ URL::to('/') }}/images/Market/BKK.jpg" alt="">
                    <span><a href="https://goo.gl/maps/56cYv7fpPqPRusx7A"><br><h6><b>THAI HUOT BOEUNG KENG KANG</b></h6></a>
            </span>
                    <p>#214, St.63 Corner 352 Sangkat Boeung Keng Kang Phnom Penh, Cambodia. Tel: 016 726 604 | 017 726 604</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                <img src="{{ URL::to('/') }}/images/Market/BK1.jpg" alt="">
                    <span><a href="https://goo.gl/maps/VFeCxuSXroB4iGnd7"><br><h6><b>THAI HUOT BOEUNG KENG KANG I</b></h6></a>
            </span>
                    <p>#250, St.63 Corner 398 Sangkat Boeung Keng Kang I Phnom Penh, Cambodia. Tel: 081 220 998 | 077 220 919</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">

                <img src="{{ URL::to('/') }}/images/Market/ss.png" alt="">
                    <span><a href="https://goo.gl/maps/vLp7vV9JJLYeKpBB8"><br><h6><b>THAI HUOT SEN SOK</b></h6></a>
             </span>
                    <p>#1337, St.1003 Corner 1966 Sangkat Phnom Penh Thmey Khan Sen Sok, Phnom Penh, Cambodia. Tel: 069 900 633 | 077 998 919</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                <img src="{{ URL::to('/') }}/images/Market/bs.png" alt="">
                    <span><a href="https://goo.gl/maps/frSgtPrMiWtB6S58A"><br><h6> <b>THAI HUOT BOEUNG SNOR</b></h6></a>
             </span>
                    <p># NR1 Boeung Chhouk Sangkat Niroth Khan Chba Ampov Phnom Penh, Cambodia. </p>
                </div>

            </div>

        </div>
    </section>

    
@endsection