<?php
// relay.php — Webhook کنترل رله

$stateFile = 'relay_state.txt';

// اگر مقدار state در آدرس وجود داره (مثل ?state=on یا ?state=off)
if (isset($_GET['state'])) {
    $state = $_GET['state'];
    file_put_contents($stateFile, $state);
    echo "Relay state set to: $state";
}
// اگر مقدار state ارسال نشده، وضعیت فعلی برگردون
else {
    if (file_exists($stateFile)) {
        echo file_get_contents($stateFile);
    } else {
        echo "off";
    }
}
?>
