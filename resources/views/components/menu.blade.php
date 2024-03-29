<div>
<div id="menu">
        <div style="font-size: x-large;">{{ $name }}</div>
        <div id="button">
            <button>All</button>
            <button style="color: gray;">Milk & Diaries</button>
            <button style="color: gray;">Coffees &Teas</button>
            <button style="color: gray;">Pet Foods</button>
            <button style="color: gray;">Meat</button>
            <button style="color: gray;">Vegetables</button>
            <button style="color: gray;">Fruits</button>
        </div>
    </div>
</div>

</body>
</html>

<style>

#menu {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: auto;
    line-height: 50px;
    padding: 0 30px;
}
#button {
    display: flex;
    gap: 20px;
    flex-direction: row;
}
button {
        background-color: transparent;
        border: 0;
}
</style>