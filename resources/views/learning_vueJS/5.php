<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
</head>
<body>
    <div id='app'>
        <li v-for='(value, indexName) in items'> {{indexName}}: {{value}}</li>
    
    </div>


    <script>
        var vueInstance = new Vue({
            el: '#app',
            data: {
                items: [
                    {firstName: 'moe'},
                    {lastName: 'rafik'},
                    {age: '420'}
                ]
            }
        })
        
    </script>
</body>
</html>