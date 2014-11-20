<?php
use yii\helpers\Url;

$this->title = Yii::t('category', 'Category \'{name}\'', ['name' => $model->name]);
$this->params['breadcrumbs'] = [
    [
        'label' => Yii::t('category', 'Category'),
        'url' => Url::toRoute('/category')
    ],
    $this->title
];

echo $this->render('_form', [
    'model' => $model,
    'translates' => $translates,
]);

?>