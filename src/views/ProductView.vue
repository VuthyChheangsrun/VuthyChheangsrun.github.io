<template>
    <div id="wrapper">
        <div style="display: flex; gap: 10px; line-height: 12px; color: #7E7E7E; margin: 0 0 20px 0;">
            <span>Home</span>
            <div style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg></div>
            <div>
                <div style="display: flex; gap: 10px;">
                    <span>{{ theCategory.name }}</span>
                    <div style="width: 12px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></div>
                    <span style="color: #3BB77E;">{{ theProduct.name }}</span>
                </div>
            </div>
        </div>

        <div id="showcase">
            <div id="images">
                <ProductImage :image="theProduct.image" style="height: 400px; width: 100%;"/>
                <div id="relatedImage">
                    <div id="goleft"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg></div>
                    <div style="display: flex; gap: 10px;">
                        <ProductImage image="/images/orange2.png" zoom="none" style="height: 100px; width: 100px;"/>
                        <ProductImage image="/images/zppb2xd1 1.png" zoom="none" style="height: 100px; width: 100px;"/>
                        <ProductImage image="/images/6 1.png" zoom="none" style="height: 100px; width: 100px;"/>
                        <ProductImage image="/images/lemon.png" zoom="none" style="height: 100px; width: 100px;"/>
                    </div>
                    <div id="goright"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg></div>
                </div>
                <div>

                </div>
            </div>
            <div id="showInfo">
                <ProductDetail :name="theProduct.name" :rate="theProduct.rate" :disPrice="theProduct.discountPrice" :sellPrice="theProduct.sellPrice" />
            </div>
        </div>

        <div style="display: flex; gap: 10px; padding: 20px 50px 0 50px">
            <div class="moreInfo" style="color: #3BB77E;">Description</div>
            <div class="moreInfo">Additional info</div>
            <div class="moreInfo">Review(3)</div>
        </div>
        <div style="padding: 20px 50px 0 50px">
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            <br>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
        </div>
    </div>
</template>

<script>
    import ProductImage from '../components/ProductImage.vue';
    import ProductDetail from '../components/ProductDetail.vue';

    import { useProductStore } from '@/stores/product';
    import { mapState } from 'pinia';

    export default {
        name: "ProductView",
        components: {
            ProductImage,
            ProductDetail,
        },
        computed: {
            ...mapState(useProductStore, ['categories']),
            ...mapState(useProductStore, ['products']),

            theProduct () {
                for (const pro of this.products){
                    if (pro.id == this.productId) {
                        return pro
                    }
                }
                // return this.products.filter(pro => pro.id == this.productId)[0]
            },

            theCategory () {
                for (const cate of this.categories){
                    if (cate.id == this.theProduct.category) {
                        return cate
                    }
                }
                // return this.categories.filter(cate => cate.id == this.theProduct.category)
            }
        },
        methods: {
            
            
        },
        props: ['productId']
    };
    
</script>

<style scoped>
    #wrapper {
        padding: 20px;
        margin: auto;
    }

    #showcase {
        width: 1485px;
        display: flex;
        gap: 50px;
    }
    #images {
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    #relatedImage {
        display: flex;
        gap: 10px;

    }
    #goleft {
        width: 15px;
        background-color: #3BB77E;
        border-radius: 15px;
        display: flex;
        align-items: center;
        padding: 7px 15px;
        color: white;
        margin: auto 0;
    }
    #goright {
        width: 15px;
        background-color: #b8b8b8;
        border-radius: 15px;
        display: flex;
        align-items: center;
        padding: 7px;
        margin: auto 0;
    }
    #showInfo {
        width: 50%;
    }
    .moreInfo {
        color: rgb(161, 161, 161);
        border-radius: 10px;
        border: solid 0.5px rgb(161, 161, 161);
        padding: 5px 10px;

    }

</style>