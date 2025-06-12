<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Successful</title>
</head>
<body>
  <script>
    alert('Your order was placed successfully!');
    window.location.href = "{{ route('student.home') }}";
  </script>
</body>
</html>
