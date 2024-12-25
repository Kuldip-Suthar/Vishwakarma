@extends('master')
@section('content')
<div class="login-page">
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <div class="forgot-password">
                <a href="#forgot">Forgot Password?</a>
            </div>
        </form>
    </div>
</div>

<style>
    /* Adjustments for overall layout */
    .login-page {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 120px); /* Ensures the form fills the page between header and footer */
        padding: 20px;
        background-color: #f4f4f9; /* Match background with overall theme */
    }

    /* Form Container */
    .login-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2E7D32;
    }

    /* Form Styling */
    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        border-color: #2E7D32;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-login {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        color: white;
        background-color: #2E7D32;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-login:hover {
        background-color: #256628;
    }

    .forgot-password {
        text-align: center;
        margin-top: 15px;
    }

    .forgot-password a {
        text-decoration: none;
        color: #2E7D32;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .forgot-password a:hover {
        color: #1b4c1e;
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
        .login-container {
            padding: 20px;
        }

        .btn-login {
            font-size: 14px;
            padding: 8px;
        }
    }
</style>

 
@endsection