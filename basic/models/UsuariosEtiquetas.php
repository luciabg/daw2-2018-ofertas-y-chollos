<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%usuarios_etiquetas}}".
 *
 * @property string $id
 * @property string $usuario_id Usuario relacionado.
 * @property string $etiqueta_id Etiqueta relacionada.
 * @property string $fecha_seguimiento Fecha y Hora de activación del seguimiento de la etiqueta por parte del usuario.
 */
class UsuariosEtiquetas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usuarios_etiquetas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'etiqueta_id', 'fecha_seguimiento'], 'required'],
            [['usuario_id', 'etiqueta_id'], 'integer'],
            [['fecha_seguimiento'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'usuario_id' => Yii::t('app', 'Usuario relacionado.'),
            'etiqueta_id' => Yii::t('app', 'Etiqueta relacionada.'),
            'fecha_seguimiento' => Yii::t('app', 'Fecha y Hora de activación del seguimiento de la etiqueta por parte del usuario.'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuariosEtiquetasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosEtiquetasQuery(get_called_class());
    }
}
