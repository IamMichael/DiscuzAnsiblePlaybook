<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{{ hostvars["h_zabbix_server"]["ansible_ssh_host"] }}';
$DB['PORT']     = '3306';
$DB['DATABASE'] = '{{ zabbix_database }}';
$DB['USER']     = '{{ zabbix_user }}';
$DB['PASSWORD'] = '{{ zabbix_user_pwd }}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '{{ hostvars["h_zabbix_server"]["ansible_ssh_host"] }}';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = 'ZabbixServer';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;

