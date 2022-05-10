 <?php
header('Content-Type: text/html; charset=utf-8');

$url = explode('/', $_SERVER['REQUEST_URI']);

if ($url[1] == "auth") {
  $content = file_get_contents("pages/login.html");
} else if ($url[1] == "reg") {
  $content = file_get_contents("pages/register.html");
} else if ($url[1] == "blog") {
  $content = file_get_contents("pages/blog.html");
} else if ($url[1] == "users") {
  require_once("pages/users/index.php");
} else if ($url[1] == "cart") {
  require_once("pages/cart.html");
} else if ($url[1] == "category") {
  require_once("pages/category.html");
} else if ($url[1] == "checkout") {
  require_once("pages/checkout.html");
} else if ($url[1] == "confirmation") {
  require_once("pages/confirmation.html");
} else if ($url[1] == "contact") {
  require_once("pages/contact.html");
} else if ($url[1] == "single-blog") {
  require_once("pages/single-blog.html");  
} else if ($url[1] == "single-product") {
  require_once("pages/single-product.html");  
} else if ($url[1] == "tracking-order") {
  require_once("pages/tracking-order.html");  
} else {
  $content = file_get_contents("pages/index.php");
}

if (!empty($content))
require_once("template.php");



// if ($url[1] == blog) {
//   require_once("blog.html");
// } else if ($url[1] == cart) {
//   require_once("cart.html");
// }



// $url = $url[0];
// for ($i = 0; $i < count($url); $i++) {
//   echo $url[$i]."<hr>";
// }