<?php
$conf['master_version'] = 2;
$conf['master_modules'] = array(
  'base' => array(
    // Contributed modules
    'entity',
    'features',
    'libraries',
    'login_destination',
    'navbar',
    'restws',

    // Custom modules
    'anniemurray_config',
  ),
  'dev' => array(
    'dblog',
  ),
  'production' => array(

  ),
);

$conf['master_uninstall_blacklist'] = array(
  'base' => array(

  ),
  'dev' => array(

  ),
  'production' => array(

  ),
);

$conf['master_allow_base_scope'] = TRUE;