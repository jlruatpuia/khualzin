@extends('layouts.front')
@section('content')
    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>Khualzin</h1>
                        <div class="short-popular-category-list text-center">
{{--                            <h2>Popular Sports</h2>--}}
{{--                            <ul class="list-inline">--}}
{{--                                @foreach($popularSports as $id => $sport)--}}
{{--                                    <li class="list-inline-item">--}}
{{--                                        <a href="{{ route('events.index', ['sport_id' => $id]) }}">{{ $sport }}</a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
                            <br />
                            <br />
                        </div>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 align-content-center">
                                    <form action="" class="form-floating">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control my-2 my-lg-1 date" id="travel_date" name="travel_date" placeholder="Travel Date">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2" id="sport_id" name="sport_id">
                                                    <option value="">Travel From</option>
                                                    @foreach($towns as $id => $town)
                                                        <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2" id="region_id" name="region_id">
                                                    <option value="">Travel To</option>
                                                    @foreach($towns as $id => $town)
                                                        <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 align-self-center">
                                                <button type="submit" class="btn btn-outline-primary">Search Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <section class="section bg-gray">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>All Sports</h2>
                    </div>
                    <div class="row">
                        <!-- Category list -->
{{--                        @foreach($allSports as $sport)--}}
                            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                <div class="category-block">
                                    <div class="header">
{{--                                        <h4>{{ $sport->name }}</h4>--}}
                                    </div>
                                    <ul class="category-list" >
{{--                                        @foreach($sport->events as $event)--}}
{{--                                            <li><a href="{{ route('events.show', $event) }}">{{ $event->name }}</a></li>--}}
{{--                                        @endforeach--}}
                                    </ul>
                                </div>
                            </div> <!-- /Category List -->
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
@endsection
