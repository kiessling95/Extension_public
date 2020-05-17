<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PextensionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Proyectos de Extensión');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pextension-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a(Yii::t('app', 'Create Pextension'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_pext',
            [
                'attribute' => 'id_bases',
                'value' => utf8_encode( 'bases.bases_titulo')
            ],
            'id_estado',
       
            'fec_carga',
            'denominacion',
            'uni_acad',
            //'fec_desde',
            //'fec_hasta',
            //'expediente',
            //'duracion',
            //'palabras_clave',
            //'objetivo',
            //'financiacion:boolean',
            //'monto',
            //'descripcion_situacion',
            //'caracterizacion_poblacion',
            //'localizacion_geo',
            //'antecedente_participacion',
            //'importancia_necesidad',
            //'id_bases',
            //'responsable_carga',
            //'departamento',
            //'area',
            //'impacto',
            //'eje_tematico',
            //'ord_priori',
            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function($url, $model) {
                        return Html::a('<i class="fas fa-edit"></i>', $url, [
                                    'title' => Yii::t('app', 'update')
                        ]);
                    },
                    'view' => function($url, $model) {
                        return Html::a('<i class="fas fa-eye"></i>', $url, [
                                    'title' => Yii::t('app', 'view')
                        ]);
                    },
                    'delete' => function($url, $model) {
                        return Html::a('<i class="fas fa-trash"></i>', $url, [
                                    'title' => Yii::t('app', 'delete')
                        ]);
                    }
                ]
            ],
        ],
    ]);
    ?>


</div>
