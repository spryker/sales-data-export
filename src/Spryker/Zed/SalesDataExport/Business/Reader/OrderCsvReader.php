<?php

namespace Spryker\Zed\SalesDataExport\Business\Reader;

use Generated\Shared\Transfer\DataExportConfigurationTransfer;
use Spryker\Zed\SalesDataExport\Persistence\SalesDataExportRepositoryInterface;

class OrderCsvReader extends AbstractCsvReader
{
    /**
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     * @param int $offset
     * @param int $limit
     *
     * @return string[][]
     */
    public function csvReadBatch(DataExportConfigurationTransfer $dataExportConfigurationTransfer, int $offset, int $limit): array
    {
        $ordersData = $this->salesDataExportRepository->getOrdersData($dataExportConfigurationTransfer, $offset, $limit);

        return $this->formatExportData($dataExportConfigurationTransfer->getFields(), $ordersData, $offset);
    }
}
