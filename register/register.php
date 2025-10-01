<?php
require __DIR__ . '/../.config/private.php'; 
/*
 *  CONFIGURE EVERYTHING HERE
 */

// --------- Basiskonfig ---------
$from    = REG_FROM;
$sendTo  = REG_SENDTO;
$subject = 'Neue BEAULI™ academy Registrierungsanfrage';

// form field 
$fields = [
  'name'                 => 'Name',
  'email'                => 'Email',
  'message'              => 'Message',
  REG_MATH_FIELD         => 'Math Question Answer',
  'privacy'              => 'Privacy Policy Accepted',
]; 

$senderName   = isset($_POST['name']) ? $_POST['name'] : '';
$okMessage    = 'Hello ' . htmlspecialchars($senderName, ENT_QUOTES, 'UTF-8') . ',<br><br>thank you for your registration request at BEAULI™ Academy!<br>We are pleased to have received your details and are currently processing your request. A confirmation email has been sent to your provided email address.<br><br>We will be in touch shortly with more information on the next steps.<br><br>Best regards,<br>Your BEAULI™ Team';
$spamMessage  = 'Thank you for your registration request!<br>We are pleased to have received your details and are currently processing your request. We will be in touch shortly with more information on the next steps.<br><br>Best regards,<br>Your BEAULI™ Team';
$errorMessage = 'An error occurred when submitting the form. Please try again later.';

/*
 *  LET'S DO THE SENDING
 */

// Debug bei Bedarf:
// error_reporting(E_ALL & ~E_NOTICE); ini_set('display_errors', '1');
error_reporting(0);

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || count($_POST) === 0) {
        throw new \Exception('Form is empty');
    }

    if (!isset($_POST['privacy'])) {
        throw new \Exception('You must accept the privacy policy');
    }

    $spamcheck = true;

    // Honeypots
    if (!empty($_POST[REG_HP_REPEAT_EMAIL] ?? '')) {
        $spamcheck = false;
    }
    if (!empty($_POST[REG_HP_TERMS] ?? '')) {
        $spamcheck = false;
    }

    // Mathefrage prüfen
    if (trim((string)($_POST[REG_MATH_FIELD] ?? '')) !== REG_MATH_ANSWER) {
        throw new \Exception('Incorrect answer to the math question.');
    }

    // Optionaler Nachrichtentext: URL = Spam
    $message = trim((string)($_POST['message'] ?? ''));
    if ($message !== '' && preg_match('/\bhttps?:\/\/\S+/i', $message)) {
        $spamcheck = false;
    }

    // Privacy muss "checked" sein
    if (($_POST['privacy'] ?? '') !== 'checked') {
        $spamcheck = false;
    }

    if ($spamcheck) {
        $emailText = "Neue BEAULI™ academy Registrierungsanfrage \n=============================\n";
        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailText .= $fields[$key] . ': ' . $value . "\n\n";
            }
        }

        $headers = [
            'Content-Type: text/plain; charset="UTF-8";',
            'From: '        . $from,
            'Reply-To: '    . $from,
            'Return-Path: ' . $from,
            'Bcc: '         . REG_BCC,
        ];

        @mail($sendTo, $subject, $emailText, implode("\n", $headers));

        // Bestätigungs-Mail
        $confirmSubject = 'BEAULI™ Academy Registration: Your Request Confirmation';
        $confirmMessage = "Dear $senderName,\n\nWe are delighted to confirm that we have received your registration request at BEAULI™ Academy.\nWe are currently processing your registration request and will be in touch shortly with further details on the next steps.\n\nShould you have any questions or require additional information, please do not hesitate to contact us at info@beauli.de\nWe look forward to welcoming you to BEAULI™ Academy and beginning this journey together.\n\nBest regards,\nYour BEAULI™ Team\n\n---\nPark-Klinik Birkenwerder\nHubertusstraße 22\n16547 Birkenwerder\nhttps://beauli.de";

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
        // Bot freundlich abspeisen
        $responseArray = ['type' => 'success', 'message' => $spamMessage];
    }
}
catch (\Exception $e) {
    // Für gezielte Fehlersuche vorübergehend:
    // $responseArray = ['type' => 'danger', 'message' => $e->getMessage()];
    $responseArray = ['type' => 'danger', 'message' => $errorMessage];
}

// AJAX?
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    header('Content-Type: application/json');
    echo json_encode($responseArray);
} else {
    echo $responseArray['message'];
}