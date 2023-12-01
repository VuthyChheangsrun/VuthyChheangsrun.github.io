<template>
    <div style="display: flex; justify-content: space-between; padding: 0 30px; width: 1450px; margin: auto;">
        <div style="font-size: x-large;">{{ title }}</div>
        <div style="display: flex; gap: 20px;">
            <button>All</button>
            <button v-for="a in groups" style="color: gray;">{{ a }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Menu",
        props: ["title", "groups"],

    };
</script>

<style scoped>
    button {
        background-color: transparent;
        border: 0;
    }
</style>