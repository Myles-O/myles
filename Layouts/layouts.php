<?php
class layouts {
    public function header() {
        echo "<header>Welcome to My BBIT</header>";
    }
    public function footer() {
        echo "<footer>Copyright &copy; " . date("Y") . " My BBIT</footer>";
    }
}