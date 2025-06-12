<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking - UNIMEAL</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<div class="min-h-screen bg-gray-50 py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex items-center mb-6">
            <button class="mr-4 p-2 rounded-full hover:bg-gray-200 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <div class="flex items-center">
                <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center mr-3">
                    <span class="text-white text-xl">🍔</span>
                </div>
                <h1 class="text-2xl font-bold text-pink-600">UNIMEAL</h1>
            </div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <!-- Order Header -->
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Order ID: 3354654654526</h2>
                        <div class="flex items-center text-sm text-gray-600">
                            <span class="mr-4">Order date: Feb 16, 2022</span>
                            <div class="flex items-center text-pink-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium">Estimated delivery: 15 MINUTES</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            📄 Invoice
                        </button>
                        <button class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition-colors">
                            Track order 📍
                        </button>
                    </div>
                </div>
            </div>

            <!-- Progress Tracker -->
            <div class="px-6 py-6" style="background-color: #ffe4ef;">
                <div class="flex justify-between items-center">
                    <!-- Order Confirmed -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center mb-2" style="background-color: #ec4899;">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-medium mb-1" style="color: #ec4899;">Order Confirmed</span>
                        <span class="text-xs text-gray-500">4:00 PM</span>
                    </div>

                    <!-- Progress Line -->
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>

                    <!-- Order Finished -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mb-2">
                            <div class="w-3 h-3 bg-gray-500 rounded-full"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-400 mb-1">Order finished</span>
                        <span class="text-xs text-gray-400">Waiting</span>
                    </div>

                    <!-- Progress Line -->
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>

                    <!-- Delivery -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mb-2">
                            <div class="w-3 h-3 bg-gray-500 rounded-full"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-400 mb-1">Delivery</span>
                        <span class="text-xs text-gray-400">Waiting</span>
                    </div>

                    <!-- Progress Line -->
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>

                    <!-- Delivered -->
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mb-2">
                            <div class="w-3 h-3 bg-gray-500 rounded-full"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-400 mb-1">Delivered</span>
                        <span class="text-xs text-gray-400">Waiting</span>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="px-6 py-6 border-b border-gray-200">
                <!-- Set A -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23f3f4f6'/%3E%3Ccircle cx='40' cy='40' r='35' fill='%23fbbf24'/%3E%3Ccircle cx='30' cy='35' r='6' fill='%23dc2626'/%3E%3Ccircle cx='50' cy='35' r='6' fill='%23dc2626'/%3E%3Ccircle cx='40' cy='50' r='6' fill='%23dc2626'/%3E%3Ccircle cx='25' cy='50' r='4' fill='%23059669'/%3E%3Ccircle cx='55' cy='45' r='4' fill='%23059669'/%3E%3C/svg%3E" alt="Pizza Set A" class="w-16 h-16 rounded-lg mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Set A</h3>
                            <div class="flex space-x-4 text-sm text-gray-600">
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Pizza</span>
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Drink</span>
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Fries</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg font-semibold text-pink-600">RM65.00</div>
                        <div class="text-sm text-gray-500">Qty: 1</div>
                    </div>
                </div>

                <!-- Set B -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23f3f4f6'/%3E%3Ccircle cx='40' cy='40' r='35' fill='%23fbbf24'/%3E%3Ccircle cx='30' cy='35' r='6' fill='%23dc2626'/%3E%3Ccircle cx='50' cy='35' r='6' fill='%23dc2626'/%3E%3Ccircle cx='40' cy='50' r='6' fill='%23dc2626'/%3E%3Ccircle cx='25' cy='50' r='4' fill='%23059669'/%3E%3Ccircle cx='55' cy='45' r='4' fill='%23059669'/%3E%3C/svg%3E" alt="Pizza Set B" class="w-16 h-16 rounded-lg mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Set B</h3>
                            <div class="flex space-x-4 text-sm text-gray-600">
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Pizza</span>
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Drink</span>
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded">Fries</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg font-semibold text-pink-600">RM95.00</div>
                        <div class="text-sm text-gray-500">Qty: 2</div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="flex">
                <!-- Left Side - Payment & Help -->
                <div class="w-1/2 p-6 border-r border-gray-200">
                    <!-- Payment -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-pink-600 mb-4">Payment</h3>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-600 mr-2">Visa ***06</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='20' viewBox='0 0 32 20'%3E%3Crect width='32' height='20' rx='4' fill='%23ec4899'/%3E%3Ctext x='16' y='14' text-anchor='middle' fill='white' font-size='8' font-family='Arial, sans-serif'%3EVISA%3C/text%3E%3C/svg%3E" alt="Visa" class="w-8 h-5">
                        </div>
                    </div>

                    <!-- Need Help -->
                    <div>
                        <h3 class="text-lg font-semibold text-pink-600 mb-4">Need Help</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center text-sm text-gray-600 hover:text-pink-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Order Issues
                                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="flex items-center text-sm text-gray-600 hover:text-pink-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Delivery Info
                                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="flex items-center text-sm text-gray-600 hover:text-pink-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                                </svg>
                                Returns
                                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Delivery & Order Summary -->
                <div class="w-1/2 p-6">
                    <!-- Delivery Address -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-pink-600 mb-4">Delivery</h3>
                        <div class="text-sm text-gray-600">
                            <div class="mb-1 font-medium">Address</div>
                            <div>B1.5</div>
                            <div>Block B</div>
                            <div>Mahallah Siddiq</div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div>
                        <h3 class="text-lg font-semibold text-pink-600 mb-4">Order Summary</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Total</span>
                                <span class="font-medium text-gray-900">RM160.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Discount</span>
                                <span class="font-medium text-gray-900">RM0.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Delivery</span>
                                <span class="font-medium text-pink-600">FREE</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-medium text-gray-900">RM4.32</span>
                            </div>
                            <hr class="my-3">
                            <div class="flex justify-between text-lg font-semibold">
                                <span class="text-pink-600">Total</span>
                                <span class="text-pink-600">RM 164.32</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
