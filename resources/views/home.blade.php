<div style="display: flex; flex-direction:column; gap: 13px">
    <x-menu name="Feature Categories" />

    <div id="cate">
        @foreach ($category as $cate)
            <x-category :name="$cate->name" amount="10" bg="#F2FCE4" img="/images/burger.png" />
        @endforeach
    </div>

    <div id="promo">
        <x-promo text="Everyday Fresh & Clean with Our Products" bg="#F0E8D5" bbg="green" img="/images/onion.png" />
        <x-promo text="Make your Breakfast Healthy and Easy" bg="#F0E8D5" bbg="green" img="/images/milk.png" />
        <x-promo text="The best Organic Products Online" bg="#E7EAF3" bbg="#FDC040" img="/images/vegetable.png" />
    </div>
    <x-menu name="Feature Products" />

    <div id="product">
        @foreach ($product as $pro)
            <x-product :tag="$pro->tag" img="/images/mango.png" :name="$pro->name"
                       :rate="$pro->rate" :desc="$pro->description" :sellprice="$pro->pricing"
                       :disPercent="$pro->discount" disPrice="2.51" :tagcol="$pro->tagcol" />
        @endforeach
    </div>

</div>

<style >

#cate {
    display: flex;
    gap: 13px;
    margin: auto;
}
#promo{
    display: flex;
    justify-content: center;
    margin: auto; 
    gap: 23.7px;
}
#product {
    display: grid;
    grid-template-columns: auto auto auto auto auto;
    gap: 13px;
    justify-content: center;
    margin: auto;
}

</style>