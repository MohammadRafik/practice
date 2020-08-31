<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <title>practice Vue</title>
</head>
<body>
    
    <div id='app-1'>
        Add a todo <input ref='todo' v-model='inputMessage' placeholder='E.g. Feed the cat'>
        <button v-on:click='AddToList'>Add</button>
        <br>
        <ol>
            <template v-for='item in list'>
                <li>{{item.message}}</li>
                <button v-on:click='removeFromList'>Remove</button>
            </template>
        </ol>
    </div>

    <script>
    var app = new Vue({
        el: '#app-1',
        data:{
            inputMessage:'',
            list:[ 

            ]
        },
        methods: {
            AddToList: function(){
                message = this.inputMessage;
                this.list.push({message});
                this.inputMessage = '';
            },
            removeFromList: function(){
                // monkaHmm....
            }

        }
    })
    </script>

</body>
</html>