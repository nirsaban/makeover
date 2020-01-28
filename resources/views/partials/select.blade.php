<div class="column is-3 has-text-centered br-0 m-05">
    <div class="box">
        <h5 class="title is-5">{{$category->name}}</h5>
        <div class="select">
            <select name="{{$category->name}}" class="br-0" id="{{$category->name}}">
                <option>Choose</option>
                @foreach($category->product as $product)
                    <option data-price="{{$product->price}}" value="{{$product->name}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <button class="button is-fullwidth is-outlined is-dark br-0" data-category="{{$category->name}}" onclick="generate(this.dataset.category)">ADD</button>
    </div>
</div>



