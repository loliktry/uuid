<?php
// Usage
include 'uuid.php';
// Named-based UUID.
$v3uuid = UUID::v3('20141', 'SomeRandomString');

$v5uuid = UUID::v5('20141', 'SomeRandomString');
// Pseudo-random UUID
$v4uuid = UUID::v4('20141','20141');

print " 3=".$v3uuid." 5=".$v5uuid." 4=".$v4uuid;
?>
