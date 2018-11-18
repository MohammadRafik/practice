<html>
    <body>
            {{-- Write a JavaScript program to create a new string from a given string changing the position of first 
            and last characters. The string length must be greater than or equal to 1 --}}

            {{-- you can run a function by calling it inside console.log(), example: console.log(functionname()) --}}

            <script>
            
                string1 = 'hello';
                string2 = string1[string1.length -1]+ string1.substring(1,string1.length-1)  +string1[0];
                console.log(string2);
            </script>

{{-- Write a JavaScript program to check from two given integers if either one is 8 or their sum or difference is 8 --}}

            <script>
            // looks like Math.abs(x-y) can do what this function does xDDDDDDDDDDDddddddd
                function findDiff(x,y){
                    if(x>y){
                        return x-y;
                    }
                    if(y>x){
                        return y-x;
                    }
                    if(x==y){
                        return 0;
                    }
                }

                function checkInt(x,y){
                    return (x==8 || y==8 || x+y == 8 || findDiff(x,y)==8)
                }
            
                    console.log(checkInt(1,7));
                    console.log(checkInt(1,8));
                    console.log(checkInt(1,9));
                    console.log(checkInt(9,1));
                    console.log(checkInt(124,27));
                    console.log(checkInt(11,27));

            </script>


{{-- Write a JavaScript program to reverse a given string --}}

            <script>
                function ReversString(string){
                    stringLength = string.length;
                    var NewString=[];
                    for(i=0;stringLength>i;i++){
                        NewString[i] = string[stringLength-1-i];
                    }
                    return NewString.join('');//this converts the array to string and im using join('') instead of toString() to avoid the added commas
                }

                console.log(ReversString('welcome'));
                // easier to type and maybe better method: return string.split('').reverse().join('');
            </script>

    </body>
</html>