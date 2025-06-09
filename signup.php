<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PCJ</title>
  <!-- ✅ Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <form action="./signup_backend.php" method="POST" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-blue-700">Sign Up</h2>

    <!-- Name -->
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
      <input type="text" name="name" id="name" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
      <input type="email" name="email" id="email" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Password -->
    <div class="mb-4">
      <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
      <input type="password" name="password" id="password" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Number -->
    <div class="mb-4">
      <label for="number" class="block text-gray-700 font-medium mb-1">Number</label>
      <input type="number" name="number" id="number" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Message -->
    <div class="mb-6">
      <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
      <input type="text" name="message" id="message"
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Submit Button -->
    <button type="submit"
      class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-300">
      Submit
    </button>

    <!-- Login Link -->
    <p class="text-center text-sm text-gray-600 mt-4">
      Already have an account?
      <a href="./login.php" class="text-blue-600 hover:underline font-medium">Login here</a>
    </p>
  </form>

</body>
</html>
