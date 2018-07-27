<?php
echo '0:        ' . (boolval(0) ? 'true' : 'false') . "\n" . "<br/>";
echo '42:       ' . (boolval(42) ? 'true' : 'false') . "\n" . "<br/>";
echo '0.0:      ' . (boolval(0.0) ? 'true' : 'false') . "\n" . "<br/>";
echo '4.2:      ' . (boolval(4.2) ? 'true' : 'false') . "\n" . "<br/>";
echo '"":       ' . (boolval("") ? 'true' : 'false') . "\n" . "<br/>";
echo '"string": ' . (boolval("string") ? 'true' : 'false') . "\n" . "<br/>";
echo '"0":      ' . (boolval("0") ? 'true' : 'false') . "\n" . "<br/>";
echo '"1":      ' . (boolval("1") ? 'true' : 'false') . "\n" . "<br/>";
echo '[1, 2]:   ' . (boolval([1, 2]) ? 'true' : 'false') . "\n" . "<br/>";
echo '[]:       ' . (boolval([]) ? 'true' : 'false') . "\n" . "<br/>";
echo 'stdClass: ' . (boolval(new stdClass) ? 'true' : 'false') . "\n" . "<br/>";
echo 'false: ' . (boolval('true') ? 'true' : 'false') . "\n" . "<br/>";
echo 'true: ' . (boolval('false') ? 'true' : 'false') . "\n" . "<br/>";