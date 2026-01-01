<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Delights - Food Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f5f0;
        }
        
        .menu-title {
            font-family: 'Playfair Display', serif;
        }
        
        .menu-item {
            transition: all 0.3s ease;
        }
        
        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .food-image {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <h1 class="text-4xl font-bold text-gray-800 menu-title">Gourmet Delights</h1>
                <nav class="mt-4 md:mt-0">
                    <a href="#" class="px-4 py-2 text-gray-800 hover:text-amber-600">Home</a>
                    <a href="#" class="px-4 py-2 text-gray-800 hover:text-amber-600">Menu</a>
                    <a href="#" class="px-4 py-2 text-gray-800 hover:text-amber-600">About</a>
                    <a href="#" class="px-4 py-2 text-gray-800 hover:text-amber-600">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 menu-title">Our Seasonal Menu</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Experience culinary excellence with our carefully crafted dishes made from the freshest seasonal ingredients.</p>
        </div>

        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 border-b-2 border-amber-500 pb-2 mb-8">Starters</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/be8d574f-ce21-466a-8cef-07d8b06dcba0.png" alt="Artisan cheese platter with grapes, nuts, and honey drizzle on a slate board" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Cheese Platter</h4>
                        <p class="text-gray-600 mb-4">Selection of artisanal cheeses with seasonal accompaniments</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$14</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b0b31a7f-9dc0-434b-a087-d7b1fd1d4b4e.png" alt="Crispy calamari rings with lemon wedges and aioli dipping sauce on a white plate" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Crispy Calamari</h4>
                        <p class="text-gray-600 mb-4">Fresh squid lightly battered and fried to perfection</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$12</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/47137c69-6757-4ae7-8fe0-99e9f10c715d.png" alt="Colorful bruschetta with diced tomatoes, basil, and balsamic glaze on toasted bread" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Tomato Bruschetta</h4>
                        <p class="text-gray-600 mb-4">Heirloom tomatoes, fresh basil, garlic on crusty bread</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$10</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 border-b-2 border-amber-500 pb-2 mb-8">Main Courses</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9b3eb149-8af1-4e12-ba14-c0399509a706.png" alt="Grilled ribeye steak with roasted vegetables and red wine reduction sauce" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Grilled Ribeye</h4>
                        <p class="text-gray-600 mb-4">16oz dry-aged steak with seasonal vegetables</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$32</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/568c9ada-f258-49b9-a796-e665f7e10bf2.png" alt="Pan-seared salmon fillet with lemon butter sauce and asparagus on a white plate" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Pan-Seared Salmon</h4>
                        <p class="text-gray-600 mb-4">Wild-caught salmon with lemon butter sauce</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$26</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/343b5154-d552-4db3-bf92-ab7db8b3720f.png" alt="Vegetable risotto with mushrooms, peas, and parmesan cheese in a shallow bowl" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Mushroom Risotto</h4>
                        <p class="text-gray-600 mb-4">Creamy arborio rice with wild mushrooms</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$18</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-gray-800 border-b-2 border-amber-500 pb-2 mb-8">Desserts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7c8ec540-befb-47a4-acd3-1bc43bc4e499.png" alt="Chocolate lava cake with vanilla ice cream and fresh berries on a white plate" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Chocolate Lava Cake</h4>
                        <p class="text-gray-600 mb-4">Warm chocolate cake with molten center</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$9</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2f7c4e80-f4d6-4cd0-b847-40d66ab2c110.png" alt="Creme brulee with caramelized sugar crust and fresh raspberries on a white plate" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Classic Crème Brûlée</h4>
                        <p class="text-gray-600 mb-4">Rich vanilla custard with caramelized sugar top</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$8</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden menu-item">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e88cc981-92b8-474d-8899-54aed6192c62.png" alt="Panna cotta with mixed berry compote in a glass serving dish" class="w-full food-image">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Berry Panna Cotta</h4>
                        <p class="text-gray-600 mb-4">Silky vanilla custard with fresh berry sauce</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold text-lg">$7</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-md hover:bg-amber-700 transition">Add to Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-semibold mb-4">Gourmet Delights</h4>
                    <p>Bringing exceptional dining experiences since 2010.</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Hours</h4>
                    <p>Monday - Thursday: 5pm - 10pm</p>
                    <p>Friday - Saturday: 5pm - 11pm</p>
                    <p>Sunday: 10am - 3pm (Brunch)</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Contact</h4>
                    <p>123 Culinary Street</p>
                    <p>Foodville, FC 12345</p>
                    <p>(555) 123-4567</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p>© 2023 Gourmet Delights. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                const itemName = this.parentElement.parentElement.querySelector('h4').textContent;
                alert(`Added ${itemName} to your order!`);
            });
        });
    </script>
</body>
</html>

