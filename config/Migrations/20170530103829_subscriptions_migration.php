<?php

use Phinx\Migration\AbstractMigration;

class SubscriptionsMigration extends AbstractMigration
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

   		$table = $this->table('subscriptions');
		$table->addColumn('plan', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('storage', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]); 
		$table->addColumn('project_limit', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);  
		 $table->addColumn('user_limit', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]); 
		 $table->addColumn('milestone_limit', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('free_trail_days', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		  $table->addColumn('price', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		  $table->addColumn('month', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		  $table->addColumn('is_active', 'integer', [
            'default' => null,
            'limit' => 2,
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
   		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('subscriptions');
    }
}
