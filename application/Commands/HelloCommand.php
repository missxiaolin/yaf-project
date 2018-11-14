<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/11/14
 * Time: 3:50 PM
 */

namespace Application\Commands;

/**
 * Class HelloCommand
 * @package App\Commands
 */
class HelloCommand extends Command
{
    protected $name = 'hello';
    protected $description = '输出 Hello.';

    public function handle()
    {
        $this->info('Hello world!');
    }
}