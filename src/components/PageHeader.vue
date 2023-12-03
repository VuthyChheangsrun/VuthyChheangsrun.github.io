<template>
    <div id="wrapper">
        <div style="font-size: 70px; color: #253D4E;">{{ categoryName }}</div><br>
        <div style="display: flex; gap: 10px; line-height: 12px; color: #7E7E7E;">
            <span>Home</span>
            <div style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg></div>
            <span>Categories</span>
            <div style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg></div>
            
            <span>{{ categoryName }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PageHeader",
        props: ["categoryName"]
    };
</script>

<style scoped>
    #wrapper {
        border-radius: 10px;
        background-color: #3BB77E33;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 100px 0 100px;
    }
</style>