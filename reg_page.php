<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_page.css">
    <title>Sign Up</title>
</head>
<body>
    <main>
        <header><logo>fitness</logo></br><logo>milestone</logo></header>
        <aside><quote>"Let's start a new</br> 
            chapter of your</br>
            life, my friend"</quote></aside>
        <section><image class="image" src="reg.jpg" width="416" height="513"></image></section>
        <article>
            <form class="form" method="POST" action="signup.php">
                <div>
                    <label for="fname">Enter your full name</label>
                    <input type="text" id="fname" name="fname" placeholder="ex: Ernest Khalikov...">
                </div>
                <div>
                    <label for="age">Enter your age</label>
                    <input type="text" id="age" name="age" placeholder="ex: 30...">
                </div>
                <div>
                    <label for="email">Enter your email</label>
                    <input type="email" id="email" name="email" placeholder="ex: berlin1969@chad.com">
                </div>
                <div>
                    <label for="username">Create a username</label>
                    <input type="text" id="username" name="username" placeholder="Ex. Gigachad...">
                </div>
                <div>
                    <label for="password">Create a password</label>
                    <input type="password" id="password" name="password" placeholder="Ex. Password123*...">
                </div>
                <div>
                    <button type="submit" id="regButton" name="register" value="register">Sign Up</button>
                </div>
            </form>
        </article>
    </main>
    <footer>Murmur, inc. 2023</footer>
</body>
</html>
