<?php

/* @var $this \yii\web\View 
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/favicon.ico">
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <header id="header" class="hidden-xs">
            <div class="container">
                <div class="page-header">
                    <div class="logo pull-left">
                        <div class="pull-left">
                            <!-- <a class="navbar-brand" href="<?= Yii::$app->request->baseUrl ?>"> --><a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">
                                <img src="<?= Yii::getAlias('@web') ?>/images/logo.png" />
                            </a>
                        </div>
                        <div class="brand">
                            ACM创新实验室
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <?php
        NavBar::begin([
            // 'brandLabel' => Yii::$app->setting->get('ojName'),
            'brandLabel' => '(๑′ᴗ‵๑) HomePage',
            // 'brandUrl' => Yii::$app->homeUrl,
            'brandUrl' => 'https://umxyz.com',
            'options' => [
                'class' => 'navbar-default',
            ],
        ]);
        $menuItems = [
            ['label' => '<span class="glyphicon glyphicon-knight"></span> ' . Yii::t('app', 'Contests'), 'url' => ['/contest/index']],
            ['label' => '<span class="glyphicon glyphicon-king"></span> ' . Yii::t('app', 'Rating'), 'url' => ['/rating/problem'], 'active' => Yii::$app->controller->id == 'rating'],
            ['label' => '<span class="glyphicon glyphicon-info-sign"></span> ' . Yii::t('app', 'Wiki'), 'url' => ['/wiki/index'], 'active' => Yii::$app->controller->id == 'wiki']
        ];
        if (Yii::$app->user->isGuest) {
            // $menuItems[] = ['label' => '<span class="glyphicon glyphicon-new-window"></span> ' . Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
            $menuItems[] = ['label' => '<span class="glyphicon glyphicon-log-in"></span> ' . Yii::t('app', '登录/注册'), 'url' => ['/site/login']];
        } else {
            if (Yii::$app->user->identity->isAdmin() || (Yii::$app->setting->get('mustVerifyEmail') && Yii::$app->user->identity->isVerifyEmail())) {
                $menuItems = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> ' . Yii::t('app', 'Home'), 'url' => ['/site/index']],
                    ['label' => '<span class="glyphicon glyphicon-list"></span> ' . Yii::t('app', 'Problems'), 'url' => ['/problem/index']],
                    ['label' => '<span class="glyphicon glyphicon-knight"></span> ' . Yii::t('app', 'Contests'), 'url' => ['/contest/index']],
                    ['label' => '<span class="glyphicon glyphicon-king"></span> ' . Yii::t('app', 'Rating'), 'url' => ['/rating/problem'], 'active' => Yii::$app->controller->id == 'rating'],
                    ['label' => '<span class="glyphicon glyphicon-signal"></span> ' . Yii::t('app', 'Status'), 'url' => ['/solution/index']]
                ];
                if (Yii::$app->user->identity->role == \app\models\User::ROLE_ADMIN) {
                    $menuItems[] = [
                        'label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::$app->user->identity->nickname,
                        'items' => [
                            ['label' => '<span class="glyphicon glyphicon-home"></span> ' . Yii::t('app', 'Profile'), 'url' => ['/user/view', 'id' => Yii::$app->user->id]],
                            ['label' => '<span class="glyphicon glyphicon-cog"></span> ' . Yii::t('app', 'Setting'), 'url' => ['/user/setting', 'action' => 'profile']],
                            ['label' => '<span class="glyphicon glyphicon-info-sign"></span> ' . Yii::t('app', 'Wiki'), 'url' => ['/wiki/index'], 'active' => Yii::$app->controller->id == 'wiki'],
                            // ['label' => '<span class="glyphicon glyphicon-comment"></span> ' . Yii::t('app', 'Clarification'), 'url' => ['/contest/clarify?id=1']],
                            ['label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::t('app', 'Group'), 'url' => Yii::$app->user->isGuest ? ['/group/index'] : ['/group/my-group']],
                            '<li class="divider"></li>',
                            ['label' => '<span class="glyphicon glyphicon-cog"></span> ' . Yii::t('app', 'Backend'), 'url' => ['/admin'], 'active' => Yii::$app->controller->module->id == 'admin'],
                            ['label' => '<span class="glyphicon glyphicon-log-out"></span> ' . Yii::t('app', 'Logout'), 'url' => ['/site/logout']],
                        ]
                    ];
                } else {
                    if (Yii::$app->user->identity->role == \app\models\User::ROLE_VIP) {
                        $menuItems[] = [
                            'label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::$app->user->identity->nickname,
                            'items' => [
                                ['label' => '<span class="glyphicon glyphicon-home"></span> ' . Yii::t('app', 'Profile'), 'url' => ['/user/view', 'id' => Yii::$app->user->id]],
                                ['label' => '<span class="glyphicon glyphicon-cog"></span> ' . Yii::t('app', 'Setting'), 'url' => ['/user/setting', 'action' => 'profile']],
                                ['label' => '<span class="glyphicon glyphicon-info-sign"></span> ' . Yii::t('app', 'Wiki'), 'url' => ['/wiki/index'], 'active' => Yii::$app->controller->id == 'wiki'],
                                // ['label' => '<span class="glyphicon glyphicon-comment"></span> ' . Yii::t('app', 'Clarification'), 'url' => ['/contest/clarify?id=1']],
                                ['label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::t('app', 'Group'), 'url' => Yii::$app->user->isGuest ? ['/group/index'] : ['/group/my-group']],
                                '<li class="divider"></li>',
                                ['label' => '<span class="glyphicon glyphicon-list"></span> ' . 'polygon', 'url' => ['/polygon'], 'active' => Yii::$app->user->identity->role == \app\models\User::ROLE_VIP],
                                ['label' => '<span class="glyphicon glyphicon-log-out"></span> ' . Yii::t('app', 'Logout'), 'url' => ['/site/logout']],
                            ]
                        ];
                    } else {
                        $menuItems[] =  [
                            'label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::$app->user->identity->nickname,
                            'items' => [
                                ['label' => '<span class="glyphicon glyphicon-home"></span> ' . Yii::t('app', 'Profile'), 'url' => ['/user/view', 'id' => Yii::$app->user->id]],
                                ['label' => '<span class="glyphicon glyphicon-cog"></span> ' . Yii::t('app', 'Setting'), 'url' => ['/user/setting', 'action' => 'profile']],
                                ['label' => '<span class="glyphicon glyphicon-info-sign"></span> ' . Yii::t('app', 'Wiki'), 'url' => ['/wiki/index'], 'active' => Yii::$app->controller->id == 'wiki'],
                                // ['label' => '<span class="glyphicon glyphicon-comment"></span> ' . Yii::t('app', 'Clarification'), 'url' => ['/contest/clarify?id=1']],
                                ['label' => '<span class="glyphicon glyphicon-user"></span> ' . Yii::t('app', 'Group'), 'url' => Yii::$app->user->isGuest ? ['/group/index'] : ['/group/my-group']],
                                '<li class="divider"></li>',
                                ['label' => '<span class="glyphicon glyphicon-log-out"></span> ' . Yii::t('app', 'Logout'), 'url' => ['/site/logout']],
                            ]
                        ];
                    }
                }
            } else {
                $menuItems[] = ['label' => '请先验证邮箱后点此退出后重新登录', 'url' => ['/site/logout']];
            }
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
            'encodeLabels' => false,
            'activateParents' => true
        ]);
        NavBar::end();
        ?>

        <?php
        if (!Yii::$app->user->isGuest && Yii::$app->setting->get('mustVerifyEmail') && !Yii::$app->user->identity->isVerifyEmail() && !Yii::$app->user->identity->isAdmin()) {
            $a = Html::a('个人设置', ['/user/setting', 'action' => 'account']);
            echo "<div class=\"container\"><p class=\"bg-danger\">请前往设置页面验证您的邮箱：{$a}</p></div>";
        }
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= Yii::$app->setting->get('ojName') ?> OJ <?= date('Y') ?></p>
            <p class="pull-right">
                <?= Html::a(' 中文简体 ', '?lang=zh-CN') . '| ' . Html::a(' English ', '?lang=en'); ?>
            </p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>