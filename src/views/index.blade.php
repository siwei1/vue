<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-first-vue</title>
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>

<style>
    * { margin: 0; padding: 0; }
    html,body,#app{  height: 100%;  width: 100%;  font-family: 微软雅黑;  background: #000}
    ul,li{list-style: none}

    /* 跳转页面动画 */
    .slideUp-leave,.slideUp-enter,.slideDown-enter,.slideDown-leave{
        position: absolute;
    }

    /*进入页面的以后的状态 translateY 为0 所以不用设置 只需要设置过渡效果*/
    .slideUp-enter-active,.slideUp-leave-active,.slideDown-leave-active,.slideDown-enter-active{
        transition: all .5s linear;
    }

    /*离开页面的结束状态*/
    .slideUp-leave-active{
        position: absolute;
        transform: translateY(-100%);
    }
    .slideDown-leave-active{
        position: absolute;
        transform: translateY(100%);
    }

    /*进入页面的初始状态*/
    .slideDown-enter{
        transform: translateY(-100%);
    }
    .slideUp-enter{
        transform: translateY(100%);
    }




</style>