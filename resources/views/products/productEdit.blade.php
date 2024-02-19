@include('layout.header');
@include('layout.componentMainBar');
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
  
  </style>
<div class="jumbotron text-center">
  <h1><?=$page_title;?></h1> 
</div>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
      <div style="float:right">
        <a href="{{route('getProducts')}}" class="btn btn-info btn-lg"><i class="fa fa-bars"></i> Manage Products</a>
        </br></br>
      </div>
     
      </br></br>
      <form action="{{route('updateProduct',[$products->id])}}" method="POST" enctype="multipart/form-data">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
        @endif
        @csrf
        <div class="mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <input type="text" required name="productName" class="form-control"  id="productName" value="{{$products->name}}" placeholder="{{$products->name}}">
        </div>
        <div class="mb-3">
          <label for="productDescription" class="form-label">Description</label>
          <textarea class="form-control" required name="description" id="productDescription" rows="3"  placeholder="{{$products->description}}">{{$products->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="productPrice" class="form-label">Price</label>
          <input type="text" name="price"  required class="form-control" id="productPrice" value="{{$products->price}}" placeholder="{{$products->price}}">
        </div>
        <div class="mb-3">
          <label for="productStock" class="form-label">Stock Quantity</label>
          <input type="number" required name="stockQuantity" class="form-control" id="productStock" value="{{$products->stockQuantity}}" placeholder="{{$products->stockQuantity}}">
        </div>
        </br></br>
        <button style="justify:center"type="submit" class="btn btn-success">Submit</button>
      </form>
      </br></br>
      </br></br>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
    
     
      new DataTable('#productsTable');
    });
  </script>