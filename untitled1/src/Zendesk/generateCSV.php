<?php

namespace Zendesk;

class generateCSV
{
    function generate($body)
    {
        $filename = 'tickets.csv';

            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=' . $filename);
            header('Pragma: no-cache');
            header('Expires: 0');
            $fp = fopen('php://output', 'w');
            foreach ($body as $tickets) {
                fputcsv($fp, $tickets, ",");
            }
            fclose($fp);
    }
}