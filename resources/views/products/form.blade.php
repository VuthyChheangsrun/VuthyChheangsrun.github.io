<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>

    <style>
        #formwrapper {
            border: solid black;
            padding: 20px;
            margin: 50px 350px;
            position: relative;
        }
        #formtag {
            background-color: white;
            padding: 0 3px;
            position: absolute;
            top: -6%;
        }
        #form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .label {
            display: flex;
            gap: 10px;
        }
        input {
            flex-grow: 1;
            
        }
        .text {
            width: 70px;
        }
        #buttondown {
            display: flex;
            flex-direction: row-reverse;
            gap: 10px
        }
    </style>

</head>
<body>
    <div id="formwrapper">
        <span id="formtag">Product Form</span>
        <form method="post" action="/product/store" id="form">
            @csrf
            <div class="label"><span class="text">Name</span> <input type="text" name="name" /></div>
            
            <div style="display: flex; gap: 10px">
                <span class="text">Price</span> <input type="text" name="pricing" style="flex-grow: 1;"/>
                <span class="text">Promotion</span> <input type="text" name="discount" style="flex-grow: 1;"/>
            </div class="label">
            <div class="label"><span class="text">Category</span> <input type="text" name="category_id" /></div>
            <div class="label"><span class="text">Image</span> <input name="images" type="file"></div>
            <div class="label"><span class="text">Description</span><textarea name="description" style="flex-grow: 1;"></textarea></div>

            <div id="buttondown">
                <button type="submit">Save Product</button>
                <a href="/todo">
                    <button type="button">Cancel</button>
                </a>
            </div>
        </form>
    </div>
    
</body>
</html>