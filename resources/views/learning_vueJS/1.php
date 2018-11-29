<!DOCTYPE html>
<html lang="en">

    <body>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <div id='app'>
            <p> {{ message }}</p>
        </div>
        
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'hello vueJS Poggers'
                }
            })
            
        </script>
    </body>

</html>