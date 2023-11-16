<template>
    <div :style="`background-color: ${bg}; background-image: url(${img});`" id="wrapper">
        <div id="info">
            <span>{{ text }}</span><br>
            <MyButton id="button" :color="`${buColor}`" />
        </div>
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
        width: 480px;
        height: 300px;
        border-radius: 7px;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right bottom;; /* Center the image */
    }
    #info{
        width: 50%;
        height: 300px;
        font-size: 30px;
        margin-top: 25px;
        margin-left: 25px;
        position: relative;
    }

    #button{
        margin-top: auto;
        position: absolute;
        bottom: 30%;
    }

</style>