<template>
  <ShowCase />
  <br>
  <div style="display: flex; flex-direction: column;">
    <Menu title="Features Categories" :groups="groups" class="menu" />
    <div id="cate">
      <div v-for="cate in categories">
        <RouterLink :to="`/categories/${cate.id}`"><Category :bg="cate.color" :img="cate.image" :name="cate.name" :ammount="cate.item" /></RouterLink>
      </div>
    </div>
    <div id="promo">
      <div v-for="pro in promotions">
        <RouterLink :to="`/products/${pro.id}`">
          <Promo :bg="pro.color" :img="pro.image" :text="pro.title" :buColor="pro.buColor"  />
        </RouterLink>
      </div>
    </div>
    <Menu title="Popular Products" :groups="groups" />
  
    <div id="product">
      <div v-for="pro in products">
      <RouterLink :to="`/products/${pro.id}`"><Product
        :tag="pro.tag"
        :tagcol="pro.tagcol"
        :img="pro.image"
        :name="pro.name"
        :rate="pro.rate"
        :desc="pro.description"
        :sellprice="pro.sellPrice"
        :disPercent="pro.discountPercentage"
        :disPrice="pro.discountPrice" /></RouterLink>
    </div>
    </div>
  
  </div>
    
</template>
    
    <script>
      import MyButton from '../components/MyButton.vue';
      import Category from '../components/Category.vue';
      import Promo from '../components/Promo.vue';
      import Menu from '../components/Menu.vue';
      import Product from '../components/Product.vue';
      import ShowCase from '../components/ShowCase.vue';
    
      import { useProductStore } from '@/stores/product';
      import { mapState } from 'pinia';
    
    
      export default {
        name: "HomeView",
        components: {
          MyButton,
          Category,
          Promo,  
          Menu,
          Product,
          ShowCase,
        },
    
        computed: {
          ...mapState(useProductStore, ['groups']),
          ...mapState(useProductStore, ['categories']),
          ...mapState(useProductStore, ['promotions']),
          ...mapState(useProductStore, ['products']),
        }
      };
      
    </script>
    
    <style scoped>
      div{
        display: flex;
        gap: 23.7px;
      }
    
    
      #cate {
        display: flex;
        gap: 13px;
        justify-content: center;
        margin: auto;
      }
      #product {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        gap: 13px;
        justify-content: center;
        margin: auto;
      }
    
      #promo{
        justify-content: center;
        margin: auto;
      }

      a{
        color: black;
        text-decoration: none;
      }
    </style>
    