<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Proyectos de Extensión');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pextension-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pext',
            'denominacion',
            'uni_acad',
            'fec_desde',
            'fec_hasta',
            //'expediente',
            //'duracion',
            //'palabras_clave',
            //'objetivo',
            //'id_estado',
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
            //'fec_carga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>