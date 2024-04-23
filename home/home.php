<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jewelry Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lora&family=Martel:wght@300;400;700&family=Bastiken&display=swap');
    .font-bastiken {
      font-family: 'Bastiken', sans-serif;
    }
    .font-martel {
      font-family: 'Martel', serif;
    }
    .font-lora {
      font-family: 'Lora', serif;
    }
  </style>
</head>
<body class="font-martel bg-[#f2f2f2]">
  <!-- Header -->
  <header class="px-12 py-4 bg-white shadow">
    <div class="flex items-center justify-between max-w-6xl mx-auto">
      <!-- Logo and Navigation -->
      <div class="flex items-center">
        <h1 class="text-4xl font-bold text-black mr-8 font-bastiken">JEWELS</h1>
        <nav>
          <ul class="flex space-x-6">
            <li><a href="#" class="text-lg text-black hover:text-gray-700">Home</a></li>
            <li><a href="#" class="text-lg text-black hover:text-gray-700">Collection</a></li>
            <li><a href="#" class="text-lg text-black hover:text-gray-700">About Us</a></li>
            <li><a href="#" class="text-lg text-black hover:text-gray-700">Contact</a></li>
          </ul>
        </nav>
      </div>
      <!-- Sign Up -->
      <div class="flex items-center">
        <div class="flex items-center mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-black">
            <!-- icon content -->
          </svg>
          <span>Search</span>
        </div>
        <a href="#" class="text-lg text-black hover:text-gray-700">Sign Up</a>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Additional sections would go here... -->
   <!-- Hero Section -->
<section class="relative bg-[#f2f2f2] py-12">
  <!-- Background Image -->
  <div class="absolute inset-0 bg-no-repeat bg-cover bg-yellow-950"></div>
  
  <!-- Content -->
  <div class="container mx-auto px-12">
    <div class="grid grid-cols-2 gap-8 items-center">
      <!-- Text Content -->
      <div class="z-10">
        <h2 class="text-5xl font-normal leading-tight text-black mb-6 font-bastiken">Your One-Stop Destination for Unique and Exquisite Jewelry Pieces</h2>
        <p class="text-lg text-black opacity-70 max-w-md mb-8">
          Here, we offer various types of jewelry, including necklaces, bracelets, earrings, and rings. From classic designs to modern styles, we have something for everyone.
        </p>
        <a href="#collections" class="inline-block px-6 py-3 bg-[#b07b54] text-white rounded-full font-medium text-lg transition duration-300 ease-in-out hover:bg-[#9a6850]">
          Shop The Collection
        </a>
      </div>
      <!-- Hero Image -->
      <div class="z-10">
        <img src="uploads/page1.jpg" alt="Elegant Jewelry" class="rounded-full max-w-full h-auto">
      </div>
    </div>
  </div>
  
  <!-- Overlay to fade image to the background color -->
  <div class="absolute inset-0 bg-[#f2f2f2] opacity-70"></div>
</section>
<!-- End of Hero Section -->
 <!-- New Collection Section -->
<section class="py-16">
  <div class="container mx-auto px-12">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h3 class="text-4xl text-black font-normal font-bastiken">New Collection</h3>
    </div>

    <!-- Collection Items -->
    <div class="grid grid-cols-3 gap-8">
      <!-- Each item should be repeated for each category (Necklaces, Earrings, Wedding Rings) -->
      <!-- For demonstration, I will create a single item and assume repetition -->
      <div class="bg-white">
        <img src="uploads/page1.jpg" alt="Necklaces" class="w-full h-auto">
        <div class="p-4 text-center">
          <h4 class="text-2xl text-black">Necklaces</h4>
          <button class="mt-4 px-6 py-2 bg-[#b07b54] text-white rounded-full transition duration-300 ease-in-out hover:bg-[#9a6850]">
            Shop Now
          </button>
        </div>
      </div>
      
      <!-- Repeat for other categories -->
      
    </div>
  </div>
</section>
<!-- End of New Collection Section -->
<!-- Diamond is a Woman's Best Friend Section -->
<section class="py-16 bg-[#fffaf5]">
  <div class="container mx-auto px-12">
    <!-- Section Content -->
    <div class="text-center">
      <!-- Title -->
      <h3 class="text-4xl text-black font-normal mb-8 font-bastiken">
        A diamond is a woman's best friend!
      </h3>
      <!-- Description -->
      <p class="text-lg text-black font-light">
        A diamond is a timeless symbol of beauty and friendship, making it the perfect gift for any woman. It is often said that diamonds are a woman's best friend, and for good reason. Not only does a diamond represent unwavering loyalty and devotion, but it is also a symbol of luxury, glamor, and class. A diamond tells the world that you are proud of your loved one, and want them to have only the best. As Coco Chanel once said, "A diamond is eternity, it is real and it is unbreakable."
      </p>
    </div>
  </div>
</section>
<!-- End of Diamond is a Woman's Best Friend Section -->
<!-- Best Sellers Section -->
<section class="py-16 bg-[#f2f2f2]">
  <div class="container mx-auto px-12">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h3 class="text-4xl text-black font-normal font-bastiken">Best Sellers</h3>
    </div>

    <!-- Best Sellers Grid -->
    <div class="grid grid-cols-4 gap-8">
      <!-- Single Item -->
      <div class="bg-white">
        <img src="uploads/page1.jpg" alt="High Angle Golden Earrings" class="w-full h-auto">
        <div class="p-4">
          <h4 class="text-xl text-black">High Angle Golden Earrings</h4>
          <p class="text-lg text-black">$60.00 USD</p>
        </div>
      </div>
      
      <!-- More Items... -->
      <!-- Repeat the above structure for each best-selling product -->
      
    </div>
  </div>
</section>
<!-- End of Best Sellers Section -->
<!-- About Us Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-12 flex items-center">
    <div class="w-1/2">
      <img src="uploads/page1.jpg" alt="About Us" class="w-full h-auto">
    </div>
    <div class="w-1/2">
      <h3 class="text-4xl text-black font-normal mb-8 font-bastiken">About Us</h3>
      <p class="text-lg text-black font-light mb-8">
        We're a group of five friends passionate about making unique and beautiful jewelry. Whether it's crafting intricate beaded necklaces or designing elegant bracelets, our creativity and skills shine through in every piece we create.
      </p>
      <a href="#about" class="inline-block px-6 py-3 bg-[#b07b54] text-white rounded-full font-medium text-lg transition duration-300 ease-in-out hover:bg-[#9a6850]">
        Read More
      </a>
    </div>
  </div>
</section>
<!-- End of About Us Section -->

</body>
</html>
