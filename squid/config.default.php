<?php

// what to call the authentication portal
define("SQUID_AUTH_TITLE", "My Squid Authenticator");

// where to direct users if something breaks
define("SQUID_SUPPORT_URL", "http://helpdesk.mydomain.local/");

// where to send users if the authentication portal can't find a referer
define("SQUID_DEFAULT_REDIRECT", "http://www.mydomain.com/");

// how many seconds to wait for MySQL / Profile Manager / LDAP connections
define("SQUID_CONNECT_TIMEOUT", 4);

// LDAP settings (credentials are used when checking group membership)
define("SQUID_LDAP_SERVER", "DC01");
define("SQUID_LDAP_USER_DN", "CN=Squid,OU=Users,DC=mydomain,DC=local");
define("SQUID_LDAP_USER_PW", "PASSWORD");
define("SQUID_LDAP_BASE_DN", "OU=Users,DC=mydomain,DC=local");

// regular expressions for username/password validation (prior to LDAP binding) - ignored if empty
define("SQUID_LDAP_USERNAME_REGEX", '/^[a-z]+[\\.a-z]+$/i');
define("SQUID_LDAP_PASSWORD_REGEX", '/^.{6,}$/');

// appended to usernames before authentication is attempted
define("SQUID_LDAP_USERNAME_APPEND", "@mydomain.local");

// map short group names (as passed to our Squid external_acl_type) to LDAP DNs
$SQUID_LDAP_GROUP_DN = array(
    "my_group" => "CN=My Group,OU=Groups,DC=mydomain,DC=local"
);

// BYOD database credentials (MySQL)
define("SQUID_BYOD_DB_SERVER", "localhost");
define("SQUID_BYOD_DB_NAME", "squid_byod");
define("SQUID_BYOD_DB_USERNAME", "squid");
define("SQUID_BYOD_DB_PASSWORD", "PASSWORD");
define("SQUID_BYOD_SESSION_DURATION", "01:00");

// set to FALSE if you don't want to use Profile Manager device records for transparent authentication
define("SQUID_PROFILE_MANAGER_ENABLED", true);

// Profile Manager database credentials (PostgreSQL)
define("SQUID_PM_DB_SERVER", "OSX001");
define("SQUID_PM_DB_PORT", "5432");
define("SQUID_PM_DB_NAME", "devicemgr_v2m0");    // device_management under OS X Server 2.0
define("SQUID_PM_DB_USERNAME", "squid");
define("SQUID_PM_DB_PASSWORD", "PASSWORD");

// where to log stuff and things
define("SQUID_LOG_FILE", "/var/log/squid3/external_acl.log");
define("SQUID_LOG_VERBOSE", true);

// ERR until Squid 3.4, BH on Squid 3.4+
define("SQUID_FAILURE_CODE", "ERR");

// timezone for this instance of Squid
define("SQUID_TIMEZONE", "Australia/Sydney");

?>