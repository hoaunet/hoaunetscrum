<?php

use Phinx\Migration\AbstractMigration;

class UserSubscriptionsMigration extends AbstractMigration
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
    	$table = $this->table('user_subscriptions');
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
		 $table->addColumn('subscription_id', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('storage', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('project_limit', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('user_limit', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('milestone_limit', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('free_trail_days', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true,
         ]);
		  $table->addColumn('price', 'float', [
            'default' => null,
            'null' => true,
         ]);
		 $table->addColumn('month', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		  $table->addColumn('amt_due', 'float', [
            'default' => null,
            'null' => true,
         ]);
		  $table->addColumn('coupon_code', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		  $table->addColumn('btsubscription_id', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		  $table->addColumn('btprofile_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		$table->addColumn('creditcard_token', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('payment_status', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('discount', 'float', [
            'default' => null,
            'null' => true,
         ]);
		 $table->addColumn('is_cancel', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('is_sub_upgraded_bt', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('cancel_mail_flag', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('no_of_atmpt_upgrd', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('is_free', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('is_updown', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('sub_start_date', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('next_billing_date', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('cancel_date', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
     	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('user_subscriptions');
    }
}
