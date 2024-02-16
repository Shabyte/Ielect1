<?php
session_start();

$title = 'Login Page';
$error = '';
require_once('../includes/admin.head.php');
require_once('../classes/account.class.php');

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    // Redirect to dashboard or another page
    header("Location: dashboard.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate username and password
    $username = filter_input(INPUT_POST, 'username',);
    $password = filter_input(INPUT_POST, 'password',);

    if (empty($username)) {
        $error .= "Username cannot be empty.<br>";
    }

    if (empty($password)) {
        $error .= "Password cannot be empty.<br>";
    }

    if (empty($error)) {
        $userAccount = new UserAccount(); 
        if ($userAccount->ifUsernameExists($username) && $userAccount->verifyPassword($username, $password)) {
            $_SESSION['user_id'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error .= "Invalid username or password.<br>";
        }
    }
}
?>

<body id="login">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="POST">
        <img src="../images/wmsu-logo.png" alt="Logo" class="logo-img">
        <h2>I-elect</h2>
        <div class="mb-3">
            <label for="username" class="visually-hidden">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <?php
        if (!empty($error)) {
            echo "<p class='text-danger mt-1 text-center'>$error</p>";
        }
        ?>
    </form>

    <?php require_once("../includes/footer.php"); ?>
