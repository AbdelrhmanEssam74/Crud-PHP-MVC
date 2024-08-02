# Simple CRUD Management System Using MVC Concept in PHP

## Description
This project is a basic CRUD (Create, Read, Update, Delete) management system built using the Model-View-Controller (MVC) architectural pattern in PHP. It provides a structured approach to organizing code by separating concerns, making the application easier to maintain and scale.

## Features
- Create, Read, Update, and Delete operations for managing data
- MVC architectural pattern for better code organization
- User-friendly interface for interacting with the data
- Input validation to ensure data integrity
- Error handling to provide meaningful feedback to users

## Technologies Used
- PHP
- HTML
- CSS

## File Structure
- **core/**
  Contains the core files for the MVC structure.

- **public/**
  Contains the front-end assets (CSS, JavaScript).

- **config/**
  Configuration files for database connection and other settings.

- **libs/**
  Contains additional libraries or external dependencies.

- **models/**
  Holds model classes like Product.php, representing the data logic for the application.

- **views/**
  Organizes view files, with subfolders for different entities like Product/ containing view files for product-related views.

- **controllers/**
  Stores controller classes like ProductController.php, which handle user requests, interact with models, and load views.