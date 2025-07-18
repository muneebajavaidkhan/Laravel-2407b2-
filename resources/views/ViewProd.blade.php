@include('header.header');

<h1>View Product Page</h1>


<table class = "container table table-bordered mt-5">
    <tr>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th></th>
    </tr>
    <tbody>
        @foreach($products as $items)
        <tr>
            <td>{{$items->name}}</td>
            <td>{{$items->description}}</td>
            <td>{{$items->price}}</td>
            <td><img src="{{asset('images/'.$items->image)}}" alt="Image" width="100"></td>
            <td><a href="productEdit/{{$items->id}}" class = "btn btn-primary">Edit</a></td>
            <td><a href="" class = "btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>