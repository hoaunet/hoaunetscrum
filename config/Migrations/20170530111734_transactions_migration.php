<?php

use Phinx\Migration\AbstractMigration;

class TransactionsMigration extends AbstractMigration
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
		$table = $this->table('transactions'); 
        $table->addColumn('btsubscription_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
         ]);
		 $table->addColumn('transaction_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
         ]);
		 $table->addColumn('plan_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('status', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
         ]);
		 $table->addColumn('subscription_price', 'float', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('amt', 'float', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('discount', 'float', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('addon', 'float', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('transaction_type', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
         ]);
         $table->addColumn('invoice_mail_flag', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('invoice_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
         ]);
		 $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
		 $table->addColumn('ip', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
         ]);
		 $table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->create();
    }
	 public function down()
    {
        $this->dropTable('transactions');
    }
}
