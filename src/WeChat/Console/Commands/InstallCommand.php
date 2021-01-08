<?php


use Illuminate\Support\Facades\Cache;

class InstallCommand extends \Illuminate\Console\Command
{
    /**
     * 控制台命令的名称和签名。
     *
     * @var string
     */
    protected $signature = 'wechat:install';

    /**
     * 控制台命令的描述。
     *
     * @var string
     */
    protected $description = '这是一个测试的wechat组件的目录';

    /**
     * 创建一个新的命令实例。
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 执行console命令。
     *
     * @return int
     */
    public function handle()
    {
        $this->call('migrate');
        $this->call('vendor:publish', [
            '--provider' => 'Test\WeChat\Providers\WechatServiceProvider'
        ]);
    }
}