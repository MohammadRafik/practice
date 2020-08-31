{{--  Write a JavaScript program to check from two given integers, if one is positive and one is negative --}}

<html>
    <head>

    </head>

    <body>
        <p>enter 2 integers, one must be positive one negative to return true, otherwise it will be false</p>
        <input type="number" name="num1" id="num1"><br>
        <input type="number" name="num2" id="num2"><br>
        <input type="button" value="submit" onClick="calc()">
        <p>result is <span id='span'></span></p>


        <script>
            function calc(){
                num1 = document.getElementById('num1').value;
                num2 = document.getElementById('num2').value;
                document.getElementById('span').innerHTML = ((num1 > 0 && num2 < 0) || (num1 < 0 && num2 > 0));
            }
        </script>


            {{-- Write a JavaScript program to create a new string adding "Py"
            in front of a given string. If the given string begins with "Py" then return the original string --}}
        <br><br><br><br>
        <p>enter a string</p>
        <input type="text" name="text" id="text">
        <input type="button" value="submit" onClick='PY()'>
        <p>Output: <span id='span2'></span></p>

        <script>
            function PY(){
                string = document.getElementById('text').value;
                if(string.substring(0,2) == 'Py'){
                    document.getElementById('span2').innerHTML = string;
                }
                else{
                    document.getElementById('span2').innerHTML = 'Py'+string;
                }
            }
        </script>


        
    </body>

</html>