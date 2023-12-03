<template>
  <div id="topmenu">
    <img src="/images/Logo.png" alt="" style="height: 50px;">
    <Search style="margin: auto 0 auto 0; margin-left: 50px;" />
    <div style="display: flex; gap: 25px; margin-left: auto;">
      <MenuItem icon="images/fi-rs-user.png" title="Account" dropdown="none" />
      <MenuItem icon="images/icon-compare 1.png" title="Compare" dropdown="none" />
      <MenuItem icon="images/fi-rs-heart.png" title="Wishlist" dropdown="none" />
      <MenuItem icon="images/fi-rs-shopping-cart.png" title="Cart" dropdown="none" />
    </div>
  </div>
  
  <div id="bottommenu">
    <div id="browseallcate">
      <img src="/images/fi-rs-apps.png" alt="">
      Browse All Categories
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
      </svg>
    </div>
    <div style="display: flex; gap: 25px;">
      <RouterLink to="/categories/1"><MenuItem icon="images/fi-rs-flame 1.png" title="Hot Deals" dropdown="none" /></RouterLink>
      
      <RouterLink to="/"><MenuItem  title="Home" dropdown="none" /></RouterLink>
      <MenuItem  title="Foods" dropdown="block" />
      <MenuItem  title="Vegetable" dropdown="block" />
      <MenuItem  title="Drink" dropdown="none" />
      <MenuItem  title="Cookies" dropdown="none" />
      <MenuItem  title="Meat & Seafoods" dropdown="block" />
      <MenuItem  title="Bakery" dropdown="none" />
    </div>
    <div style="display: flex; gap: 5px; margin-left: auto;">
      <img src="/images/fi-rs-headset 1.png" alt="">
      <div style="display: flex; flex-direction: column;">
        <span style="font-size: 22px; color: #3BB77E;">1900 - 8888</span>
        <span style="font-size: 12px; margin: auto;">24/7 Support Center</span>
      </div>
      
    </div>

  </div>
  <RouterView />
</template>

<script>
  import Search from './components/Search.vue';
  import MenuItem from './components/MenuItem.vue';

  export default {
    name: "App",
    components: {
      Search,
      MenuItem,
    },

    computed: {
    }
  };
  
</script>

<style scoped>
  #topmenu {
    width: 1485px;
    margin: auto;
    padding: 10px;
    display: flex;
  }
  #bottommenu {
    display: flex;
    width: 1485px;
    margin: 0 auto 10px auto;
    padding: 10px;
    gap: 25px;
    border: solid gray;
    border-width: 1px 0 1px 0;
  }
  #browseallcate {
    height: 12px;
    line-height: 12px;
    padding: 13px;
    color: white;
    background-color: #3BB77E;
    display: flex;
    gap: 7px;
    border-radius: 5px;
  }

  a {
    text-decoration: none;
    color: #000000;
    display: flex;
    align-items: center;
  }
</style>
