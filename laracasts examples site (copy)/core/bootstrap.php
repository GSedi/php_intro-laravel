<?php

$app = [];

// $config = require 'config.php';
$app['config'] = require 'config.php';

/*exchanged by composer

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/Task.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/User.php';
*/

/*return new QueryBuilder(

    Connection::make($config['database'])

);*/
$app['database'] = new QueryBuilder(

    Connection::make($app['config']['database'])

);
 