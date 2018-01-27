<?php

namespace App\Tasks\Grafika;

use Grafika\Grafika;

class FilterTask extends MainTask
{

    public function sharpenAction()
    {
        $image = $this->root . 'star.jpeg';
        $target = $this->root . 'start.sharpen.jpeg';

        $editor = Grafika::createEditor();
        $editor->open($image1, $image); // 打开yanying.jpg并且存放到$image1
        $filter = Grafika::createFilter('Sharpen', 50);
        $editor->apply($image1, $filter);
        $editor->save($image1, $target);
    }

}

