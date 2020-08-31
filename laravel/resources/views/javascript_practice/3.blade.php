@extends('layouts.master')

@section('content')

{{-- Write a JavaScript program to find 1st January is being a Sunday between 2014 and 2050 --}}
{{-- 2014 jan 1 is a wed so start=3 --}}

    <script>
        // start = 3;
        // for(i=1;i<37;i++){
        //     if(((365*i+start)%7) == 0){
        //         numberOfYears = 2014+i;
        //         document.write('1st jan that will be a sunday is '+numberOfYears+'<br>');
        //     }
        // }
        //this does not work because it does not account for leap years which have 366 days in them, i know crazy!

        for(year=2014;year<2051;year++){
            var date = new Date(year,0,1);
            if(date.getDay() == 0)
            document.write("1st jan thats a sunday will happen on "+year+"<br>")
        }

        document.write("_______________________________<br><br>");
        //  Write a JavaScript program where the program takes a random integer between 1 to 10,
        //  the user is then prompted to input a guess number. If the user input matches with
        //  guess number, the program will display a message "Good Work" otherwise display a message "Not matched".
        
        function getRandomInt(min,max){
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random()*(max-min))+min;
        }
        //instead of this function i couda done RandomNumber = Math.ceil(Math.random()*10);

        RandomNumber = getRandomInt(1,10);
        num = window.prompt('guess the number the computer generated from 1 to 10');
        if(num == RandomNumber){
            document.write('good job! the number was '+RandomNumber);
        }
        else{
            document.write('WROOOOOOOOOOOOOOOOOOOOOONG! the correct answer was '+RandomNumber);
        }
        document.write('<br>_______________________<br><br>');







    </script>



@endsection