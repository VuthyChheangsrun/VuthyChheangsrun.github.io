<template>
    <div :style="`background-color: ${bg}`">
        <img :src="img" alt="">
        <div id="text">
            <span id="name">{{ name }}</span>
            <span id="ammount">{{ ammount }} items</span>
        </div>
        
    </div>
</template>

<script>
    export default {
        name: "Category",
        props: ["img", "name", "ammount", "bg"]
    };
</script>

<style scoped>
    div{
        width: 137px;
        height: 182px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
    }
    img {
        width: 100px;
        margin-left: auto;
        margin-right: auto;
    }
    span {
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
    }
    #ammount {
        color: #B6B6B6;
        margin-bottom: 20px;
    }
</style>