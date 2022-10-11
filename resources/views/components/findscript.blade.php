<script>
    let LocationqueryUrl = "https://api.openweathermap.org/data/2.5/weather?";
    let q = "q={{$place}}&";
    let apiKey = "appid={{config('services.openweather.api')}}";
    let coordfile = LocationqueryUrl + q + apiKey;

    var lat = '';
    var lon = '';

    fetch(coordfile)
    .then((response) => response.json())
    .then((data) => {

        let lat = data.coord.lat;

        let lon = data.coord.lon;

        // API call
        let queryUrl = "https://api.openweathermap.org/data/2.5/onecall?";

        let apiOptions = "units=metric&exclude=minutely,alerts&";
        let apiKey = "appid={{config('services.openweather.api')}}";
        let file = queryUrl +"lat="+ lat +"&lon="+ lon +"&"+ apiOptions + apiKey;

        fetch(file)
        .then((response) => response.json())
        .then((data) => {

        // Weather main data
        let main = data.current.weather[0].main;
        let description = data.current.weather[0].description;
        let temp = Math.round(data.current.temp);
        let dewPoint = data.current.dew_point;
        let WindSpeed = data.current.wind_speed;
        let WindDir = data.current.wind_deg;


        // let name = "";


        // document.getElementById("wrapper-name").innerHTML = name;
        document.getElementById("wrapper-description").innerHTML = description;
        document.getElementById("wrapper-temp").innerHTML = temp + "°C";
        document.getElementById("wrapper-dew-point").innerHTML = dewPoint;
        document.getElementById("wrapper-wind-speed").innerHTML = WindSpeed + " km/h";
        document.getElementById("wrapper-wind-dir").innerHTML = WindDir + "°";


        // Day


        let timeNow = new Date();

        let dateNo = timeNow.getDate();

        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        let month = months[timeNow.getMonth()];


        const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        let dayNo = timeNow.getDay();

        let todayDate = dateNo + ", " + month;

        function getnum(dayNo) {
            if (dayNo > 7){
                daynum = dayNo - 7
            } else { daynum = dayNo}

            return daynum;
        }


        let day = days[ getnum(dayNo)];

        document.getElementById("day").innerHTML = day;
        document.getElementById("todayDate").innerHTML = todayDate;


        // console.log(day);

        //Funtion to make day count always less than 7
        function getnum(dayNo) {
            if (dayNo > 7 || dayNo == 7 ){
                daynum = dayNo - 7
            } else { daynum = dayNo}

            return daynum;
        }

        let day2num = getnum(dayNo + 1) ;
        let day3num = getnum(dayNo + 2) ;
        let day4num = getnum(dayNo + 3) ;
        let day5num = getnum(dayNo + 4) ;
        let day6num = getnum(dayNo + 5) ;
        let day7num = getnum(dayNo + 6) ;


        let day2 = days[day2num];   //4
        let day3 = days[day3num];   //5
        let day4 = days[day4num];   //6
        let day5 = days[day5num];   //7-7
        let day6 = days[day6num];   //8-7
        let day7 = days[day7num];   //9-7

        // console.log(day6);


        document.getElementById("wrapper-day2").innerHTML = day2;
        document.getElementById("wrapper-day3").innerHTML = day3;
        document.getElementById("wrapper-day4").innerHTML = day4;
        document.getElementById("wrapper-day5").innerHTML = day5;
        document.getElementById("wrapper-day6").innerHTML = day6;
        document.getElementById("wrapper-day7").innerHTML = day7;


        // Temp for each day
        let day2Temp = Math.round(data.daily[0].temp.day);
        let day3Temp = Math.round(data.daily[1].temp.day);
        let day4Temp = Math.round(data.daily[2].temp.day);
        let day5Temp = Math.round(data.daily[3].temp.day);
        let day6Temp = Math.round(data.daily[4].temp.day);
        let day7Temp = Math.round(data.daily[5].temp.day);

        //Min Temp for each day
        let day2minTemp = Math.round(data.daily[0].temp.min);
        let day3minTemp = Math.round(data.daily[1].temp.min);
        let day4minTemp = Math.round(data.daily[2].temp.min);
        let day5minTemp = Math.round(data.daily[3].temp.min);
        let day6minTemp = Math.round(data.daily[4].temp.min);
        let day7minTemp = Math.round(data.daily[5].temp.min);



        // Placing the Temp in Html
        document.getElementById("wrapper-forecast-day2Temp").innerHTML =
        day2Temp + "°";
        document.getElementById("wrapper-forecast-day3Temp").innerHTML =
        day3Temp + "°";
        document.getElementById("wrapper-forecast-day4Temp").innerHTML =
        day4Temp + "°";
        document.getElementById("wrapper-forecast-day5Temp").innerHTML =
        day5Temp + "°";
        document.getElementById("wrapper-forecast-day6Temp").innerHTML =
        day6Temp + "°";
        document.getElementById("wrapper-forecast-day7Temp").innerHTML =
        day7Temp + "°";


        // Placing the  Min Temp in Html
        document.getElementById("wrapper-forecast-day2minTemp").innerHTML =
        day2minTemp + "°";
        document.getElementById("wrapper-forecast-day3minTemp").innerHTML =
        day3minTemp + "°";
        document.getElementById("wrapper-forecast-day4minTemp").innerHTML =
        day4minTemp + "°";
        document.getElementById("wrapper-forecast-day5minTemp").innerHTML =
        day5minTemp + "°";
        document.getElementById("wrapper-forecast-day6minTemp").innerHTML =
        day6minTemp + "°";
        document.getElementById("wrapper-forecast-day7minTemp").innerHTML =
        day7minTemp + "°";





        // Today
        let todayImg = data.current.weather[0].main;
        let imageSource = getImage(todayImg);
        document.getElementById("wrapper-icon-today").src = source;

        let day2Img = data.daily[0].weather[0].main;
        console.log (day2Img);
        let day2imageSource = getImage(day2Img);
        document.getElementById("wrapper-icon-day2").src = source;

        let day3Img = data.daily[1].weather[0].main;
        console.log (day3Img);
        let day3imageSource = getImage(day3Img);
        document.getElementById("wrapper-icon-day3").src = source;

        let day4Img = data.daily[2].weather[0].main;
        console.log (day4Img);
        let day4imageSource = getImage(day4Img);
        document.getElementById("wrapper-icon-day4").src = source;

        let day5Img = data.daily[3].weather[0].main;
        console.log (day4Img);
        let day5imageSource = getImage(day5Img);
        document.getElementById("wrapper-icon-day5").src = source;

        let day6Img = data.daily[4].weather[0].main;
        console.log (day6Img);
        let day6imageSource = getImage(day6Img);
        document.getElementById("wrapper-icon-day6").src = source;

        let day7Img = data.daily[5].weather[0].main;
        console.log (day7Img);
        let day7imageSource = getImage(day7Img);
        document.getElementById("wrapper-icon-day7").src = source;

        //Backgrounds
        function getImage(todayImg){

            switch (todayImg) {

                case "Snow":
                source = "./images/icons/icon-13.svg"
                break;


                case "Clouds":
                source = "./images/icons/icon-6.svg"
                break;


                case "Fog":
                source = "./images/icons/icon-7.svg"
                break;


                case "Rain":
                source = "./images/icons/icon-10.svg"
                break;


                case "Clear":
                source = "images/icons/icon-2.svg";
                break;


                case "Thunderstorm":
                source = "./images/icons/icon-11.svg"

                default:

                break;
            }
        }


        });





    });



</script>
