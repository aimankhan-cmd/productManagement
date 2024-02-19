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
        <a  href="{{route('addProduct')}}"class="btn btn-success btn-lg"><i class="fas fa-plus"></i> Add Product</a>
        </br></br>
      </div>
      </br>
      </br>
      @if(session('info'))
        <div class="alert alert-warning">
            {{ session('info') }}
        </div>
      @endif
       
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
      <table class="table table-striped table-bordered table-hover mx-auto" id="productsTable">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock Quantity</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td >{{$item->price}}</td>
            <td>{{$item->stockQuantity}}</td>
            <td>
            <a href="{{route('editProduct',[$item->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></br></br>
            <a href ="{{route('deleteProduct',[$item->id])}}"class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
  
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