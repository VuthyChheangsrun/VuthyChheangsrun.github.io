<template>
    <div :style="`background-color: ${bg}`" id="wrapper">
        
        <span id="info">{{ text }}</span>
        <MyButton id="button" :color="`${buColor}`" />
        
        <img :src="`${img}`" alt="">
    </div>
</template>

<script>
    import MyButton from './MyButton.vue';

    export default {
        name: "Promo",
        props: ["img", "text", "bg", "buColor"],
        components: {
            MyButton,
        }
    };
</script>

<style scoped>
    #wrapper{
        width: 512px;
        height: 300px;
        position: relative;
        border-radius: 7px;
    }
    #info{
        font-size: 30px;
        width: 50%;
        position: absolute;
        top: 22%;
        left: 50px;
        display: flex;
        flex-direction: column;
        z-index: 1;
    }

    #button{
        margin-top: auto;
        position: absolute;
        bottom: 20%;
        left: 50px;
        z-index: 1;
    }

    img {
        position: absolute;
        bottom: 0px;
        right: 0px;
        z-index: 0;
    }
</style>