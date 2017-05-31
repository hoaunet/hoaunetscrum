<?php

use Phinx\Migration\AbstractMigration;

class CaseUserViewsMigration extends AbstractMigration
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
		$table = $this->table('case_user_views');
		$table->addColumn('easycase_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
         $table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('istype', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		  $table->addColumn('isviewed', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('dt_created', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('case_user_views');
    }
}
