<?php

namespace App\Helpers;

use App\Models\Configuracao;

class FormatHelper
{
    static function dateTimeBr($data)
    {
        if ($data == '0000-00-00 00:00:00' or $data == null or $data == "")
            return '';

        $data_hora = explode(' ', $data);
        $data      = $data_hora[0];
        $hora      = $data_hora[1];
        $data      = explode('-', $data);
        $data      = $data[2].'/'.$data[1].'/'.$data[0];

        return $data. ' ' .$hora;
    }

    static function dateTimeUs($data)
    {
        if ($data == '00/00/0000 00:00:00' or $data == null or $data == "")
            return '';

        $data_hora = explode(' ', $data);
        $data      = $data_hora[0];
        $hora      = $data_hora[1];
        $data      = explode('/', $data);
        $data      = $data[2].'-'.$data[1].'-'.$data[0];

        return $data. ' ' .$hora;
    }
}