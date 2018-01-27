<?php

namespace App\Tasks\Grafika;

use Grafika\Grafika;

class ResizeTask extends MainTask
{

    public function fitAction()
    {
        $image = $this->root . 'star.jpeg';
        $target = $this->root . 'start.fit.jpeg';

        $editor = Grafika::createEditor();
        $editor->open($image1, $image); // 打开yanying.jpg并且存放到$image1
        $editor->resizeFit($image1, 200, 200);
        $editor->save($image1, $target);
    }

    public function exactAction()
    {
        $image = $this->root . 'star.jpeg';
        $target = $this->root . 'start.exact.jpeg';

        $editor = Grafika::createEditor();
        $editor->open($image1, $image); // 打开yanying.jpg并且存放到$image1
        $editor->resizeExact($image1, 200, 200);
        $editor->save($image1, $target);
    }

    public function fillAction()
    {
        $image = $this->root . 'star.jpeg';
        $target = $this->root . 'start.fill.jpeg';

        $editor = Grafika::createEditor();
        $editor->open($image1, $image); // 打开yanying.jpg并且存放到$image1
        $editor->resizeFill($image1, 200, 200);
        $editor->save($image1, $target);
    }

    public function cropAction()
    {
        $image = $this->root . 'star.jpeg';
        $target = $this->root . 'start.crop.jpeg';

        $editor = Grafika::createEditor();
        $editor->open($image1, $image); // 打开yanying.jpg并且存放到$image1
        $editor->crop($image1, 500, 500, 'smart');
        $editor->save($image1, $target);
    }

}

