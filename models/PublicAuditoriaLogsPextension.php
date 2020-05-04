<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public_auditoria.logs_pextension".
 *
 * @property string|null $auditoria_usuario
 * @property string|null $auditoria_fecha
 * @property string|null $auditoria_operacion
 * @property int|null $auditoria_id_solicitud
 * @property int|null $id_pext
 * @property string|null $denominacion
 * @property string|null $uni_acad
 * @property string|null $fec_desde
 * @property string|null $fec_hasta
 * @property string|null $expediente
 * @property int|null $duracion
 * @property string|null $palabras_clave
 * @property string|null $objetivo
 * @property string|null $id_estado
 * @property bool|null $financiacion
 * @property float|null $monto
 * @property string|null $descripcion_situacion
 * @property string|null $caracterizacion_poblacion
 * @property string|null $localizacion_geo
 * @property string|null $antecedente_participacion
 * @property string|null $importancia_necesidad
 * @property int|null $id_bases
 * @property string|null $responsable_carga
 * @property string|null $departamento
 * @property string|null $area
 * @property string|null $impacto
 * @property int|null $eje_tematico
 * @property int|null $ord_priori
 * @property string|null $fec_carga
 */
class PublicAuditoriaLogsPextension extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public_auditoria.logs_pextension';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auditoria_fecha', 'fec_desde', 'fec_hasta', 'fec_carga'], 'safe'],
            [['auditoria_id_solicitud', 'id_pext', 'duracion', 'id_bases', 'eje_tematico', 'ord_priori'], 'default', 'value' => null],
            [['auditoria_id_solicitud', 'id_pext', 'duracion', 'id_bases', 'eje_tematico', 'ord_priori'], 'integer'],
            [['denominacion', 'objetivo', 'departamento', 'area', 'impacto'], 'string'],
            [['financiacion'], 'boolean'],
            [['monto'], 'number'],
            [['auditoria_usuario'], 'string', 'max' => 60],
            [['auditoria_operacion'], 'string', 'max' => 1],
            [['uni_acad'], 'string', 'max' => 5],
            [['expediente'], 'string', 'max' => 12],
            [['palabras_clave'], 'string', 'max' => 250],
            [['id_estado'], 'string', 'max' => 4],
            [['descripcion_situacion'], 'string', 'max' => 6500],
            [['caracterizacion_poblacion', 'importancia_necesidad'], 'string', 'max' => 500],
            [['localizacion_geo', 'antecedente_participacion'], 'string', 'max' => 200],
            [['responsable_carga'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'auditoria_usuario' => Yii::t('app', 'Auditoria Usuario'),
            'auditoria_fecha' => Yii::t('app', 'Auditoria Fecha'),
            'auditoria_operacion' => Yii::t('app', 'Auditoria Operacion'),
            'auditoria_id_solicitud' => Yii::t('app', 'Auditoria Id Solicitud'),
            'id_pext' => Yii::t('app', 'Id Pext'),
            'denominacion' => Yii::t('app', 'Denominacion'),
            'uni_acad' => Yii::t('app', 'Uni Acad'),
            'fec_desde' => Yii::t('app', 'Fec Desde'),
            'fec_hasta' => Yii::t('app', 'Fec Hasta'),
            'expediente' => Yii::t('app', 'Expediente'),
            'duracion' => Yii::t('app', 'Duracion'),
            'palabras_clave' => Yii::t('app', 'Palabras Clave'),
            'objetivo' => Yii::t('app', 'Objetivo'),
            'id_estado' => Yii::t('app', 'Id Estado'),
            'financiacion' => Yii::t('app', 'Financiacion'),
            'monto' => Yii::t('app', 'Monto'),
            'descripcion_situacion' => Yii::t('app', 'Descripcion Situacion'),
            'caracterizacion_poblacion' => Yii::t('app', 'Caracterizacion Poblacion'),
            'localizacion_geo' => Yii::t('app', 'Localizacion Geo'),
            'antecedente_participacion' => Yii::t('app', 'Antecedente Participacion'),
            'importancia_necesidad' => Yii::t('app', 'Importancia Necesidad'),
            'id_bases' => Yii::t('app', 'Id Bases'),
            'responsable_carga' => Yii::t('app', 'Responsable Carga'),
            'departamento' => Yii::t('app', 'Departamento'),
            'area' => Yii::t('app', 'Area'),
            'impacto' => Yii::t('app', 'Impacto'),
            'eje_tematico' => Yii::t('app', 'Eje Tematico'),
            'ord_priori' => Yii::t('app', 'Ord Priori'),
            'fec_carga' => Yii::t('app', 'Fec Carga'),
        ];
    }
}
