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

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Имя пользователя',
        'password'         => 'Пароль',
        'site_name'        => 'Название сайта',
        'site_domain'      => 'Домен сайта',
        'site_timezone'    => 'Часовой пояс',
        'site_locale'      => 'Язык интерфейса',
        'enable_google2fa' => 'Включить двухфакторную аутентификацию Google',
        'cache_driver'     => 'Хранилище кеша',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Хранилище сессий',
        'mail_driver'      => 'Водитель почты',
        'mail_host'        => 'Почтовый хост',
        'mail_address'     => 'Почту с адреса',
        'mail_username'    => 'Имя пользователя электронной почты',
        'mail_password'    => 'Почтовый пароль',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Имя пользователя или Email',
        'email'         => 'Email',
        'password'      => 'Пароль',
        '2fauth'        => 'Код аутентификации',
        'invalid'       => 'Неверное имя пользователя или пароль',
        'invalid-token' => 'Неверный токен',
        'cookies'       => 'Необходимо включить cookies для входа.',
        'rate-limit'    => 'Превышено ограничение скорости.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Название',
        'status'             => 'Статус',
        'component'          => 'Компонент',
        'component_status'   => 'Статус компонента',
        'message'            => 'Сообщение',
        'message-help'       => 'Вы также можете использовать Markdown.',
        'occurred_at'        => 'Когда случился инцидент?',
        'notify_subscribers' => 'Уведомить подписчиков?',
        'notify_disabled'    => 'В связи с плановым обслуживанием уведомления об этом инциденте или его компонентах будут подавлены.',
        'visibility'         => 'Отображение инцидента',
        'stick_status'       => 'Пометить инцидент',
        'stickied'           => 'Помечен',
        'not_stickied'       => 'Не помечен',
        'public'             => 'Доступен публично',
        'logged_in_only'     => 'Показывать только авторизованным пользователям',
        'templates'          => [
            'name'     => 'Название',
            'template' => 'Шаблон',
            'twig'     => 'В шаблонах инцидентов можно использовать <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Название',
        'status'       => 'Статус',
        'message'      => 'Сообщение',
        'message-help' => 'Вы также можете использовать Markdown.',
        'scheduled_at' => 'Когда запланированы техработы?',
        'completed_at' => 'Когда закончатся техработы?',
        'templates'    => [
            'name'     => 'Название',
            'template' => 'Шаблон',
            'twig'     => 'В шаблонах инцидентов можно использовать <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Название',
        'status'      => 'Статус',
        'group'       => 'Группа',
        'description' => 'Описание',
        'link'        => 'Ссылка',
        'tags'        => 'Теги',
        'tags-help'   => 'Разделяйте запятыми.',
        'enabled'     => 'Компонент включен?',

        'groups' => [
            'name'                     => 'Название',
            'collapsing'               => 'Развернуть\Свернуть опции',
            'visible'                  => 'Всегда развернута',
            'collapsed'                => 'Свернута по умолчанию',
            'collapsed_incident'       => 'Свернута, но разворачивать, если есть проблема',
            'visibility'               => 'Видимость',
            'visibility_public'        => 'Отображать для всех',
            'visibility_authenticated' => 'Показывать только для авторизованных',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Название',
        'description'        => 'Описание',
        'start_at'           => 'Запланировать дату начала',
        'timezone'           => 'Таймзона',
        'schedule_frequency' => 'Частота запуска по расписанию (in seconds)',
        'completion_latency' => 'Задержка запуска (in seconds)',
        'group'              => 'Группа',
        'active'             => 'Активно?',
        'groups'             => [
            'name' => 'Название группы',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Название',
        'suffix'                   => 'Суффикс',
        'description'              => 'Описание',
        'description-help'         => 'Вы также можете использовать Markdown.',
        'display-chart'            => 'Отображать график на статусной странице?',
        'default-value'            => 'Значение по умолчанию',
        'calc_type'                => 'Расчет метрики',
        'type_sum'                 => 'Сумма',
        'type_avg'                 => 'Среднее значение',
        'places'                   => 'Количество цифр после точки',
        'default_view'             => 'Представление по умолчанию',
        'threshold'                => 'Количество минут между снятием метрик?',
        'visibility'               => 'Показывать?',
        'visibility_authenticated' => 'Видно авторизованным',
        'visibility_public'        => 'Видно всем',
        'visibility_hidden'        => 'Всегда скрыта',

        'points' => [
            'value' => 'Значение',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Название сайта',
            'site-url'                              => 'URL сайта',
            'display-graphs'                        => 'Отображать графики на статусной странице?',
            'about-this-page'                       => 'Об этой странице',
            'days-of-incidents'                     => 'За сколько дней показывать инциденты?',
            'time_before_refresh'                   => 'Частота обновления статусной страницы (in seconds)',
            'major_outage_rate'                     => 'Порог серьезного отключения (in %)',
            'banner'                                => 'Картинка-баннер',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Разрешить посетителям подписываться на email-уведомления?',
            'suppress_notifications_in_maintenance' => 'Подавлять уведомления при возникновении инцидента во время периода обслуживания?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Автоматически переводить вашу статусную страницу на язык посетителя?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Код Google Analytics',
            'analytics_gosquared'    => 'Код GoSquared Analytics',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'Идентификатор сайта в Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Часовой пояс сайта',
            'site-locale'          => 'Язык сайта',
            'date-format'          => 'Формат даты',
            'incident-date-format' => 'Формат даты и времени для инцидента',
        ],
        'security' => [
            'allowed-domains'           => 'Разрешённые домены',
            'allowed-domains-help'      => 'Разделяйте запятыми. Домен, установленный в настройках, разрешен по умолчанию.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Код пользовательских стилей (CSS)',
        ],
        'theme' => [
            'background-color'        => 'Цвет фона',
            'background-fills'        => 'Заливка фона (компоненты, инциденты, «подвал»)',
            'banner-background-color' => 'Цвет фона для баннера',
            'banner-padding'          => 'Отступы баннера',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Цвет текста',
            'dashboard-login'         => 'Отображать кнопку панели управления в «подвале»?',
            'reds'                    => 'Красный (для ошибок)',
            'blues'                   => 'Синий (для информации)',
            'greens'                  => 'Зеленый (для сообщений о выполнении)',
            'yellows'                 => 'Желтый (для тревожных сообщений)',
            'oranges'                 => 'Оранжевый (для предупреждений)',
            'metrics'                 => 'Заливка метрик',
            'links'                   => 'Ссылки',
        ],
    ],

    'user' => [
        'username'       => 'Имя пользователя',
        'email'          => 'Email',
        'password'       => 'Пароль',
        'api-token'      => 'API токен',
        'api-token-help' => 'Обновление вашего API токена заблокирует существующим приложениям доступ в Cachet. Вам будет необходимо прописать в них новый токен.',
        'gravatar'       => 'Изменить своё изображение на Gravatar.',
        'user_level'     => 'Тип пользователя',
        'levels'         => [
            'admin' => 'Администратор',
            'user'  => 'Пользователь',
        ],
        '2fa' => [
            'help' => 'Включение двухфакторной аутентификации увеличивает безопасность вашей учетной записи. Вам понадобится скачать <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> или аналогичное приложение на свой смартфон. Для входа в панель управления, вам понадобится код, выданный этим приложением.',
        ],
        'team' => [
            'description' => 'Пригласите своих коллег введя их адреса электронной почты.',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'Выберите таймзону',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => 'Добавить',
    'save'           => 'Сохранить',
    'update'         => 'Обновить',
    'create'         => 'Создать',
    'edit'           => 'Изменить',
    'delete'         => 'Удалить',
    'submit'         => 'Отправить',
    'cancel'         => 'Отменить',
    'remove'         => 'Удалить',
    'invite'         => 'Пригласить',
    'signup'         => 'Зарегистрироваться',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Необязательно',
];
