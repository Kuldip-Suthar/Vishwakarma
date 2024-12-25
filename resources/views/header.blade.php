<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Website Header</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            background-color: #4CAF50; /* Elegant green theme */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        .nav-bar {
            display: flex;
            gap: 20px;
        }

        .nav-link {
            text-decoration: none;
            font-size: 1.1em;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .nav-link:hover {
            background-color: #388E3C; /* Darker green for hover */
            transform: scale(1.1);
        }

        .cta, .cart {
            padding: 10px 15px;
            font-size: 1em;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .cta {
            background-color: #FF5722; /* Eye-catching orange for CTA */
        }

        .cta:hover {
            background-color: #E64A19; /* Darker orange for hover */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }

        .cart {
            background-color: #FFEA00; /* Bright yellow for cart */
            color: black;
        }

        .cart:hover {
            background-color: #FFC800; /* Darker yellow for hover */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .nav-bar {
                flex-wrap: wrap;
                gap: 10px;
                margin: 10px 0;
            }

            .cta, .cart {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header class="header">
    <div class="logo">Vishwakarma</div>
    <nav class="nav-bar">
        <a href="#home" class="nav-link">Home</a>
        <a href="#furniture" class="nav-link">Furniture</a>
        <a href="#registration" class="nav-link">Registration</a>
        <a href="#contact" class="nav-link">Contact Us</a>
    </nav>
    <div>
        <a href="#cart" class="cart">Cart</a>
        <a href="#cta" class="cta">Shop Now</a>
    </div>
</header>

</body>
</html>
