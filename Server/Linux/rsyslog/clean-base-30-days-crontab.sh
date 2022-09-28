#!/bin/sh

echo " * * mysql -u user -p_pass_ -e 'DELETE FROM SystemEvents WHERE ReceivedAt < date_add(current_date, interval -30 day)' Syslog" >> 