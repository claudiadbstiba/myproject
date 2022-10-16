<?php 

// if (is_user_logged_in()) {
//     redirect_to('index.php');
// }
// require_once __DIR__ . '/libs/helpers.php'; -> make this work??
// function view(string $filename, array $data = []): void
// {
    //create variables for the associative array
//     foreach ($data as $key => $value) {
//         $$key = $value;
//     }
//     require_once __DIR__ . '/../inc/' . $filename . '.php';
// } 
//   view('header', ['title' => 'register']) -> make it work ????
//the registration form submits to register.php using http post method,
//to process the data, i need to check if the http request is POST at the 
//beginning of the register.php file like this:

// if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
//     //process the form
// }

// the above code can be used on the other pages, i am defining the 
//is_post_request()function in the helpers.php file to encapsulate it
// function is_post_request(): bool
// {
//     return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
// }

// function is_get_request(): bool 
// {
//     return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';
// }

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>
<?php 

// $errors = [];
// $inputs = [];

// if (is_post_request()) {

//     $fields = [
//         'username' => 'string | required | alphanumeric | between: 3, 25 | unique: users, username',
//         'email' => 'email | required | email | unique: users, email',
//         'password' => 'string | required | secure',
//         'password2' => 'string | required | same: password',
//         'agree' => 'string | required'
//     ];
// }
//     // custom messages
//     $messages = [
//         'password2' => [
//             'required' => 'Please enter the password again',
//             'same' => 'The password does not match'
//         ],
//         'agree' => [
//             'required' => 'You need to agree to the term of services to register'
//         ]
//     ];
    
//     [$inputs, $errors] = filter($_POST, $fields, $messages);

//     if ($errors) {
//         redirect_with('register.php', [
//             'inputs' => $inputs,
//             'errors' => $errors
//         ]);
//     }

//     if (register_user($inputs['email'], $inputs['username'], $inputs['password'])) {
//         redirect_with_message(
//             'login.php',
//             'Your account has been created successfully. Please login here.'
//         );

//     }

// } else if (is_get_request()) {
//     [$inputs, $errors] = session_flash('inputs', 'errors');
// }
?>
<form action="register.php" method="post">
    <h1>Sign Up</h1>

    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
               class="<?= error_class($errors, 'username') ?>">
        <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
               class="<?= error_class($errors, 'email') ?>">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
               class="<?= error_class($errors, 'password') ?>">
        <small><?= $errors['password'] ?? '' ?></small>
    </div>

    <div>
        <label for="password2">Password Again:</label>
        <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
               class="<?= error_class($errors, 'password2') ?>">
        <small><?= $errors['password2'] ?? '' ?></small>
    </div>

    <div>
        <label for="agree">
            <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> I
            agree
            with the
            <a href="#" title="term of services">term of services</a>
        </label>
        <small><?= $errors['agree'] ?? '' ?></small>
    </div>

    <button type="submit">Register</button>

    <footer>Already a member? <a href="login.php">Login here</a></footer>

</form>

<?php view('footer') ?>