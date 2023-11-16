<template>
    <div style="display: flex; justify-content: space-between; padding: 0 30px;">
        <div style="font-size: x-large;">{{ title }}</div>
        <div style="display: flex; gap: 20px;">
            <span>All</span>
            <span v-for="a in groups" style="color: gray;">{{ a }}</span>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Menu",
        props: ["title", "groups"],

    };
</script>