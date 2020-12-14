<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m201208_114054_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'phone' => $this->string(),
            'price' => $this->string(),
            'rangi' => $this->string(),
            'company_id' => $this->integer(),
            'category_id' => $this->integer(),
            'view' => $this->string(),
            'boshqaruv_turi' => $this->string(),
            'hajmi' => $this->string(),
            'address' => $this->string(),
            'country_id' => $this->string(),
            'person' => $this->string(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
            'dostavka_ru' => $this->text(),
            'dostavka_uz' => $this->text(),
            'dostavka_en' => $this->text(),
            'payme_ru' => $this->text(),
            'payme_uz' => $this->text(),
            'payme_en' => $this->text(),
            'telegram' => $this->string(),
            'instagram' => $this->string(),
            'facebook' => $this->string(),
            'status' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
