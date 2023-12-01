<template>
    <div id="wrapper">
        <img :src="icon" alt="">
        <span style="margin: auto 0 auto 0;">{{ title }}</span>
        <div :style="`display: ${dropdown}`" style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg></div>
    </div>
</template>

<script>
    export default {
        name: "MenuItem",
        props: ["icon", "title", "dropdown"],

    };
</script>

<style scoped>
    #wrapper {
        display: flex;
        margin: auto 0 auto 0;
        gap: 5px;
    }
</style>