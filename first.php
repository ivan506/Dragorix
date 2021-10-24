<?php

$benutzername = $_POST["Benutzername"];
$passwort       = $_POST["Passwort"];

if (Signin($benutzername, $passwort)) {

    echo "<a href='chat.html'>chat</a>";
} else {
    echo "Login fail ";
}


?>
<?php

function Signin($benutzername, $passwort)
{
    include "webaccass.php";
    if ($benutzername == $toCompareName && $passwort == $toComparePW) {
        return 1;
    } else {
        return 0;
    }
}

?>