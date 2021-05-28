# Laravel RestFul API with Sanctum

Personal repository for Restful Api using Laravel. The project uses Sanctum to authorize users to access certain routes.

## GET, POST, UPDATE & DELETE REQUEST HANDLER
The backend handles 


## Endpoints

### GET
{URL}/api/products -> get all products
{URL}/api/products/{id} -> get single product by id
{URL}/api/products/search/{searchtext}      -> get products matching search term by `name`

### POST
__Public Routes__
{URL}/api/register  ->  register a new user
{URL}/api/login     ->  login existing user

__logout requires loggin in first, obviously__
{URL}/api/logout    -> logs out user

__Protected Routes (Requires Login)__
{URL}/api/products          -> post a product (POST)
{URL}/api/products/{id}     -> update a product (PUT)
{URL}/api/products/{id}     -> delete a product (DELETE)