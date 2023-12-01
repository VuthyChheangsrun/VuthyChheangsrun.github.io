<template>
    <form id="wrapper">
        <div id="allcate">
            All Categories
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
            <div id="bar"></div>
        </div>
        
        <input id="text" type="text" placeholder="Search for items">
        
        <button id="search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>

    </form>

</template>

<style scoped>
    #wrapper {
        border: solid green 1px;
        border-radius: 5px;
        width: 500px;
        display: flex;
        gap: 20px;
        position: relative;
    }

    #allcate {
        height: 12px;
        line-height: 12px;
        display: flex;
        gap: 10px;
        position: absolute;
        translate: 0% -50%;
        top: 50%;
        left: 10px;
    }
    #search {
        background-color: transparent;
        border: 0;
        width: 30px;
        position: absolute;
        translate: 0% -50%;
        top: 50%;
        right: 10px;
        display: flex;
    }
    #bar {
        height: 15px;
        border: solid gray;
        border-width: 0 1px 0 0;
        margin: auto 0 auto 0;
    }
    #text {
        border: 0px;
        border-radius: 5px;
        width: 500px;
        padding: 10px 45px 10px 160px;
    }

</style>