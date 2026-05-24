<?php
declare(strict_types=1);

$filename = 'vernissage-immersif-resonances-du-vivant.ics';
$uid = bin2hex(random_bytes(16)) . '@resonancesduvivant.ch';
$dtstamp = gmdate('Ymd\THis\Z');

$lines = [
    'BEGIN:VCALENDAR',
    'VERSION:2.0',
    'PRODID:-//Resonances du Vivant//EN',
    'CALSCALE:GREGORIAN',
    'METHOD:PUBLISH',
    'BEGIN:VEVENT',
    'UID:' . $uid,
    'DTSTAMP:' . $dtstamp,
    'DTSTART:20260619T170000',
    'DTEND:20260619T230000',
    'SUMMARY:Vernissage Immersif - Resonances du Vivant',
    'LOCATION:Galerie de Grandcour, Rue du Reinz 11, 1543 Grandcour',
    'DESCRIPTION:Invitation au vernissage immersif de Resonances du Vivant.',
    'END:VEVENT',
    'END:VCALENDAR',
];

$content = implode("\r\n", $lines) . "\r\n";

header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: private, max-age=0, no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

echo $content;
exit;
