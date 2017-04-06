<template>

    <div class="header">
        <div class="header_back" @click="goBack">返回</div>
        <div>{{title}}</div>
    </div>

</template>

<script>

    export default{
        props:['title'],
        methods: {
            goBack(){
                window.history.back();
            }
        }

    }

</script>

<style>
    .header{
        position: relative;
        line-height: 2rem;
        width: 100%;
        background: #fff;
    }

    .header_back{
        position: absolute;
        top:0;
        left: 1rem;
        cursor: pointer;
    }


</style>