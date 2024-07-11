<?php

namespace Drupal\home_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\IOFactory;
class HomePageController extends ControllerBase {
  public function content() {
    return [
      '#theme' => 'home_page_template',
    ];
  }

  public function getData() {
    $path = dirname(__DIR__, 2) . '/spisok.xls';
    $spreadsheet = IOFactory::load($path);
    $sheet = $spreadsheet->getSheet(2);

    $data = [];
    foreach ($sheet->getRowIterator() as $row) {
        $rowData = [];
        foreach ($row->getCellIterator() as $cell) {
            $rowData[] = $cell->getValue();
        }
        $data[] = $rowData;
    }

    return new JsonResponse($data);
  }

};
