<!DOCTYPE HTML5>
<html>
    <head>
        <title>Create new Chatty account</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700"rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type=text/css href="css/signup.css">
    </head> 
    <body>
<div class="signup-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign Up</h2>
            <p>Fill out the details and starting chatting with your friends</p>
        </div> 
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Example: emily123" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user-pass" placeholder="*********" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="user-email" placeholder="name@email.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Country</label>
            <select class="form-control" name="user-country" required>
                <option disabled="">Select a Country</option>
                <option>Bulgaria</option>
                <option>France</option>
                <option>Germany</option>
                <option>Netherlands</option>
                <option>Turkey</option>
                <option>Spain</option>
                <option>United Kingdom</option>
                <option>United States</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="user-gender" required>
                <option disabled="">Select what you identify as</option>
                <option>Woman</option>
                <option>Man</option>
                <option>Prefer not to disclose</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label class="checkbox-inline"> <input type="checkbox" required>I accept the <a href=#>Terms & Conditions</a></label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="signup"> Sign up</button>
        </div>
        <?php include("signup-user.php"); ?>
    </form>
    <div class="text-center small" style="color: #8e2635;">Already have an account? <a href="login.php">Login here</a></div>
    </div>
    </body>  

</html>