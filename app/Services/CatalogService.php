<?php

declare(strict_types=1);


namespace App\Services;


class CatalogService
{
    public function read(string $file)
    {
        if (trim($file) === "") {
            $data = [
                'error' => 'Некорректное имя файла'
            ];

            return response()
                ->json(
                    $data,
                    400,
                    ['Content-Type: application/json'],
                    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
                );
        }

        $extension = pathinfo(storage_path("/" . $file), PATHINFO_EXTENSION);

        if (trim($extension) !== 'csv') {
            $jsonData = ['Error file name' => 'Not correct extension: ' . trim($extension)];
        } else {
            $pathFile = storage_path('app/public') . "/" . $file;

            $data = array_map('str_getcsv', file($pathFile));

            if (empty($data)) {
                $jsonData = [];
            } else {
                $cols = $data[0][0];
                $columnNames = explode(';', $cols);

                $rows = [];
                foreach ($data as $key => $item) {
                    if ($key !== 0) {
                        $rows[] = $item;
                    }
                }

                $jsonData = [
                    'columns' => $columnNames,
                    'rows' => $rows
                ];
            }
        }

        return response()
            ->json(
                $jsonData,
                200,
                ['Content-Type: application/json'],
                JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
            );
    }

}
