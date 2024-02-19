# Product Management System
  alquran's coding challenge project Product Management
# TechnicalRequirements --> (Followed these requirements)
# 1. Laravel Setup
    ● Used the latest stable version of Laravel. (Laravel Framework 10.44.0) 
    ● Implement authentication to protect the product management routes.Only authenticated users can perform create, update, or delete operations. ("there was some issue with my laptop          i was not able to install node js so i did'not perform laravel ui i made my own system to authenticate user and routes restrict with middlewares")
       i already created seeder where i made alquran account you can contact for the credientials of email "alquran@gmail.com" otherwise you will not able to open crud operations at-all 
   
# 2. Database Design
   ● Use MySQL for the database. (PHPmyadmin)
   ● Design a products table with appropriate fields and data types for the product attributes mentioned above.( i made exact migration for the mentioned field table, )
   ● Implement database migrations  for creating the products table. (for this purpose i made routes where database will refresh and run seeders  )
   # (http://127.0.0.1:8000/reset)  
     this will create key for the app and then cache clear and optimize for all routes 
   # (http://127.0.0.1:8000/refresh)
     this will update database table and run seeders of products and users where both seeder functionality is different products is creating manually and users is using factory i         
     performed bith to showcase that i am acknowledge of both ways
   
# 3. Backend Development
   ● Develop a RESTful API with the following endpoints: (perdormed)
     i made it whole project in local and made it sever   
     # ngrok is helpful to test local project api's 
   ● GET /api/products to list all products. (this wikk give you table view of all products in your database)
   
   ● POST /api/products to create a new product.
     for this give json data to it like 
     {
      "name": "Product Name",
      "description": "Product Description",
      "price": 10.99,
      "stockQuantity": 100,
      "userId":1
      } (userId is optional i made this column to synchorinze each product owner)
   ● GET /api/products/{id}    to retrieve a single product by ID.
     will return single product json response 
   ● PUT /api/products/{id} to update an existing product.
     {
        "name": "Product Name",
        "description": "Product Description",
        "price": 10.99,
        "stockQuantity": 100,
        "userId":1
      } 
   ● DELETE /api/products/{id} to delete a product. 
   ● Ensure proper request validation and error handling for the API endpoints. (applies try catch blocks for some api )
# 4. Frontend Development
   ● Use HTML, CSS, and JavaScript to create a simple yet functional UI that interacts with the backend API. (i have major experience in backend so i took help from offical pages of           bootstrap and html basic structure and applied designed to my desire)
   ● Implement pages or components for listing products, adding a new product, editing an existing product, and deleting a product. (yeah for this purpose heighlighting i perform layout 
     for my all pages like made header component main bar componenet and many to make it more useful)
   ● Ensure the UI is responsive and user-friendly.(for the responsiveness i prefered to use bootstrap grid system)

# some hints 
   for setting up i made it easy for you  folow the next steps
    ●  clone project
    ●  make database with any name and add name to env file 
    ●  run http://127.0.0.1:8000/reset 
    ●  run http://127.0.0.1:8000/refresh
    ●  here you go your site is ready you will land to landing page where some mine vision amd mission is there for welcoming you with my service heighligt and latest products 
    ●  there wil be 2 bars in landing page one on the top and other on left side ,ahan left side tabs will only move you to the lists when you login first but without login you can only         travel in home landing page 
# thank you
  for any query you can contact.
    
     
 ()
