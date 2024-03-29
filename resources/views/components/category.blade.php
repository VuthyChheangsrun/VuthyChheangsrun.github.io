<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->

    <div style="background-color: {{ $bg }}" id="container">
        <img src="{{ $img }}" id="img">
        <div id="container">
            <span id="name">{{ $name }}</span>
            <span id="amount">{{ $amount }} items</span>
        </div>
    </div>
</div>


<style scoped>
    #container{
        width: 137px;
        height: 182px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
    }
    #img {
        width: 100px;
        margin-left: auto;
        margin-right: auto;
    }
    span {
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
    }
    #amount {
        color: #B6B6B6;
        margin-bottom: 20px;
    }
</style>