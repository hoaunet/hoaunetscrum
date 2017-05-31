<?php

use Phinx\Migration\AbstractMigration;

class DailyUpdatesMigration extends AbstractMigration
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
		$table = $this->table('daily_updates');
		$table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('post_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]); 
		$table->addColumn('user_id', 'text', [
            'default' => null,            
            'null' => true,
         ]); 
		$table->addColumn('timezone_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('notification_time', 'time', [
            'default' => null,            
            'null' => false,
         ]); 
		$table->addColumn('days', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]); 
		$table->addColumn('cron_email_date', 'date', [
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
        $this->dropTable('daily_updates');
    }
}
