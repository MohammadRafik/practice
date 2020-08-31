
<html>
    <head>    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script></head>
    <body>
        <div id='app-4'>
            <ol>
                <li v-for="todo in todos">
                    {{ todo.text }}
                </li>
            </ol>
        </div>

        <script>
            var app = new Vue({
                el:'#app-4',
                data: {
                    todos: [
                        { text: 'Learn JS'},
                        { text: 'learn Vue'},
                        { text: 'build something awsome!!! Pepega'}
                    ]
                }
            })
            
        </script>


        <div id="app-5">
            <p>{{ message }}</p>
            <button v-on:click="reversaroni">Reverse message</button>
        </div>

        <script>
        var app420 = new Vue({
            el: '#app-5',
            data: {
                message: 'You are going to become a very good web developer'
            },
            methods:{
                reversaroni: function(){
                    this.message = this.message.split('').reverse().join('')
                }
            }
        })
        </script>
    </body>
</html>
