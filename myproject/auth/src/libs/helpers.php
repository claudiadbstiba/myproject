<?php 
//making the title tag dinamic so it can be included in different places
function view(string $filename, array $data = []): void
{
    //create variables for the associative array
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require_once __DIR__ . '/../inc/' . $filename . '.php';
}

//process the registration form submission

function is_post_request(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
}

//define the is_get_request() function that returns true if the current HTTP
//request is GET

function is_get_request(): bool 
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';
}

//error CSS class, the following defines the error_class() function file,
//which returns the 'error' class if the $errors array has an error associated with a field

function error_class(array $errors, string $field): string
{
return isset($errors[$field]) ? 'error' : '';
}

//redirect; after users register for accounts successfully, i redirect them to the login page.
//define a function called redirect_to()

function redirect_to(string $url): void
{
    header('Location:' . $url);
    exit;
}

//if the form data is invalid, i redirect users back to the register.php page.
//i first add $inputs and $errors variable to the $_SESSION variable so that i can access them in the 
//subsequent request
//redirect_with() function bellow adds the elements of the $items array 
//to the $_SESSION variable and redirect to a URL;

function redirect_with(string $url, array $items): void
{
    foreach ($items as $key => $value) {
        $_SESSION[$key] = $$value;
    }
    redirect_to($url);
}

//now i show how to use the redirect_with() function that adds the $inputs and
//$errors array and redirect to the register.php page:

redirect_with('register.php', [
    'inputs' => $inputs,
    'errors' => $errors
]);

//bellow is the flash message and redirect to another page

function redirect_with_message(string $url, string $message, string $type=FLASH_SUCCESS)
{
    flash('flash_' . uniqid(), $message, $type);
    redirect_to($url);
}

//flash session data
//to get data from the $_SESSION and remove it immediately, i define the function session_flash():

function session_flash(...$keys): array
{
$data = [];
foreach ($keys as $key) {
    if (isset($_SESSION[$key])) {
        $data[] = $_SESSION[$key];
        unset($_SESSION[$key]);
    } else {
        $data[] = [];
    }
}
return $data;
}