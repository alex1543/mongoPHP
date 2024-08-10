#!/usr/bin/env bash
MY_PATH="$(dirname -- "${BASH_SOURCE[0]}")"
cd $MY_PATH
php index.php > out.html
php -S localhost:8000 out.html
