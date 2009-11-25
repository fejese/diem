<?php

require_once realpath(dirname(__FILE__).'/../../../config/ProjectConfiguration.class.php');

$config = array(
  'env'       => 'test',    // sf_environment
  'debug'     => true,      // use debug mode ( slower, more memory )
  'login'     => true,      // whether to log a user or not
  'username'  => 'admin',   // username to log in
  'validate'  => false      // html validation
);

$test = new dmAdminFunctionalCoverageTest($config);

$test->run();