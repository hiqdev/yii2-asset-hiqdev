<?php
/**
 * HiQDev asset files: images, configs and more
 *
 * @link      https://github.com/hiqdev/yii2-asset-hiqdev
 * @package   yii2-asset-hiqdev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

$supportEmail = 'support@hiqdev.com';

return [
    'favicon.ico'       => '@hiqdev/assets/hiqdev/assets/images/favicon.ico',

    'organization.name' => 'HiQDev',
    'organization.url'  => 'http://hiqdev.com/',

    'copyright.year'    => 2015,

    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/hipanel',
        'facebook'  => 'https://www.facebook.com/groups/230254030432488/',
    ],
];
