



<!-- PROJECT SHIELDS -->




<!-- PROJECT LOGO -->
<br />
<p align="center">

  <h3 align="center">Coding test for laravel developer</h3>

  <p align="center">
    Here evrything is explained required to run this project
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#>Route defination">Route defination</a></li>
  </ol>
</details>





### Built With

This section should list any major frameworks that you built your project using. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.
* [Tailwind css](https://tailwindcss.com/docs/guides/laravel)
* [JQuery](https://jquery.com)
* [Laravel](https://laravel.com)



<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.


* Composer
  ```sh
  https://getcomposer.org/download/
  ```
  
* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/eajajul/coding_test.git
   ```
3. Install Composer packages
    ```sh
    composer install
    ```

3. Install NPM packages
   ```sh
   npm install
   ```
4. Migrate the databse
   ```sh
   $ php artisan migrate
   ```
4. Install passport config
   ```sh
   $ php artisan passport:install
   ```   



<!-- USAGE EXAMPLES -->
## Usage
To run the appliation please use follwing command
1. Run the main application
   ```sh
    $ php artisan serve
   ```
  
2. Compile npm 
   ```sh
   npm run dev
   ```








<!-- Route defination -->
## Route defination
list of routes in gthe application

1. Api routes for cutomer login and registration(If using postman please use Update header with `({"key":"Accept","value":"application/json","description":"","type":"text","enabled":true}))`
 ```sh
       1. http://127.0.0.1:8000/api/login  request body
        {
            'email'=>'string,
            'password'=>'string'
        }
        
        2. http://127.0.0.1:8000/api/register  request body
        {
            'email'=>'string,
            'name=>'string',
            'phone'=>'string,'
            'password'=>'string'
        }
        
    ```
    
 2.Web routes   
    ```sh
       1. http://127.0.0.1:8000/login  request body
        {
            'email'=>'string,
            'password'=>'string'
        }
        
        2. http://127.0.0.1:8000/register  request body
        {
            'email'=>'string,
            'name=>'string',
            'phone'=>'string,'
            'password'=>'string'
        }
        
        2. http://127.0.0.1:8000/employee  
              get list of employee
              add/edit/delte employee
        3. http://127.0.0.1:8000/customer-index  
              get list of customer
              add new customer
              Search customer by name,phone,email (`ajax search`)
        4. http://127.0.0.1:8000/csv-upload  
              ulpoad a csv file contain customer details
              it will the read the csv file and customer in the databse   






