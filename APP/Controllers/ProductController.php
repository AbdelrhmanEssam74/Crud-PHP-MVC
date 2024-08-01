<?php

class ProductController
{
    // Displays a list of all products
    public function index(): void
    {
        $db = new product(); // Create a new instance of the product model
        $data['products'] = $db->getAllProduct(); // Fetch all products from the database
        $data['title'] = "Products"; // Set the title for the view
        View::load('Product/index', $data); // Load the index view with product data
    }

    // Loads the view for adding a new product
    public function add(): void
    {
        View::load('Product/add'); // Load the add product view
    }
}
