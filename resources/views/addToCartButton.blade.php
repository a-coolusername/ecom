<div class='product-add'>
    <form action="/products/addToCart" Method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type='submit' class="btn btn-primary">add to cart</button>
    </form>
</div>
<style>

    .product-add{
        display: flex;
        justify-content: center;
        margin:0;
    }
</style>
