<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id='comp-test'>
        <test-component title='test123'>slot section</test-component>
    </div>
    <script>
    Vue.component('test-component', {
        props:['title'],
        template: `
            <div class="demo-alert-box">
            <h1>{{title}}</h1>
            <slot></slot>
            </div>
        `     
    })

    var vm = new Vue({
        el: '#comp-test'
    })
    
    </script>
    
</body>
</html>