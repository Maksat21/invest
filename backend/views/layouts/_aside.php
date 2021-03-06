<?php
use yii\helpers\Url;
use common\widgets\Sidebar;
?>
<aside class="main-sidebar">
    <a href="<?= Url::to(['/'])?>" class="mini-logo visible-xs">
        <span class="logo-lg">Admin</span>
    </a>
    <section class="sidebar">
        <?= Sidebar::widget(
            [
                'options' => ['class' => 'sidebar-menu', 'data-widget' => 'tree'],
                'linkTemplate' => '<a href="{url}">{icon} {label}</a>',
                'activeCssClass' => 'active',
                'items' => [
                    [
                        'label' => 'Меню',
                        'options' => [
                            'class' => 'header'
                        ],
                    ],
                    [
                        'label' => 'Главная',
                        'url' => ['/site/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Слайдер',
                        'url' => ['/slider/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Новости',
                        'url' => ['/news/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Заявки',
                        'url' => ['/feedback/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Статьи',
                        'url' => ['/materials/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Контакты',
                        'url' => ['/contacts/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Руководство компании',
                        'url' => ['/management/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Продукция',
                        'icon' => 'fa-link aria-hidden="true"',
                        'url' => '',
                        'items' => [
                            [
                                'label' => 'Продукция',
                                'url' => ['/product/index'],
                                'icon' => 'none',
                            ],
                            [
                                'label' => 'Виды тарирования',
                                'url' => ['/tared-type/index'],
                                'icon' => 'none',
                            ],
                        ]
                    ],
                    [
                        'label' => 'Закупки',
                        'url' => ['/purchase/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Вакансии',
                        'url' => ['/vacancies/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],
                    [
                        'label' => 'Изображения',
                        'url' => ['/images/index'],
                        'icon' => 'fa-link',
                        'void' => true,
                    ],

                    /*[
                        'label' => Yii::t('app', 'Matching'),
                        'icon' => 'fa-compress aria-hidden="true"',
                        'url' => '',
                        'items' => [
                            [
                                'label' => Yii::t('app', 'Medicament'),
                                'url' => ['/matching/index'],
                                'icon' => 'none',
                            ],
                        ]
                    ],*/
                ]
            ]
        );
        ?>
    </section>
    <div class="aside-footer-menu">
        <ul class="aside-footer-menu__list">
            <li class="aside-footer-menu__item">
                <a class="aside-footer-menu__link" href="<?= Url::to(['/site/about'])?>">
                    <i class="fa fa-copyright"></i>
                </a>
            </li>
            <li class="aside-footer-menu__item">
                <a class="aside-footer-menu__link" href="<?= Url::to(['/site/logout'])?>" data-method="post">
                    <i class="fa fa-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
</aside>