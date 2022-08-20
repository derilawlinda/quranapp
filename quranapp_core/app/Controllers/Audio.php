<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Audio extends BaseController
{
    
    public function play($reciter_id,$surah,$ayah)
    {
        $surah = sprintf('%03d', $surah);
        $ayah = sprintf('%03d', $ayah);
        if(($audio = file_get_contents(WRITEPATH.'audio/'.$reciter_id.'/'.$surah.$ayah.'.mp3')) === FALSE)
            show_404();

        // choose the right mime type
        $mimeType = 'audio/mpeg';

        $this->response
            ->setStatusCode(200)
            ->setContentType($mimeType)
            ->setBody($audio)
            ->send();
    }
}
