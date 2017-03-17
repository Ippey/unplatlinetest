<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2017/02/28
 * Time: 15:31
 */

namespace Deployer;

set('ssh_type', 'native');

server('production', 'unplat.info')
    ->user('sumida')
    ->identityFileAndPassword()
    ->set('deploy_path', '/var/www/nginx/html/line/');

desc('upload');
task('upload', function() {
    upload('sample_webhook.php', '/var/www/nginx/html/line/sample_webhook.php');
});