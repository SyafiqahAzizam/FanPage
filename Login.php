
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv= "X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href='../Loginphp/css/all.css'>

    <link rel="stylesheet" href="../Loginphp/css/style.css">
    <title>Hottest</title>

    
</head>
<body >


<div class="container" id="container">

<!-- Sign up -->
<div class="form-container sign-up-container">
    <form action="register.php" method="post">
        <h1>Create Account</h1>
       
        <span>Enter your email for registration</span>
        <input type="name" placeholder="Username" name="Name" />
        <input type="email" placeholder="Email" name="Email" />
        <input type="password" placeholder="Password" name="Password" />
        <button>Sign Up</button>
    </form>
</div>


<!-- Sign in -->
<div class="form-container sign-in-container">
    <form action="validation.php" method="post">
        <h1>Sign in</h1>
    
        <input type="name" placeholder="Username" name="Name" />
        <input type="password" placeholder="Password"name="Password" />
        
        <button>Sign In</button>
    </form>
</div>

<div class="overlay-container">
    <div class="overlay">
        <!-- Sign in -->
        <div class="overlay-panel overlay-left">
            <h1>Proud You are back Hottest!</h1>
            <p>
                To keep spreading love please do sign in
            </p>
            <button class="ghost" id="signIn">Sign In</button>
        </div>
        <!-- Sign up -->
        <div class="overlay-panel overlay-right">
        <img src="../Loginphp/Assets/tenor.gif" class="avatar" style= "width:70px; height:60px; border-radius: 50%;">
            <h1>Hello, Hottest!</h1>
            <p>Enter your personal details and start journey with 2PM</p>
            <button class="ghost" id="signUp">Sign Up</button>
        </div>
    </div>

</div>
<script >
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => 
        container.classList.add('right-panel-active')
    );

    signInButton.addEventListener('click', () => 
    container.classList.remove('right-panel-active'));

        </script>
        </body>
        </html>