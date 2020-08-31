<!-- learning vue components -->
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <ol>
                <todo-item
                    v-for="item in groceryList"
                    v-bind:todo="item"
                    v-bind:key="item.id">
               </todo-item>
            </ol>
        </div>

    <script>
        Vue.component('todo-item', {
            props: ['todo'],
            template: '<li>{{ todo.text }}</li>'
        })

        var app = new Vue({
            el: '#app',
            data: {
            groceryList: [
                { id: 0, text: 'Vegetables' },
                { id: 1, text: 'Cheese' },
                { id: 2, text: 'Whatever else humans are supposed to eat' }
            ]
            }
        })
    </script>

    </body>
</html>