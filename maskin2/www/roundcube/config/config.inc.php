<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// Note: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'
//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'
// Note: Various drivers support various additional arguments for connection,
//       for Mysql: key, cipher, cert, capath, ca, verify_server_cert,
//       for Postgres: application_name, sslmode, sslcert, sslkey, sslrootcert, sslcrl, sslcompression, service.
//       e.g. 'mysql://roundcube:@localhost/roundcubemail?verify_server_cert=false'
$config['db_dsnw'] = 'mysql://gr6:Gr6123@localhost/roundcube';

// ----------------------------------
// IMAP
// ----------------------------------
// The IMAP host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// Enter hostname with prefix ssl:// to use Implicit TLS, or use
// prefix tls:// to use STARTTLS.
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['default_host'] = 'localhost';

// SMTP port. Use 25 for cleartext, 465 for Implicit TLS, or 587 for STARTTLS (default)
$config['smtp_port'] = 25;
$config['smtp_server'] = 'localhost'; // eller IP-adressen til SMTP-serveren din
$config['smtp_tls'] = true;
$config['smtp_user'] = ''; // brukernavn
$config['smtp_pass'] = ''; // passord
$config['smtp_auth_type'] = 'LOGIN'; // prøv evt. 'PLAIN' eller 'LOGIN' om nødvendig

$config['smtp_conn_options'] = array(
    'ssl' => array(
        'verify_peer'  => true,
        'verify_peer_name' => true,
        'allow_self_signed' => true, // sett til true kun om du bruker selvsignert sertifikat
    ),
);


// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '';

// This key is used for encrypting purposes, like storing of imap password
// in the session. For historical reasons it's called DES_key, but it's used
// with any configured cipher_method (see below).
// For the default cipher_method a required key length is 24 characters.
$config['des_key'] = 'Lgo83OLqPYT1v7Vf6OLULAIS';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'Bedrift 6 Webmail';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = array('acl', 'additional_message_headers', 'archive', 'attachment_reminder', 'autologon', 'database_attachments', 'debug_logger', 'emoticons', 'enigma', 'example_addressbook', 'filesystem_attachments', 'help', 'hide_blockquote', 'http_authentication', 'identicon', 'identity_select', 'jqueryui', 'krb_authentication', 'managesieve', 'markasjunk', 'new_user_dialog', 'new_user_identity', 'newmail_notifier', 'password', 'redundant_attachments', 'show_additional_headers', 'squirrelmail_usercopy', 'subscriptions_option', 'userinfo', 'vcard_attachments', 'virtuser_file', 'virtuser_query', 'zipdownload');

