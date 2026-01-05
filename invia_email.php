<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];
    $destinatario = "Ryu98@hotmail.it";
    $oggetto = "Nuovo messaggio dal tuo sito";
    $corpo_messaggio = "Nome: $nome\nEmail: $email\n\nMessaggio:\n$messaggio";

    // Invia l'email (potrebbe richiedere configurazione SMTP)
    mail($destinatario, $oggetto, $corpo_messaggio);

    echo "Messaggio inviato con successo!";
} else {
    echo "Errore: metodo di richiesta non valido.";
}
?>
    
