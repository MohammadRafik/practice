<html lang="en">
<head>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
</head>
<body>

        <div id="app">
            <span v-if="seen">Now you see me xd</span>
        </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                seen:false
            }
        });
    </script>


</body>
</html>