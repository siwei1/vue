<template>
    <div class="resume">
        <header>
            <header-back :title="title"></header-back>
            <div id="aa"></div>
            <img :src="info.avatar" class="head-img">
            <p>{{info.name}}</p>
            <p>求职:php工程师</p>
        </header>

        <section class="info">

            <div class="tab-select">
                <ul>
                    <li v-for=" tab in tabSelect" :class="{active:tab.select}" @click="getSelect(tab)">{{tab.name}}</li>
                </ul>
            </div>

            <div class="tab">
                <transition-group :name="slide" tag="span">
                    <ul  v-for=" (tab,k) in tabSelect"  :key="k" v-show="tab.select">
                       <li v-for="(item,key) in info[tab.as]" v-if="tab.as == 'skill'">{{key+1}}.{{item}}</li>
                       <li v-for="(item,key) in info[tab.as]" v-if="tab.as == 'experience'">
                           <div class="top">
                               <span class="company"> {{item.company}} </span>
                               <span class="time">{{item.start_time}}-{{item.end_time}}</span>
                           </div>
                       </li>
                    </ul>
                </transition-group>
            </div>
        </section>

    </div>
</template>

<script>
    import HeaderBack from '../components/Header';
    import VueResource from 'vue-resource';

    export default{
        data(){
            return {
                title:'简历',
                slide:'',
                tabSelect:[
                    {
                        'name':'专业技术',
                        'select':true,
                        'as':'skill',
                        'slide':'slide_right'
                    },
                    {
                        'name':'工作经验',
                        'key':false,
                        'as':'experience',
                        'slide':'slide_left'
                    }
                ]
            }
        },
        methods:{
            getSelect(item){
                this.tabSelect.forEach(function(v){
                    v.select =false
                })

                item.select = !item.select;
                this.slide = item.slide;
            }
        },
        components:{
            HeaderBack
        },
        props:['info']

    }

</script>

<style>


    .slide_left-enter-active,.slide_left-leave-active{
        transition: all .3s linear;
    }

    .slide_left-leave-to,.slide_left-enter-to{
        transform: translateX(-100%);
    }


    .slide_right-enter-active,.slide_right-leave-active{
        transition: all .3s linear;
    }

    .slide_right-enter{
        transform: translateX(-100%);
    }


    .slide_right-leave{
        position: absolute;

    }

    .slide_right-leave-to{
        position: absolute;
        transform: translateX(100%);
    }






    .resume{
        width: 100%;
        height: 100%;
    }

    header{
        width: 100%;
        text-align: center;
    }

    .head-img{
        width: 100px;
        height: 100px;
        margin: 7% auto 3%;
        border: 2px solid #fff;
        border-radius: 50%;
        padding: 2px;
    }

    header p{
        color: #fff;
    }

    .resume .info{
        margin-top: 2rem;
        width: 100%;
        box-sizing:border-box;
        background: #f5f5f5;
        padding: 1em;
        overflow: hidden;
        box-shadow: 0 0 30px #888888 inset;
    }

    .resume .info .tab{
        background: #fff;
        padding: 1rem;
        display: block;
        overflow: hidden;
        position: relative;
        z-index: 99999;
    }

    .resume .info .tab>span{
        display: flex;
    }

    .tab-select ul{
        display: flex;
        height: 2rem;
    }

    .tab ul{
        max-width: 100%;
        min-width: 100%;
        min-height: 20rem;
    }

    .tab ul li{
        line-height: 2rem;
        font-size: 12px;
    }

    .tab ul li div.top{
        display: flex;
    }


    .tab ul li div span.company{
        flex:1;
        text-overflow:ellipsis;
        white-space:nowrap;
        overflow:hidden;
    }

    .tab ul li div span.time{
        flex:2;
        text-align: right;
    }


    .tab-select ul li{
        flex:1;
        color: #000;
        text-align: center;
        line-height: 2rem;
        border: 1px solid #fff;
        box-sizing: border-box;
    }

    .tab-select ul li.active{
        background: #000;
        color: #fff;
    }

</style>