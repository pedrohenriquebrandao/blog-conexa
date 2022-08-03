<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property string $post_id
 * @property string $data_post
 * @property string $texto
 * @property string $autor
 * @property string $titulo
 * @property string $categoria_id
 *
 * The followings are the available model relations:
 * @property Categorias $categoria
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_post, autor, titulo, categoria_id', 'required'),
			array('autor, titulo', 'length', 'max'=>191),
			array('categoria_id', 'length', 'max'=>10),
			array('texto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('post_id, data_post, texto, autor, titulo, categoria_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'categoria' => array(self::BELONGS_TO, 'Categorias', 'categoria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'post_id' => 'Post',
			'data_post' => 'Data Post',
			'texto' => 'Texto',
			'autor' => 'Autor',
			'titulo' => 'Titulo',
			'categoria_id' => 'Categoria',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('post_id',$this->post_id,true);
		$criteria->compare('data_post',$this->data_post,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('categoria_id',$this->categoria_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
