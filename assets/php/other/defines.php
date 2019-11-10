<?php
require_once("defs.php");
/**
 * Constants
 */
const WAIT_TIME = _WAIT_TIME;
const VERSION = _VERSION;
const SITE_TITLE = _SITE_TITLE;
const FORMAT_OF_DATE = _FORMAT_OF_DATE;
const TOKEN_TICKER = _TOKEN_TICKER;
const SUPPLY = _SUPPLY;

/**
 * Telegram params
 */
const ADMIN_TELEGRAM_CHAT_ID = _ADMIN_TELEGRAM_CHAT_ID;
const TELEGRAM_API_KEY = _TELEGRAM_API_KEY;
const ENABLED_TELEGRAM = _ENABLED_TELEGRAM;

/**
 * Other params
 */
const MIN_TX_AMOUNT = _MIN_TX_AMOUNT;
const SWAP_FACTOR = _SWAP_FACTOR;
const ENABLED_WITHDRAW = _ENABLED_WITHDRAW;


/**
 * Google ReCAPTCHA
 */
const ENABLE_CAPTCHA = _ENABLE_CAPTCHA;
const RECAPTCHA_SITE_KEY = _RECAPTCHA_SITE_KEY;
const RECAPTCHA_SECRET_KEY = _RECAPTCHA_SECRET_KEY;

/**
 * Database
 */
const DB_USER = _DB_USER;
const DB_NAME = _DB_NAME;
const DB_PASSWORD = _DB_PASSWORD;
const DB_HOST = _DB_HOST;
const DB_ENCRYPTION = _DB_ENCRYPTION;

/**
 * Encryption
 */
const ENCRYPTION_METHOD = _ENCRYPTION_METHOD;
const ENCRYPTION_RANDOM_KEY = _ENCRYPTION_RANDOM_KEY;
const ENCRYPTION_SALT = _ENCRYPTION_SALT; //only 32 or 64 or 128 symbols
const ENCRYPTION_IV = _ENCRYPTION_IV;
const ENCRYPTION_EXCEPTIONS = _ENCRYPTION_EXCEPTIONS;

/**
 * Mail
 */
const SMTP_HOST = _SMTP_HOST;
const NOREPLY_ADDRESS = _NOREPLY_ADDRESS;
const SMTP_PASSWORD = _SMTP_PASSWORD;

/**
 * Tables
 */
const LAST_TABLE = 'last';
const USERS_TABLE = 'users';
const LOGIN_HISTORY_TABLE = 'login_history';
const TRANSACTIONS_TABLE = 'transactions';
const WITHDRAWALS_TABLE = 'withdrawals';
?>

