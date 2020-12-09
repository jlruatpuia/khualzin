@extends('layouts.front')
@section('content')
    <section class="section">
        <div class="swiper-form-wrap">
            <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                <div class="row row-fix justify-content-sm-center justify-content-lg-end">
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-request form-request-modern bg-gray-lighter novi-background">
                            <h4>Find your Tour</h4>
                            <!-- RD Mailform-->
                            <form class="rd-mailform form-fix">
                                @csrf
                                <div class="row row-20 row-fix">
                                    <div class="col-sm-12">
                                        <label class="form-label-outside" for="from">From</label>
                                        <div class="form-wrap form-wrap-inline">
                                            <select class="form-input select-filter" id="from" data-placeholder=" -- SELECT -- " data-minimum-results-for-search="Infinity" name="from">
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
                                            <select class="form-input select-filter" id="dest" data-placeholder=" -- SELECT -- " data-minimum-results-for-search="Infinity" name="dest">
                                                <option value=""> -- SELECT -- </option>
                                                @foreach($towns as $town)
                                                    <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <label class="form-label-outside" for="dateForm">Depart Date</label>
                                        <div class="form-wrap form-wrap-validation">
                                            <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
                                            <label class="form-label" for="dateForm">Choose the date</label>
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
