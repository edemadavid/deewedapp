@extends('components.guest-layout')
            @section('contents')


                <div class="hero" data-bg-image="images/banner.png">
                    <div class="container">
                        <form action="{{route('find')}}" class="find-location">
                            <input type="text" name="place" placeholder="Find your location...">
                            <input type="submit" value="Find">
                        </form>

                    </div>
                </div>

                <div class="forecast-table">
                    <div class="container">
                        <div class="forecast-container">
                            <div class="today forecast">
                                <div class="forecast-header">
                                    <div class="day" id="day"></div>
                                    <div class="date" id="todayDate"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div id="wrapper-name" class="location">
                                    </div>
                                    <div class="degree">
                                        <div class="num" id="wrapper-temp" >
                                        </div>
                                        <div class="forecast-icon">
                                            <img id="wrapper-icon-today" src="" alt="" width=90>
                                            <span id="wrapper-description"></span>
                                        </div>
                                    </div>
                                    <span><img src="{{asset('images/icon-umberella.png')}}" alt=""><span id="wrapper-dew-point"></span></span>
                                    <span><img src="{{asset('images/icon-wind.png')}}" alt=""><span id="wrapper-wind-speed"></span></span>
                                    <span><img src="{{asset('images/icon-compass.png')}}" alt=""><span id="wrapper-wind-dir"></span></span>
                                    <p id="wrapper-pressure"></p>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day2"></div>
                                </div>
                                <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day2" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day2Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day2minTemp"></small>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day3"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day3" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day3Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day3minTemp"></small>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day4"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day4" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day4Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day4minTemp"></small>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day5"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day5" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day5Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day5minTemp"></small>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day6"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day6" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day6Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day6minTemp"></small>
                                </div>
                            </div>
                            <div class="forecast">
                                <div class="forecast-header">
                                    <div class="day" id="wrapper-day7"></div>
                                </div> <!-- .forecast-header -->
                                <div class="forecast-content">
                                    <div class="forecast-icon">
                                        <img id="wrapper-icon-day7" src="" alt="" width=48>
                                    </div>
                                    <div id="wrapper-forecast-day7Temp" class="degree"></div>
                                    <small id="wrapper-forecast-day7minTemp"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="map" style="width: 100vw; height:50vh;">

                </div>




            @include('components.modals')
            @include('components.welcomeweatherscript')
            @endsection


