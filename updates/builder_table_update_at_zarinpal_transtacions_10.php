<?php namespace ShayanKhaksar\Zarinpal\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtZarinpalTranstacions10 extends Migration
{
    public function up()
    {
        Schema::table('at_zarinpal_transtacions', function($table)
        {
            $table->boolean('is_expired')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('at_zarinpal_transtacions', function($table)
        {
            $table->dropColumn('is_expired');
        });
    }
}
