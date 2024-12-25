<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <h2>Vishwakarma</h2>
            <p>Crafting your dream furniture with precision and style.</p>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms & Conditions</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#facebook" class="social-icon" aria-label="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#twitter" class="social-icon" aria-label="Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#instagram" class="social-icon" aria-label="Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>  
    </div>
    <div class="footer-bottom">
        &copy; 2024 Vishwakarma. All Rights Reserved.
    </div>
</footer>

<style>
    .footer {
        background-color: #2E7D32; /* Solid green background */
        color: white;
        padding: 40px 20px;
        font-family: 'Arial', sans-serif;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-logo h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .footer-logo p {
        font-size: 1em;
        color: #ddd;
    }

    .footer-links h3,
    .footer-social h3 {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin: 5px 0;
    }

    .footer-links a {
        text-decoration: none;
        color: white;
        font-size: 1em;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #FFEB3B; /* Highlighted yellow */
    }

    .social-icons {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        font-size: 1.8em; /* Increased size for better visibility */
        color: white;
        transition: transform 0.3s ease, color 0.3s ease;
        background-color: #444; /* Added background for better contrast */
        padding: 10px;
        border-radius: 50%; /* Circular icons */
        text-align: center;
    }

    .social-icon:hover {
        transform: scale(1.2);
        color: #FFEB3B; /* Highlighted yellow */
        background-color: #555; /* Slightly brighter background */
    }

    .footer-bottom {
        text-align: center;
        font-size: 0.9em;
        color: #ccc;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 10px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            text-align: center;
        }

        .footer-links,
        .footer-social {
            margin-top: 20px;
        }
    }
</style>
