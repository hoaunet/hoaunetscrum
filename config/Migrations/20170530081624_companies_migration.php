<?php

use Phinx\Migration\AbstractMigration;

class CompaniesMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
		$table = $this->table('companies');
		$table->addColumn('uniq_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
         ])->addIndex(['uniq_id']);
		 $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);
		 $table->addColumn('seo_url', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);
		 $table->addColumn('subscription_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
         ]);
		 $table->addColumn('logo', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('website', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('contact_phone', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
		 $table->addColumn('modified', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('is_beta', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('is_active', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('is_deactivated', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		  $table->addColumn('twitted', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
   		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('companies');
    }
}
