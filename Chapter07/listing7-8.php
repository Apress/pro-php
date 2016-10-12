//First include your plug-ins;
require_once('/path/to/plugin.php');

$menu = computeMenu();
$sidebars = computeSidebars();
$articles = computeArticles();

//This could be a lot more complex
print_r($menu);
print_r($sidebars);
print_r($articles);
