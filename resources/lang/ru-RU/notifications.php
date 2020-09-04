<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Статус компонента обновлен',
                'greeting' => 'Статус компонента был обновлен!',
                'content'  => ':name статус изменился с :old_status на :new_status.',
                'action'   => 'Посмотреть',
            ],
            'slack' => [
                'title'   => 'Статус компонента обновлен',
                'content' => ':name статус изменился с :old_status на :new_status.',
            ],
            'sms' => [
                'content' => ':name статус изменился с :old_status на :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Обнаружен новый инцидент',
                'greeting' => 'Обнаружен новый инцидент в приложении :app_name.',
                'content'  => 'Обнаружен новый инцидент :name',
                'action'   => 'Посмотреть',
            ],
            'slack' => [
                'title'   => 'Обнаружен новый инциден :name',
                'content' => 'Обнаружен новый инцидент в приложении :app_name.',
            ],
            'sms' => [
                'content' => 'Обнаружен новый инцидент в приложении :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Инцидент обновлен',
                'content' => ':name обновлен',
                'title'   => ':name изменился статус на :new_status',
                'action'  => 'Посмотреть',
            ],
            'slack' => [
                'title'   => ':name обновлен',
                'content' => ':name изменился статус на :new_status',
            ],
            'sms' => [
                'content' => 'Инцидент :name статус обновлен',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Запланированы новые плановые техработы',
                'content' => ':name техработы запланированы на :date',
                'title'   => 'Новые плановые техработы запланированы.',
                'action'  => 'Посмотреть',
            ],
            'slack' => [
                'title'   => 'New Schedule Created!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Подтвердите вашу подписку',
                'content' => 'Кликните для подтверждения подписки на обновление статусов :app_name.',
                'title'   => 'Подтвердите вашу подписку на обновление статусов :app_name.',
                'action'  => 'Verify',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Управление подпиской',
                'content' => 'Кликните для управления вашей подпиской на обновление статусов :app_name.',
                'title'   => 'Кликните для управления вашей подпиской на обновление статусов :app_name.',
                'action'  => 'Изменить подписку',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping from Cachet!',
                'content' => 'This is a test notification from Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Вас приглашают присоединиться к статус сервису',
                'content' => 'Вас пригласили присоединиться к статус сервису :app_name.',
                'title'   => 'Вас пригласили присоединиться к статус сервису :app_name.',
                'action'  => 'Принять',
            ],
        ],
    ],
];
