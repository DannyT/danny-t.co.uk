#!/bin/sh

# Change all instances of ‘dannyt’ to whatever you have named your
# project’s stylesheet, `cd` to the directory in which this file lives and
# simply run `sh watch.sh`.

# No minification
#sass --watch css/style.scss:css/dannyt.css --style expanded

sass --watch css/style.scss:css/dannyt.css --style compressed

exit 0
