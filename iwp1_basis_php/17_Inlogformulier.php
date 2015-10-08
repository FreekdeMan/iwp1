<!-- Source code used from http://www.html-form-guide.com/php-form/php-login-form.html -->

<?php
function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("Gebruikersnaam is niet ingevuld!");
        return false;
    }
     
    if(empty($_POST['password']))
    {
        $this->HandleError("Wachtwoord is niet ingevuld!");
        return false;
    }
     
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
     
    if(!$this->CheckLogin($username,$password))
    {
        return false;
    }
     
    session_start();
     
    $_SESSION[$this->GetLoginSessionVar()] = $username;
     
    return true;
}

function CheckLogin($username,$password)
{
    if(!$this->DBLogin())
    {
        $this->HandleError("Database login failed!");
        return false;
    }          
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $qry = "Select name, email from $this->tablename ".
        " where username='$username' and password='$pwdmd5' ".
        " and confirmcode='y'";
     
    $result = mysql_query($qry,$this->connection);
     
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. ".
            "The username or password does not match");
        return false;
    }
    return true;
}


?>

<html>
    <head>
        <title>Inlogformulier</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
            <fieldset >
            <legend>Login</legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <label for='username' >Gebruikersnaam*:</label>
                <input type='text' name='username' id='username'  maxlength="50" />

                <label for='password' >Wachtwoord*:</label>
                <input type='password' name='password' id='password' maxlength="50" />

                <input type='submit' name='Submit' value='Submit' /> 
            </fieldset>
        </form>
    </body>
</html>



<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>