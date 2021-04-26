#!/usr/bin/env bash
set -e

# Sleep 5 seconds, let other containers start
sleep 5

# Execute the PHP script with the selenium stuff
../usr/bin/php7.1 chromeTest.php