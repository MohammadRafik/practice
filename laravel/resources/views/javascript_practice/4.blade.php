{{-- calc days to a point in time and multiply and divide without page refresh --}}

<html>
    <body>
    <script>
        //calc days left untill next xmas POGGGERS 
        var date = new Date();
        var cmas = new Date(date.getFullYear(),11,25);
        if(date.getMonth() == cmas.getMonth() && date.getDate() > cmas.getDate())
            cmas.setFullYear(cmas.getFullYear()+1);
        console.log((cmas.getTime() - date.getTime())/(60*60*24*1000)+ ' days left untill xmas'); 
    </script>

{{-- Write a JavaScript program to calculate multiplication and division of two numbers --}}
    Enter 2 numbers to have them multiplied or divided <br>
        1st Number: <input type="number" id="num1"><br>
        2nd Number: <input type="number" id="num2"><br>
        <input type="button" value="Multiply" onClick="multiply()">
        <input type="button" value="Divide" onClick="divide()">
        <p>The result is: <span id="result"></span></p>

        <script>
            function multiply(){
                num1 = document.getElementById('num1').value;
                num2  = document.getElementById('num2').value;
                document.getElementById('result').innerHTML = num1*num2;
            }

            function divide(){
                num1 = document.getElementById('num1').value;
                num2  = document.getElementById('num2').value;
                document.getElementById('result').innerHTML = num1/num2;
            }
        </script>


    </body>
</html>