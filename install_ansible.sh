#!/bin/bash

yum -y install epel-release
yum -y install ansible
yum -y install python-setuptools
easy_install pip
pip install zabbix-api

cp ansible.cfg /etc/ansible
cp -r callback_plugins  /etc/ansible

