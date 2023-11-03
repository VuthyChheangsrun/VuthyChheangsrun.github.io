<template>
  
    <div id="cate">
      <Category bg="#F2FCE4" img="src/assets/burger.png" name="Cake & Milk" ammount="14" />
      <Category bg="#FFFCEB" img="src/assets/peach.png" name="Peach" ammount="17" />
      <Category bg="#ECFFEC" img="src/assets/kiwi.png" name="Oganic Kiwi" ammount="21" />
      <Category bg="#FEEFEA" img="src/assets/apple.png" name="Red Apple" ammount="68" />
      <Category bg="#FFF3EB" img="src/assets/snack.png" name="Snack" ammount="34" />
      <Category bg="#FFF3FF" img="src/assets/black.png" name="Black Plum" ammount="25" />
      <Category bg="#F2FCE4" img="src/assets/cabbage.png" name="Vegetables" ammount="65" />
      <Category bg="#FFFCEB" img="src/assets/headset.png" name="Headphone" ammount="44" />
      <Category bg="#F2FCE4" img="src/assets/cakemilk.png" name="Cake & Milk" ammount="54" />
      <Category bg="#FFF3FF" img="src/assets/orange.png" name="Orange" ammount="62" />
    </div>
    <br>
    <div>
      <Promo bg="#F0E8D5" text="Everyday Fresh & Clean with Our Products" buColor="green" img="src/assets/onion.png" />
      <Promo bg="#F3E8E8" text="Make your breakfast healthy" buColor="green" img="src/assets/milk.png" />
      <Promo bg="#E7EAF3" text="The best Oganic Products Online" buColor="#FDC040" img="src/assets/vegetable.png" />

    </div>
  
  
  

</template>

<script>
  import MyButton from './components/MyButton.vue';
  import Category from './components/Category.vue';
  import Promo from './components/Promo.vue';

  export default {
    name: "App",
    components: {
      MyButton,
      Category,
      Promo,
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
    gap: 16px;
  }
</style>
