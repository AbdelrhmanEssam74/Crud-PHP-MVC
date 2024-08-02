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

    public function store(): void
    {
        // Check if the form is submitted
        if (isset($_POST['submit'])):
            // Get form data
            $product_name = $_POST['product'];
            $product_price = $_POST['price'];
            $product_desc = $_POST['description'];
            $product_quantity = $_POST['quantity'];

            // Prepare data array
            $data = array(
                "name" => $product_name,
                "price" => $product_price,
                "description" => $product_desc,
                "quantity" => $product_quantity
            );

            $db = new product(); // Create a new instance of the product model

            try {
                // Insert data into the database
                $db->insert($data);
                View::load("Product/add", ['success' => "Product added successfully"]);
            } catch (Exception $e) {
                // Handle exceptions
                View::load("Product/add");
            }
        endif;
    }

    public function delete($id): void
    {
        $db = new product(); // Create a new instance of the product model
        $data['success'] = "Product deleted successfully";

        if ($db->delete($id[2])) {
            // If product is deleted successfully
            $data['products'] = $db->getAllProduct(); // Fetch all products from the database
            $data['title'] = "Products"; // Set the title for the view
            View::load('Product/index', $data); // Redirect back to the products page after deletion
            exit; // Stop further execution to prevent loading unnecessary views
        } else {
            // If deletion fails
            echo "Error deleting product";
        }
    }
}
