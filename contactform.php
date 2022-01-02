<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject']
    $mailfrom = $_POST['email']
    $message = $_POST['message']
    $telephone = $_POST['telephone']

    $mailTo = "karelbroos@kblsbv.be";
    $headers = "From: ".$mailfrom;
    $txt = "Dit bericht is verstuurd vanuit kblsbv.be.\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>