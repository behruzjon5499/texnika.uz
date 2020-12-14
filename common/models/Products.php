<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $photo
 * @property string|null $phone
 * @property string|null $price
 * @property string|null $rangi
 * @property int|null $company_id
 * @property int|null $category_id
 * @property string|null $view
 * @property string|null $boshqaruv_turi
 * @property string|null $hajmi
 * @property string|null $address
 * @property string|null $country_id
 * @property string|null $person
 * @property string|null $description_ru
 * @property string|null $description_uz
 * @property string|null $description_en
 * @property string|null $dostavka_ru
 * @property string|null $dostavka_uz
 * @property string|null $dostavka_en
 * @property string|null $payme_ru
 * @property string|null $payme_uz
 * @property string|null $payme_en
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $facebook
 * @property int|null $status
 */
class Products extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'status','category_id'], 'integer'],
            [['description_ru', 'description_uz', 'description_en', 'dostavka_ru', 'dostavka_uz', 'dostavka_en', 'payme_ru', 'payme_uz', 'payme_en', 'telegram', 'instagram', 'facebook'], 'string'],
            [['title_ru', 'title_uz', 'title_en', 'photo', 'phone', 'price', 'rangi', 'view', 'boshqaruv_turi', 'hajmi', 'address', 'country_id', 'person'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, bmp']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'photo' => Yii::t('app', 'Photo'),
            'phone' => Yii::t('app', 'Phone'),
            'price' => Yii::t('app', 'Price'),
            'rangi' => Yii::t('app', 'Rangi'),
            'category_id' => Yii::t('app', 'Category ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'view' => Yii::t('app', 'View'),
            'boshqaruv_turi' => Yii::t('app', 'Boshqaruv Turi'),
            'hajmi' => Yii::t('app', 'Hajmi'),
            'address' => Yii::t('app', 'Address'),
            'country_id' => Yii::t('app', 'Country ID'),
            'person' => Yii::t('app', 'Person'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'dostavka_ru' => Yii::t('app', 'Dostavka Ru'),
            'dostavka_uz' => Yii::t('app', 'Dostavka Uz'),
            'dostavka_en' => Yii::t('app', 'Dostavka En'),
            'payme_ru' => Yii::t('app', 'Payme Ru'),
            'payme_uz' => Yii::t('app', 'Payme Uz'),
            'payme_en' => Yii::t('app', 'Payme En'),
            'telegram' => Yii::t('app', 'Telegram'),
            'instagram' => Yii::t('app', 'Instagram'),
            'facebook' => Yii::t('app', 'Facebook'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
    public function updateModel($new=false){

        $post = Yii::$app->request->post();

        if($this->load($post) ) {

            if( $new ){ // если создается только один раз при создании
                //$this->date = time();
            }
            if( !$this->save() ){
                Yii::$app->session->setFlash('info-error','Ошибка при сохранении!');
                print_r($this->getErrors());
                exit;

                return true;
            }



            Yii::$app->session->setFlash('info-success',' успешно сохранена!');

            return true;
        }
        return false;

    }
    public function upload()
    {
        if ($this->validate()) {
            $name = Yii::$app->security->generateRandomString(10) . '.' . $this->image->extension;

            if ($this->photo !== null && !empty($this->photo)) {
                unlink(Yii::getAlias('@frontend').'/web/uploads/products/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/products/' . $name);
            return true;
        } else {
            return false;
        }
    }
}
