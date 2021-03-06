<?php

namespace Beesperester\FFMpeg;

use Beesperester\FFMpeg\Driver\FFProbeDriver;
use Beesperester\Fileresource\Fileresource;

class FFProbe {
    /**
    * Create a new FFMpeg Video instance.
    *
    * @return Video
    */
    public static function video(Fileresource $fileresource) {
        return FFProbeDriver::create($fileresource);
    }
}
