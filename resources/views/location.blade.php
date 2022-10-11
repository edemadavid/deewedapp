@extends('components.guest-layout')
            @section('contents')

            <section class="vh-100">
                <div class="container py-5">

                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-7 col-xl-5">

                            <div id="wrapper-bg" class="card text-white bg-image shadow-4-strong"
                            style="background-repeat:no-repeat; background-position:center; background-size:cover">
                                <!-- Main current data -->
                                <div class="card-header p-4 border-0">
                                    <div class="text-center mb-3">
                                    <p class="h2 mb-1" id="wrapper-name"></p>
                                    <p class="mb-1" id="wrapper-description"></p>
                                    <p class="display-1 mb-1" id="wrapper-temp"></p>
                                    <span class="">Pressure: <span id="wrapper-pressure"></span></span>
                                    <span class="mx-2">|</span>
                                    <span class="">Humidity: <span id="wrapper-humidity"></span></span>
                                    </div>
                                </div>

                                <!-- Hourly forecast -->
                                <div class="card-body p-4 border-top border-bottom mb-2">
                                    <div class="row text-center">
                                    <div class="col-2">
                                        <strong class="d-block mb-2">Now</strong>
                                        <img id="wrapper-icon-hour-now" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour-now"></strong>
                                    </div>

                                    <div class="col-2">
                                        <strong class="d-block mb-2" id="wrapper-time1"></strong>
                                        <img id="wrapper-icon-hour1" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour1"></strong>
                                    </div>

                                    <div class="col-2">
                                        <strong class="d-block mb-2" id="wrapper-time2"></strong>
                                        <img id="wrapper-icon-hour2" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour2"></strong>
                                    </div>

                                    <div class="col-2">
                                        <strong class="d-block mb-2" id="wrapper-time3"></strong>
                                        <img id="wrapper-icon-hour3" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour3"></strong>
                                    </div>

                                    <div class="col-2">
                                        <strong class="d-block mb-2" id="wrapper-time4"></strong>
                                        <img id="wrapper-icon-hour4" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour4"></strong>
                                    </div>

                                    <div class="col-2">
                                        <strong class="d-block mb-2" id="wrapper-time5"></strong>
                                        <img id="wrapper-icon-hour5" src="" class="" alt="" />
                                        <strong class="d-block" id="wrapper-hour5"></strong>
                                    </div>
                                    </div>
                                </div>

                                <!-- Daily forecast -->
                                <div class="card-body px-5">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-lg-6 col-4">
                                            <strong>Today</strong>
                                        </div>

                                        <div class="col-lg-2 col-1 text-center">
                                            <img id="wrapper-icon-today" src="" class="w-100" alt="" />
                                        </div>

                                        <div class="col-lg-4  col-2 text-end">
                                            <span id="wrapper-forecast-temp-today"></span>
                                        </div>
                                    </div>

                                    <div class="row align-items-center mb-3">
                                        <div class="col-lg-6 col-4">
                                            <strong>Tomorrow</strong>
                                        </div>

                                        <div class="col-lg-2 col-1 text-center">
                                            <img id="wrapper-icon-tomorrow" src="" class="w-100" alt="" />
                                        </div>

                                        <div class="col-lg-4 col-2 text-end">
                                            <span id="wrapper-forecast-temp-tomorrow">28</span>
                                        </div>
                                    </div>

                                    <div class="row align-items-center mb-3">
                                        <div class="col-lg-6 col-4">
                                            <strong>Day after tomorrow</strong>
                                        </div>

                                        <div class="col-lg-2 col-1 text-center">
                                            <img id="wrapper-icon-dAT" src="" class="w-100" alt="" />
                                        </div>

                                        <div class="col-lg-4 col-2 text-end">
                                            <span id="wrapper-forecast-temp-dAT">28</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <script>
                console.log('test');
            </script>

            @include('components.weatherscript')
            @include('components.modals')
            @endsection

