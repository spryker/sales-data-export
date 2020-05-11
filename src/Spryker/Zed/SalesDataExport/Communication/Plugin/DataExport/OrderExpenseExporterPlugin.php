<?php

namespace Spryker\Zed\SalesDataExport\Communication\Plugin\DataExport;

use Generated\Shared\Transfer\DataExportConfigurationTransfer;
use Generated\Shared\Transfer\DataExportReportTransfer;
use Generated\Shared\Transfer\DataExportResultTransfer;
use Spryker\Zed\DataExportExtension\Dependency\Plugin\DataEntityExporterPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\SalesDataExport\Business\SalesDataExportFacade getFacade()
 * @method \Spryker\Zed\SalesDataExport\SalesDataExportConfig getConfig()
 */
class OrderExpenseExporterPlugin extends AbstractPlugin implements DataEntityExporterPluginInterface
{
    protected const DATA_ENTITY = 'order-expense';
    protected const SUPPORTED_WRITER = 'csv';

    /**
     * {@inheritDoc}
     * - TODO
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     *
     * @return bool
     */
    public function isApplicable(DataExportConfigurationTransfer $dataExportConfigurationTransfer): bool
    {
        $dataExportConfigurationTransfer->requireFormat();

        return  static::DATA_ENTITY === $dataExportConfigurationTransfer->getDataEntity() &&
            static::SUPPORTED_WRITER === $dataExportConfigurationTransfer->getFormat()->getType();
    }

    /**
     * {@inheritDoc}
     * - TODO
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataExportReportTransfer
     */
    public function export(DataExportConfigurationTransfer $dataExportConfigurationTransfer): DataExportReportTransfer
    {
        return $this->getFacade()->exportOrderExpenseBatch($dataExportConfigurationTransfer);
    }
}
