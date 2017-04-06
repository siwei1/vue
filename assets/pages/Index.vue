<template>

    <div class="index">
        <h1>我的简历</h1>
        <router-link to="/vue/resume">
            <div class=" iconfont icon-shuangjiantou_shang"></div>
        </router-link>
    </div>

</template>


<script>

    export default{

    }

</script>

<style>
    @import "/static/css/iconfont.css";
    .index{
        background: url('/static/img/resume-bg.jpg');
        background-size: 100% 100%;
        height: 100%;
        width: 100%;
        text-align: center;
    }

    .index h1{
        width: 100%;
        color: #fff;
        position: fixed;
        bottom: 30%;
        left:0;
    }

    .index div{
        color: #fff;
        width: 100%;
        position: fixed;
        left:0;
        font-size: 2rem;
        animation: myfirst 2s infinite;
    }

    @keyframes myfirst {
        from {bottom: 10%}
        to {bottom: 15%}
    }

</style>