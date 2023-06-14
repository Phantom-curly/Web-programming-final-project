<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="login_page.css"/>
    <title>Login</title>
</head>
<body>
    <main>
        <header>
            <logo>fitness</logo></br><logo>milestone</logo>
            <a href="reg_page.html">Don't have an account yet?</a>
        </header>
        <div class="Login">Login</div>
        <aside>
            <quote>
                "I am glad,</br> 
                to see you </br>
                again, my</br>
                friend"
            </quote>
        </aside>
        <section>
            <image class="image" src="login.jpg" width="474" height="650"></image>
        </section>
        <article>
            <form method="POST" action="login.php">
                <div>
                    <?php if(isset($_GET['verified']) && $_GET['verified'] === 'false'): ?>
                    <p style="color: red; font-size:30px; position:relative; left: 40px; top: -20px;">Invalid username or password. Please try again.</p>
                    <?php endif; ?>
                    <input type="text" id="username" name="username" placeholder="Enter your username...">
                </div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Enter your password...">
                </div>
                <div>
                    <button type="submit" id="loginButton" name="login" value="Submit">Login</button>
                </div>
            </form>
        </article>
    </main>
    <footer>Murmur, inc. 2023</footer>
</body>
</html>
