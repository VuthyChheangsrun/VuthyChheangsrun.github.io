<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div style="background-color: {{ $bg }}; background-image: url({{ $img }});" id="promowrapper">
        <div id="info">
            <span>{{ $text }}</span><br>
            <button id="promobutton" color="{{ $bbg }}"></button>
        </div>
    </div>
</div>

<style scoped>
    #promowrapper{
        width: 480px;
        height: 300px;
        border-radius: 7px;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right bottom;; /* Center the image */
    }
    #info{
        width: 50%;
        height: 300px;
        font-size: 30px;
        margin-top: 25px;
        margin-left: 25px;
        position: relative;
    }

    #promobutton{
        margin-top: auto;
        position: absolute;
        bottom: 30%;
    }
</style>