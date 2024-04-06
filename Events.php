<?php

namespace  humhub\humhub\modules\template;

use Yii;
use yii\helpers\Url;
use humhub\modules\ui\menu\MenuLink;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param Events $event
     */
    public static function onTopMenuInit($event)
    {
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => 'Template',
            'icon' => 'fa-exclamation-triangle',
            'url' => Url::to(['/template/index']),
            'sortOrder' => 99999,
            'isActive' => MenuLink::isActiveState('template'),
        ]));
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param Events $event
     */
    public static function onAdminMenuInit($event)
    {
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => 'Template',
            'url' => Url::to(['/template/admin']),
            'group' => 'manage',
            'icon' => 'fa-exclamation-triangle',
            'isActive' => MenuLink::isActiveState('template'),
            'sortOrder' => 99999,
        ]));
    }
}
