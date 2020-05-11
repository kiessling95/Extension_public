<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */
/* @var $model app\models\Pextension */

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= \yii\helpers\Html::a('<img class="brand-image img-circle elevation-3" src="' . ($directoryAsset . '/img/AdminLTELogo.png') . '" alt="APP"><span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">

        <nav class="mt-2">
            <?= dmstr\adminlte\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                    'items' => [
                        ['label' => 'Menu', 'header' => true],
                        isset($this->params['menu']) ? $this->params['menu'] : [],
 
                        //['label' => 'Convocatorias', 'icon' => 'fas fa-folder-open', 'url' => ['/debug']],
                        //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'iconType' => 'far',
                                    'icon' => 'circle',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'iconType' => 'far', 'icon' => 'dot-circle', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'iconType' => 'far',
                                            'icon' => 'dot-circle',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ) ?>
        </nav>

    </div>

</aside>
