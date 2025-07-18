@include('header.header');



<div class="container"> 
    <br><br><h3>Add Product in Database</h3> <br>

    <form action="productStore" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="fw-bold">Product Name:</label>
            <input type="text" class="form-control mt-3" id="name" 
            placeholder="Enter Your Product Name" name="name">

            
        </div>

      
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Description:</label>
            <input type="text" class="form-control mt-3" id="edu" 
            placeholder="Enter your Product Decription" name="description" >

            
        </div>
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Price:</label>
            <input type="number" class="form-control mt-3" id="edu" 
            placeholder="Enter your Price" name="price" >

            
        </div>
        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Product Image:</label>
            <input type="file" class="form-control mt-3" id="edu"  name="image" >
           
        </div>
      

        <button type="submit" class="btn btn-primary mt-5" name="ins">Submit</button>
    </form>
</div>