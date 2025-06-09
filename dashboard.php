<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PCJ App</title>

  <!-- ✅ Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100 text-gray-800">

  <!-- ✅ Navigation Bar -->
 <nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
  
  <!-- Left Side (Logo) -->
  <a href="#" class="text-xl font-bold text-blue-600">PCJ</a>

  <!-- Center (Welcome Text) -->
  <h2 class="text-lg font-semibold text-gray-800">
    Welcome, <?php echo htmlspecialchars(trim($_SESSION['name'])); ?>
  </h2>

  <!-- Right Side (Logout Button) -->
  <a href="./logout.php" class="text-gray-700 hover:text-blue-600 font-medium">
    Logout
  </a>
  
</nav>

<main class="max-w-3xl mx-auto mt-10 px-6">
  <p class="text-lg leading-relaxed text-gray-800">
    Hello! 👋 I'm <strong>Prakash Chandra Joshi</strong>, a passionate and dedicated full-stack web developer with strong experience in building modern web applications using technologies like <span class="text-blue-600 font-medium">React.js, Next.js, MongoDB, and PHP</span>. I enjoy solving real-world problems and continuously improving my skills to stay up-to-date with the latest trends in technology.
    <br /><br />
    I have hands-on experience in both frontend and backend development, and I love turning ideas into responsive, user-friendly interfaces. Whether it's a dynamic website, a data-driven dashboard, or an authentication system — I enjoy building efficient and meaningful solutions.
    <br /><br />
    Thank you for visiting! 😊
  </p>
</main>


</body>
</html>