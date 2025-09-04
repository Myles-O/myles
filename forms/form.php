<?php
class forms{
    private function submit_button($text){
        print "<input type='submit' value='$text'>";
    }
    public function signup(){
        ?>
        <h2>Sign Up</h2>
        <form method="post" action="form.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <?php $this->submit_button("Sign Up"); ?>
        </form> 
        <?php
    }
    public function login(){
        ?>
        <h2>Login</h2>
        <form method="post" action="form.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <?php $this->submit_button("Login"); ?>
        </form> 
        <?php
    }
        
}