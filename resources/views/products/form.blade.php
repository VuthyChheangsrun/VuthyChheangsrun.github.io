<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>
    <div>
        <form method="post" action="/product/store">
            @csrf
            Name <input type="text" name="name" /> <br/>
            Price <input type="text" name="pricing" />
            Promotion <input type="text" name="discount" /> <br/>
            Category <input type="text" name="category_id" /> <br/>
            Image <input name="images" type="file"><br/>
            Description: <textarea name="description"></textarea> <br/>

            <div>
                <button type="submit">Save Product</button>
                <a href="/todo">
                    <button type="button">Cancel</button>
                </a>
            </div>
        </form>
    </div>
    
</body>
</html>