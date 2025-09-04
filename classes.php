<?php
class structure {
    public function heading() {
        echo "<h1>Welcome to My BBIT</h1>";
        echo "<p>This is a simple PHP class structure.</p>";
    }
    public function footer() {
        echo "<footer>Copyright &copy; " . date("Y") . " My BBIT</footer>";
    }
}

$page = new structure();

$page->heading();
$page->footer();