@extends('frontend.layouts.master')

@section('title','Thai Huot || About Us')

@section('main-content')
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Thai Huot Drink Shop was founded by the Sea family in 1989.</h3>
							<!--<p>@foreach($settings as $data) {{$data->description}} @endforeach</p> -->
							<p>
                        In response to growing demand, the first Thai Huot Supermarket was established in 1994 to cater to both local and expatriate customers by offering a diverse range of international and domestic products. Under the guidance of Mr. Sea Sophal, Thai Huot
                        has transformed from a
                        Small Shop
                    </p>
                    
                    <p> Into a wholesale food and consumer product supplier for hotels and restaurants, as well as a trusted supermarket retailer with an unwavering reputation for quality and reliability.</p>
                    <p>The sustained success of Thai Huot is due in no small part to its loyal customer base, extensive selection of products sourced from around the world, competitive pricing, exceptional service, and a conveniently situated location in
                        the heart of Phnom Penh. The Sea family, along with the entire Thai Huot team, would like to express our deep appreciation and gratitude to all of our invaluable customers for their continued long-term support.</p>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection
