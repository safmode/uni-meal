<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor Registration - UniMeal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">Register as Vendor</h2>
            <form method="POST" action="<?php echo e(route('vendor.register.submit')); ?>">
                <?php echo csrf_field(); ?>

                <input type="text" name="name" placeholder="Name" class="w-full mb-4 p-2 border rounded" required>
                <input type="email" name="email" placeholder="Email" class="w-full mb-4 p-2 border rounded" required>
                <input type="password" name="password" placeholder="Password" class="w-full mb-4 p-2 border rounded" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full mb-4 p-2 border rounded" required>

                <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                    Register Vendor
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-blue-500 hover:underline">Back to Login</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\unimeal\resources\views/auth/register_cafeteria.blade.php ENDPATH**/ ?>