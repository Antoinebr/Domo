#!/bin/bash

php /var/www/home/wemo/wemo-on.php
#mpg123 /home/antoine/antoine/download/*.mp3

php /var/www/home/hue/wakeup-lux.php

cd /home/antoine/antoine/download/
find -name "*.mp3" | sort --random-sort| head -n 100|xargs -d '\n' mpg123

