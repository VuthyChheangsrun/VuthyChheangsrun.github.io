<template>
    <button :style="`background-color: ${color}`">
        <span>Shop Now</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-7.75-7.75M19.5 12l-7.75 7.75" />
        </svg>
    </button>
</template>

<script>
    export default {
        name: "MyButton",
        props: ["text", "color"]
    };
</script>

<style scoped>
    button{
        border-radius: 3px;
        border-color: transparent;
        color: white;
        padding: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        flex-direction: row;
    }
    svg{
        width: 10px;
        margin-left: 5px;
    }
</style>