<template>
    <transition :name="transitionName">
        <router-view :info="info"></router-view>
    </transition>
</template>

<script>

    const animation = {
        slideDown:[
            'resume'
        ],
        slideUp:[
            'index'
        ]
    }

    export default{

        data() {
            return {
                transitionName: 'slide',
                info: {}
            }
        },
        watch: {
            '$route' (to,form){
                var name = form.name;
                for( let key in animation){
                    if((animation[key].find((n)=> n == name)) != undefined){
                        this.transitionName = key;
                    }
                }
            }
        },
        created(){
            this.$http.get('/api/info').then(response=>{
                this.info = response.data;
            })
        }
    }
</script>