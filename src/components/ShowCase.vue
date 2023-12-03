<template>
    <div id="wrapper">
        <div id="textwrapper">
            <span id="bigtext">Don't miss amazing grocery deals</span>
            <br><br>
            <span id="smalltext">Sign up for the daily newsletter</span>
            <br><br><br><br>
            <form action="" id="form">
                <img id="plane" src="/images/fi-rs-paper-plane 1.png" alt="">
                <input id="email" type="text" placeholder="Your email address">
                <button id="hit" type="submit">Subscribe</button>
            </form>
        </div>
        
        <img id="img" src="/images/fresh-apples-shopping-mesh-bag-with-branch-apples-removebg 1.png" alt="">
        
        
    </div>
</template>

<style scoped>
    #wrapper {
        width: 1485px;
        height: 358px;
        background-image: url("/images/showcasebg.png");
        background-color: bisque;
        margin: auto;
        border-radius: 10px;
    }
    #img {
        margin-left: auto;
    }
    #bigtext {
        font-size: 50px;
    }
    #smalltext {
        font-size: 20px;
        color: rgb(85, 85, 85);
    }
    #textwrapper {
        width: 500px;
        margin: auto 0 auto 100px;
    }
    #form {
        width: 350px;
        position: relative;
    }
    #email {
        width: 310px;
        height: 35px;
        padding: 0 0 0 40px;
        border-radius: 50px;
        border: 0px;
    }
    #plane {
        position: absolute;
        translate: 0 -50%;
        top: 50%;
        left: 10px;
    }
    #hit {
        position: absolute;
        height: 35px;
        border-radius: 50px;
        border: 0;
        background-color: #3BB77E;
        padding: 0 15px 0 15px;
        color: white;
        right: 0px;
    }
</style>