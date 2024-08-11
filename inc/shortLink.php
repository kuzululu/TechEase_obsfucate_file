<?php
 function shortenLinkName($linkName, $maxLength = 15) { if (strlen($linkName) > $maxLength) { return substr($linkName, 0, $maxLength - 3) . "\56\x2e\x2e"; } else { return $linkName; } } ?>