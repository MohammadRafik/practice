@extends('layouts.master')

@section('title')
session 2
@endsection

@section('content')

    <script>
        document.write('current date:');
        var date = new Date();
        document.write(date.getDate()+'/'+(date.getMonth()+1)+'/'+date.getFullYear());
    </script>
    <br>
    <br>

    
    <script>
        // program to check if its a leap year or not
        year = window.prompt("input a year: ");
        if(year%4 == 0){
            if(year%100 ==0){
                if(year%400 ==0){
                    x = year+' is a leap year!';
                }
                else{
                    x=year=' is not a leap year';
                }
            }
            else{
                x=year+ " is a leap year!";
            }
        }
        else{
            x=year=' is not a leap year';
        }
        //or use this(much more efficent): x = (year % 100 === 0) ? (year % 400 === 0) : (year % 4 === 0);
        document.write(x);


    </script>

@endsection