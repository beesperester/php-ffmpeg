<?php

namespace FFMpeg\Flag;

use FFMpeg\Coordinate\Timecode;

class CRF extends Flag
{
    /*
    * Crf
    *
    */
    public function __construct($quality = 20) {
        $this->quality = $quality;
    }

    /**
    * Apply Flag.
    *
    * @return Array
    */
    public function apply() {
        return ['-crf' => $this->quality];
    }
}
