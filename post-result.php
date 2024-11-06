<?php
$pageTitle = "Post result";
include "view-header.php";
?>
<h1>Post result</h1>
<?php
function getDisplay() {
    if (isset($_POST['my-name']) && !empty($_POST['my-name'])) 
    {
        return "<p>The value sent is: " . ($_POST['my-name']) . "</p>";
    } 
    else 
    {
        return "<p>Nothing posted to the page.</p>";
    }
}

echo getDisplay();

include "view-footer.php";

?>
