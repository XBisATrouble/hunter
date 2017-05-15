<template>
    <button
            class="normal_button follow_button"
            v-bind:class="{'followed_button':followed}"
            v-text="text"
            v-on:click="follow"
    ></button>
</template>

<script>
    export default {
        props:['job','user'],
        mounted() {
            this.$http.post('/api/job/follower',{'job':this.job,'user':this.user}).then(response => {
                this.followed=response.data.followed
            })
        },
        data(){
            return {
                followed:false
            }
        },
        computed:{
            text(){
                return this.followed?'已关注':'关注该职位'
            }
        },
        methods:{
            follow(){
                this.$http.post('/api/job/follow',{'job':this.job,'user':this.user}).then(response => {
                    this.followed=response.data.followed
                })
            }
        }
    }
</script>
