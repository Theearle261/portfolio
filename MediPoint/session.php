<?php
// Generate a unique ID


// Get user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get session ID
$sessionId = session_id();

// Combine user agent and session ID to create a unique identifier
 $deviceId = md5($userAgent . $sessionId);
?>