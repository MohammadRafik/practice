

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Write a JavaScript exercise to get the extension of a filename -->
    <script>
        filename = 'example.xd';
        console.log(filename.split('.').pop());
    </script>

{{-- // Write a JavaScript program to get the difference between a given number and 13, if the number
// is greater than 13 return double the absolute difference --}}

    <p>Enter a number</p>
    <input type="number" name="number" id="num">
    <input type="button" value="Submit" onClick='quickmaffs()'>
    <p>The result is <span id='result'></span></p>

    <script>
        function quickmaffs(){
            num = document.getElementById('num').value;
            if(num > 13)
            {
               result = (Math.abs(13 - num))*2;
            }
            else{
                result = 13 - num;
            }
            document.getElementById('result').innerHTML = result+' ez pz LEMON SQUEEZY';
        }
    </script>

{{-- . Write a JavaScript program to check two given numbers and return true if one of the number is 50 or if their sum is 50 --}}

    <script>
        if(num1 == 50  || num2 == 50  || num1+num2 == 50) //order of operations might mess this up, not sure can add paranthesis to be sure tho
    </script>

</body>
</html>