<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Constraint; class IsTrue extends \MailPoetVendor\Symfony\Component\Validator\Constraint { const NOT_TRUE_ERROR = '2beabf1c-54c0-4882-a928-05249b26e23b'; protected static $errorNames = [self::NOT_TRUE_ERROR => 'NOT_TRUE_ERROR']; public $message = 'This value should be true.'; } 