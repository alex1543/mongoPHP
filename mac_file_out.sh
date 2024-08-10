#!/usr/bin/env bash
MY_PATH="$(dirname -- "${BASH_SOURCE[0]}")"
cd $MY_PATH
php index.php > out.html
/usr/bin/open -a "/Applications/Google Chrome.app" 'out.html'
