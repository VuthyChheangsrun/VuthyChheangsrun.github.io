<template>
    <PageHeader :categoryName="theCategory.name" />
</template>

<script>
    import PageHeader from '../components/PageHeader.vue';

    import { useProductStore } from '@/stores/product';
    import { mapState } from 'pinia';

    export default {
        name: "CategoryView",
        components: {
            PageHeader,
        },
        computed: {
            ...mapState(useProductStore, ['categories']),

            theCategory () {
                for (const cate of this.categories){
                    if (cate.id == this.categoryId) {
                        return cate
                    }
                }
            }

        },
        props: ['categoryId']
    };
    
</script>

