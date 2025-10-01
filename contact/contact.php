<?php
require __DIR__ . '/../.config/private.php'; // loads hidden constants
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = BEAULI_FROM;

// an email address that will receive the email with the output of the form
$sendTo = BEAULI_SENDTO;

// subject of the email
$subject = 'Neue BEAULI™ academy Mitteilung';

// form field names and their translations.
// array variable name => Text to appear in the email
// $fields = array('name' => 'Name', 'email' => 'Email', 'message' => 'Message'); 
$fields = [
  'name'    => 'Name',
  'email'   => 'Email',
  'message' => 'Message',
  'privacy' => 'Privacy Policy Accepted',
];

$senderName   = isset($_POST['name']) ? $_POST['name'] : '';
$okMessage    = 'Hello ' . htmlspecialchars($senderName, ENT_QUOTES, 'UTF-8') . ',<br><br>Thank you for reaching out to us! We have successfully received your message. A confirmation email has been sent to the email address you provided.<br><br>We will be in touch with you shortly.<br><br>Best regards,<br>Your BEAULI™ Team';
$spamMessage  = 'Thank you for reaching out to us! We have received your message. We will be in touch with you shortly.<br><br>Best regards,<br>Your BEAULI™ Team';
$errorMessage = 'An error occurred when submitting the form. Please try again later.';


// If something goes wrong, we will display this message.
$errorMessage = 'An error occurred when submitting the form. Please try again later.';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
// error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || count($_POST) === 0) {
        throw new \Exception('Form is empty');
    }

    if (!isset($_POST['privacy'])) {
        throw new \Exception('You must accept the privacy policy');
    }

    if (!isset($_POST['message'])) {
        throw new \Exception('Please,leave us a message.');
    }

    // Spamcheck
    $spamcheck = true;

    // Honeypots: jetzt per Konstanten prüfen
    if (!empty($_POST[HP_REPEAT_EMAIL] ?? '')) {
        $spamcheck = false;
    }

    if (!empty($_POST[HP_TERMS] ?? '')) {
        $spamcheck = false;
    }

    $message = trim((string)($_POST['message'] ?? ''));

    // URL im Text → Spam
    if (preg_match('/\bhttps?:\/\/\S+/i', $message)) {
        $spamcheck = false;
    }

    // Mindestwortanzahl
    $wordCount = count(array_filter(explode(' ', $message), fn($w) => $w !== ''));
    if ($wordCount < 3) {
        $spamcheck = false;
    }

    // privacy muss exakt "checked" sein (dein Formular setzt value="checked")
    if (($_POST['privacy'] ?? '') !== 'checked') {
        $spamcheck = false;
    }

    if ($spamcheck) {
        $emailText = "Neue Nachricht von BEAULI™ \n=============================\n";

        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailText .= $fields[$key] . ': ' . $value . "\n\n";
            }
        }

        // Header
        $headers = [
            'Content-Type: text/plain; charset="UTF-8";',
            'From: '        . $from,
            'Reply-To: '    . $from,
            'Return-Path: ' . $from,
            'Bcc: '         . BEAULI_BCC,
        ];

        // Senden
        @mail($sendTo, $subject, $emailText, implode("\n", $headers));

        // Bestätigungs-E-Mail
        $confirmSubject = 'BEAULI™: Inquiry Successfully Received';
        $confirmMessage = "Dear $senderName,\n\nThank you for reaching out to us! We have successfully received your message.\nWe will be in touch with you shortly.\n\nBest regards,\nYour BEAULI™ Team\n\n---\nPark-Klinik Birkenwerder\nHubertusstraße 22\n16547 Birkenwerder\nhttps://beauli.de";
        $confirmHeaders = [
            'Content-Type: text/plain; charset="UTF-8";',
            'From: '        . $from,
            'Reply-To: '    . $sendTo,
            'Return-Path: ' . $from,
        ];

        $senderEmail = trim((string)($_POST['email'] ?? ''));
        if ($senderEmail !== '') {
            @mail($senderEmail, $confirmSubject, $confirmMessage, implode("\n", $confirmHeaders));
        }

        $responseArray = ['type' => 'success', 'message' => $okMessage];
    } else {
        // Absichtlich success, um Bots zu beruhigen
        $responseArray = ['type' => 'success', 'message' => $spamMessage];
    }
}
catch (\Exception $e) {
    // Für Debug:
    // $responseArray = ['type' => 'danger', 'message' => $e->getMessage()];
    $responseArray = ['type' => 'danger', 'message' => $errorMessage];
}


// AJAX?
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    header('Content-Type: application/json');
    echo json_encode($responseArray);
} else {
    // Non-AJAX: simple output (dein $okMessage enthält HTML)
    echo $responseArray['message'];
}
