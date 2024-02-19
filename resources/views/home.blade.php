@include('layout.header');
@include('layout.mainBar');

<style>
  .thumbnail p {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin:5px;
}
</style>
<div class="jumbotron text-center">
  <h1><?=$page_title;?></h1> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
   <div class="col-sm-3">
   <div class="sidebar">
    <h2 style="color:#00008b!important">Manage </h2>
    <ul >
        <li ><a style="color:#00008b!important" href="{{route('getUsers')}}">Manage User</a></li>
        <li><a  style="color:#00008b!important" href="{{route('addUser')}}">Add User</a></li>
        <li><a style="color:#00008b!important" href="{{route('getProducts')}}">Manage Products</a></li>
        <li><a style="color:#00008b!important" href="{{route('addProduct')}}">Add Product</a></li>
    </ul>
    </div>
    </div>

    <div class="col-sm-9">
      <div class="jumbotron text-center">
      <div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION :</strong> To provide a user-friendly and efficient Product Management System that empowers businesses to easily manage their products, enhancing their productivity and competitiveness in the market.</h4><br>
      <p><strong>VISION : My vision is to become the leading provider of Product Management Systems, known for our innovative solutions and exceptional customer service. I aspire to continuously improve and adapt to meet the evolving needs of businesses worldwide, enabling them to thrive in a dynamic market environment.</strong> 
 </div>
  </div>
</div>
      </div>
      
  </div>
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What i made in this project</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>User Management System</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Project Management System</p>
    </div>
   
  </div>
  <br><br>
  
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Latest Products</h2><br>
  <h4>What we have created Latest</h4>
  <div class="row text-center slideanim">
    @foreach($products as $item)
    <div class="col-sm-4">
     
     <div class="thumbnail">
        <!-- <img src="paris.jpg" alt="{{$item->name}}" width="400" height="300"> -->
        <p><strong>{{$item->name}}</strong></p>
        <p class="truncate">{{$item->description}}</p>
      </div>

    </div>
    @endforeach
  
 
</div>
@include('layout.footer');
<!-- Container (Pricing Section) -->
