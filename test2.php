<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Dropdown</title>
  <style>
    /* CSS reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
    }

    /* Navbar styles */
    .navbar {
      background-color: #333;
      padding: 10px;
    }

    .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar li {
      margin-right: 20px;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
    }

    /* Dropdown styles */
    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>

<div class="navbar">
  <ul>
    <li><a href="#">Home</a></li>
    <li class="dropdown">
      <a href="#">Products</a>
      <div class="dropdown-content">
        <a href="#">Loại trang sức</a>
        <a href="#">Nhà cung cấp</a>
      </div>
    </li>
    <li><a href="#">Quản lý nhân sự</a></li>
  </ul>
</div>

</body>
</html>
