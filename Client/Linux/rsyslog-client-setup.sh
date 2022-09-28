#!/bin/bash

echo "*.* @192.168.10.254:514" >> /etc/rsyslog,conf

systemctl restart rsyslog
