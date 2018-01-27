<?php

namespace App\Tasks\Grafika;

use App\Tasks\Task;
use Xin\Cli\Color;

class MainTask extends Task
{
    public $root = ROOT_PATH . '/images/';

    public function mainAction()
    {
        echo Color::head('Help:') . PHP_EOL;
        echo Color::colorize('  Grafika扩展测试') . PHP_EOL . PHP_EOL;

        echo Color::head('Usage:') . PHP_EOL;
        echo Color::colorize('  php run grafika:[command]', Color::FG_LIGHT_GREEN) . PHP_EOL . PHP_EOL;

        echo Color::head('Commands:') . PHP_EOL;
        echo Color::colorize('  main@test           测试', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  resize@fit          等比例缩放', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  resize@exact        固定尺寸缩放', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  resize@fill         居中裁剪', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  resize@crop         智能裁剪', Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function testAction()
    {
        echo Color::colorize('Hello World', Color::FG_LIGHT_RED) . PHP_EOL;
    }

}

