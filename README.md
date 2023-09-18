# Al-Mutamyzon Computers Website

- Al-Mutamyzon Computers is a trusted computer shop located in Dubai.

- Product Catalog: Your website can include a comprehensive catalog of computer products such as laptops, desktops, computer components, peripherals, and accessories. Each product listing should include details such as specifications, prices, and availability.

- Shopping Cart and Checkout: Implement a shopping cart functionality that enables users to add products they wish to purchase. Users can review their cart, modify quantities, and proceed to a secure checkout process to complete their purchase.

- Advanced Product Search and Filtering: Provide a search bar and advanced filtering options to help users quickly find specific products based on their preferences, such as brand, price range, specifications, and customer ratings.

- Product Reviews and Ratings: Allow users to leave reviews and ratings for products they have purchased or used. This feature helps potential customers make informed decisions based on the experiences of others.

- Order Management: Provide an order management system where users can view their order history, track shipments, and initiate returns or exchanges if necessary.

- Secure Payment Processing: Implement a secure payment gateway to ensure that customers' financial information is protected during the checkout process. Support various payment methods, such as credit cards, debit cards, and online payment platforms.

- Responsive Design: Ensure that your website is responsive and mobile-friendly, allowing users to access and navigate it seamlessly across different devices, including desktops, laptops, tablets, and smartphones.

- Customer Support: Provide channels for customer support, such as live chat, email, or a dedicated support ticket system. This allows users to seek assistance with product inquiries, order-related issues, or general queries.

# Installation
1 - Clone the Repository:
```bash
git clone https://github.com/nassef333/Al-Mutamyzon.git
```
This will clone the Laravel project repository to your local machine.

2 - Install Dependencies:
Navigate to the project's root directory and run the following command to install the required dependencies:
```bash
composer install
```
This will use Composer to install all the necessary packages and libraries.

3 - Environment Configuration:
Rename the .env.example file to .env. This file contains configuration settings for your Laravel application. Update the file with your database connection details, such as database name, username, and password.

4 - Generate Application Key:
Run the following command to generate a unique application key:
```bash
php artisan key:generate
```
This key is used for secure cookie encryption and should be kept secret.

5 - Migrate the Database:
To create the necessary database tables, run the migration command:

```bash
php artisan migrate
```
This will execute the migrations and set up the database schema based on the migration files in the database/migrations directory.

6 - Start the Development Server:
You can now start the Laravel development server by running the following command:

```bash
php artisan serve
```
The development server will start, and you can access your Laravel website locally at http://localhost:8000 or another specified port.


