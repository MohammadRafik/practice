

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>

<div id='app'>
    <form action="">
    
        <span v-if="message == ''" style="color:red;"> You must write in the textarea</span><br>
        
    
        <textarea v-model='message'></textarea><br>
        <p>{{ message }}</p>

        <button type="submit">Submit</button>
    </form>

    <script>
    var vueapp = new Vue({
        el: '#app',
        data: {
            message: ''
        }
    })

    
    </script>
</div>


</body>
</html>