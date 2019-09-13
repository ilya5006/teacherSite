<?
    require_once './connection.php';

    $senderName = $_POST['sender_name'];
    $senderMail = $_POST['sender_mail'];
    $senderText = $_POST['sender_text'];

    $query = "INSERT INTO messages VALUES (NULL, '$senderName', '$senderMail', '$senderText')";
    mysqli_query($link, $query);

    header('Location: ../index.php');
?>