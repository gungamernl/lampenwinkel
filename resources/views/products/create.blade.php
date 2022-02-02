
<form action="{{route('product.store')}}" method="post">
    @csrf
    <a>name</a><input type="text" name="name" ><br>
    <a>price</a><input type="text" name="price" ><br>
    <a>partnr</a><input type="text" name="partnr" ><br>
    <a>specs</a><input type="text" name="specs" ><br>
    <a>url</a><input type="text" name="url" ><br>
    <input type="submit" value="maak product">
</form>