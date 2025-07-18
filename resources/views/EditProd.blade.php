@include('header.header')

<h2>Edit Page</h2>



<div class="container"> 
    <br><br><h3>Edit Product in Database</h3> <br>

    <form action="{{route('prodUpdate',$products->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="name" class="fw-bold">Product Name:</label>
            <input type="text" class="form-control mt-3" id="name" 
            placeholder="Enter Your Product Name" name="name" value = '{{$products->name}}'>

            
        </div>
      
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Description:</label>
            <input type="text" class="form-control mt-3" id="edu" 
            placeholder="Enter your Product Decription" name="description"  value = '{{$products->description}}'>

            
        </div>
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Price:</label>
            <input type="number" class="form-control mt-3" id="edu" 
            placeholder="Enter your Price" name="price" value = '{{$products->price}}'>

            
        </div>
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Image:</label>
            <input type="file" class="form-control mt-3" id="edu"  name="image" >
            <div class = "mt-3">
                <p class = "text-muted">{{$products->image}}</p>
            </div>
           
        </div>
      

        <button type="submit" class="btn btn-primary mt-5" name="ins">Update</button>
    </form>
</div>