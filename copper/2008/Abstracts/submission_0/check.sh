#!/bin/bash
echo "In master dir: "
ls /srv/www/cgi-bin/copper2008/Abstracts/submission/*.pdf|wc
echo "In access dir: "
ls /home/copper/public_html/2008/Abstracts/submission/*.pdf |wc 
