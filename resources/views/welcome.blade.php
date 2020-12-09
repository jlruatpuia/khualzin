@extends('layouts.front')
@section('content')
    <section class="section">
        <div class="swiper-form-wrap">
      <!-- Swiper-->
            <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/swiper-slide-1.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container container-bigger swiper-main-section">
                                <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3>Hundreds of Amazing Destinations</h3>
                                        <div class="divider divider-decorate"></div>
                                        <p class="text-spacing-sm">We offer a variety of destinations to travel to, ranging from exotic to some extreme ones. They include very popular countries and cities like Paris, Rio de Janeiro, Cairo and a lot of others.</p>
                                        <a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/swiper-slide-2.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container container-bigger swiper-main-section">
                                <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3>The Trip of Your Dream</h3>
                                        <div class="divider divider-decorate"></div>
                                        <p class="text-spacing-sm">Our travel agency is ready to offer you an exciting vacation that is designed to fit your own needs and wishes. Whether it’s an exotic cruise or a trip to your favorite resort, you will surely have the best experience.</p>
                                        <a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/swiper-slide-3.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container container-bigger swiper-main-section">
                                <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3>unique Travel Insights</h3>
                                        <div class="divider divider-decorate"></div>
                                        <p class="text-spacing-sm">Our team is ready to provide you with unique weekly travel insights that include photos, videos, and articles about untravelled tourist paths. We know everything about the places you’ve never been to!</p>
                                        <a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Swiper controls-->
                <div class="swiper-pagination-wrap">
                    <div class="container container-bigger">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                <div class="row row-fix justify-content-sm-center justify-content-lg-end">
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-request form-request-modern bg-gray-lighter novi-background">
                            <h4>Find your Tour</h4>
                            <!-- RD Mailform-->
                            <form class="rd-mailform form-fix" method="post" action="{{ route('search') }}">
                                @csrf
                                <div class="row row-20 row-fix">
                                    <div class="col-sm-12">
                                        <label class="form-label-outside" for="from">From</label>
                                        <div class="form-wrap form-wrap-inline">
                                            <select class="form-input select-filter" id="from" data-placeholder=" -- SELECT -- "
                                                    data-minimum-results-for-search="Infinity" name="from" required>
                                                <option value=""> -- SELECT -- </option>
                                                @foreach($towns as $town)
                                                    <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label-outside" for="dest">To</label>
                                        <div class="form-wrap form-wrap-inline">
                                            <select class="form-input select-filter" id="dest" data-placeholder=" -- SELECT -- "
                                                    data-minimum-results-for-search="Infinity" name="dest" required>
                                                <option value=""> -- SELECT -- </option>
                                                @foreach($towns as $town)
                                                    <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <label class="form-label-outside" for="travel_date">Depart Date</label>
                                        <div class="form-wrap form-wrap-validation">
                                            <input class="form-input" id="travel_date" name="travel_date" type="text" data-time-picker="date">
                                            <label class="form-label" for="travel_date">Choose the date</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <label class="form-label-outside" for="form-element-stepper">No of Passenger</label>
                                        <div class="form-wrap form-wrap-modern">
                                            <input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-wrap form-button">
                                    <button class="button button-block button-secondary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
