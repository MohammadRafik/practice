{{-- Write a JavaScript program to rotate the elements left of a given array of integers of length 3 --}}

<html>
    <body>
        <script>
            function rotateArray(ar){
                return [ar[1],ar[2],ar[0]];
            }
            
            console.log(rotateArray([1,2,3]));
        </script>

{{-- Write a JavaScript program to check if the first and last elements are equal of a given array of integers length 3 --}}

        <script>
        
            function compareArrayElements(a){
                return (a[0] == a[a.length-1])
            }
        
            console.log(compareArrayElements([1,2,1]))
            console.log(compareArrayElements([1,2,3]))
        </script>

        {{-- Write a JavaScript program to reverse the elements of a given array of integers length 3. --}}

        <script>
            a=[1,2,3,4,5];
            console.log([1,2,3].reverse());
            console.log(a.reverse());
        </script>

        {{-- Write a JavaScript program to find the larger value between the first or last 
            and set all the other elements with that value. Display the new array --}}

            <script>
                function checkEndsAndSetArray(array){
                    if(array[0]>array[array.length-1]){

                    }
                    else{

                    }
                }
            
            </script>


{{-- Write a JavaScript program to test if an array of integers of length 2 contains 1 or a 3 --}}
            <script>
                function contains1Or3(array){
                    return (array.indexOf(1) != -1 || array.indexOf(3) != -1)
                }
            console.log(contains1Or3([1,2,3,4,5]));
            console.log(contains1Or3([1,2]));
            console.log(contains1Or3([2,4,5]));
            console.log(contains1Or3([4,5]));
            </script>

            {{-- Write a JavaScript program to check whether two arrays of integers of same length are similar or not.
                 The arrays will be similar if one array can be obtained from another array by swapping at most one pair of elements. --}}
            <script>
                function checkSimilarity(a1,a2){
                    



                }
            </script>
    </body>
</html>