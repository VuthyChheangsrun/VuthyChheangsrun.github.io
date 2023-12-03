<template>
    <div id="wrapper">
        <div style="display: flex; gap: 10px; line-height: 12px; color: #7E7E7E;">
            <span>Home</span>
            <div style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg></div>
            <div>
                <div v-for="pro in products">
                    <div v-if="pro.id == productId" style="display: flex;">
                        <div v-for="cate in categories">
                            <span v-if="cate.id == pro.category">{{ cate.name }}</span>
                        </div>

                        <div style="width: 12px; margin: 0 10px 0 10px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></div>

                        <span style="color: #3BB77E;">{{ pro.name }}</span>
                    </div>
                    
                </div>
            </div>
        </div>

        <div>
            <div>
                <img src="" alt="">
            </div>

        </div>
    </div>
</template>

<script>
    import { useProductStore } from '@/stores/product';
    import { mapState } from 'pinia';

    export default {
        name: "ProductView",
        components: {
        },
        computed: {
            ...mapState(useProductStore, ['categories']),
            ...mapState(useProductStore, ['products']),

            // pro: () => {
            //     for 
            // }
        },
        props: ['productId']
    };
    
</script>

<style scoped>
    #wrapper {
        height: 300px;
        width: 1485px;
        padding: 20px;
    }
</style>