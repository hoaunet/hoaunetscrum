<?php

use Phinx\Migration\AbstractMigration;

class DailyupdateNotificationsMigration extends AbstractMigration
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
		$table = $this->table('dailyupdate_notifications');
		$table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('dly_update', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('notification_time', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('proj_name', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => true,
         ]);
		 $table->addColumn('mail_sent', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('modified', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('status', 'integer', [
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
        $this->dropTable('dailyupdate_notifications');
    }
}
