<?php


class Util {
    public static function formataData($dataComentario) {
        $diffs = [
            'anos' => 'y',
            'meses' => 'm',
            'dias' => 'd',
            'horas' => 'h',
            'minutos' => 'i',
            'segundos' => 's'
        ];

        $bahia = new DateTimeZone('America/Bahia');
        $utc = new DateTimeZone('UTC');

        $comentario = new DateTime($dataComentario, $bahia);
        $now = new DateTime('', $bahia);

        $comentario->setTimezone($utc);
        $now->setTimezone($utc);
        
        $resultado = $comentario->diff($now);

        $diffArr = [];

        foreach ($diffs as $k => $v) {
            $d = $resultado->format('%' . $v);
            if ($d > 0) {
                $diffArr[] = $d . ' ' . $k;
            }
        }

        $diffStr = implode(' | ', $diffArr);

        return ($diffStr == '' ? '0' : $diffStr) . PHP_EOL;
    }
}
