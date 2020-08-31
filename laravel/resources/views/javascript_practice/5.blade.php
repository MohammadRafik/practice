<!DOCTYPE html>
<html lang="en">
<head>
        {{-- Write a JavaScript program to convert temperatures to and from Celsius, Fahrenheit --}}
</head>
<body>
    <br><br><br><br><br><br>
    <input type="number" id="num"><br><br>
    <input type="button" value="Convert to Faranhite" onClick="CelToFar()">
    <input type="button" value="Convert to Celsius" onClick="FarToCel()">
    <p>That value in <span id="span"></span></p>

    <script>
        function CelToFar(){
            num = document.getElementById('num').value;
            document.getElementById('span').innerHTML = num*1.8+32;
        }

        function FarToCel(){
            num = document.getElementById('num').value;
            document.getElementById('span').innerHTML = (num-32)/1.8;
        }
    </script>


    <script>
        alert(document.URL);
    </script>
    
</body>
</html>