<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUserTable extends Migration
{
    /**
     * 运行迁移
     *
     * @return void
     */
    public function up()
    {

          Schema::create('sys_user', function (Blueprint $table) {
              $table->bigIncrements('user_id');
              $table->string('nick_name', 50);
              $table->char('weixin_openid', 100)->nullable();
              $table->string('image_head', 200);
              $table->timestamps();
          });
    }

    /**
     * 回滚迁移 || 删除一个已存在的数据表，可使用 drop 或 dropIfExists 方法
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_user');
    }
}
