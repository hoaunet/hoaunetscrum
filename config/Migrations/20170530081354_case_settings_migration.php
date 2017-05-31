<?php

use Phinx\Migration\AbstractMigration;

class CaseSettingsMigration extends AbstractMigration
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
		$table = $this->table('case_settings');
		$table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('project_uniqid', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);
		$table->addColumn('type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
        $table->addColumn('assign_to', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('priority', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('due_date', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('case_settings');
    }
}
