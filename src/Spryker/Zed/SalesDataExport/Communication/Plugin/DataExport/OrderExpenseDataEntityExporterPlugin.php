<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesDataExport\Communication\Plugin\DataExport;

use Generated\Shared\Transfer\DataExportConfigurationTransfer;
use Generated\Shared\Transfer\DataExportReportTransfer;
use Spryker\Zed\DataExportExtension\Dependency\Plugin\DataEntityExporterPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\SalesDataExport\Business\SalesDataExportFacade getFacade()
 * @method \Spryker\Zed\SalesDataExport\SalesDataExportConfig getConfig()
 * @method \Spryker\Zed\SalesDataExport\Communication\SalesDataExportCommunicationFactory getFactory()
 */
class OrderExpenseDataEntityExporterPlugin extends AbstractPlugin implements DataEntityExporterPluginInterface
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

        return $dataExportConfigurationTransfer->getDataEntity() === static::DATA_ENTITY &&
            $dataExportConfigurationTransfer->getFormat()->getType() === static::SUPPORTED_WRITER;
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
        return $this->getFacade()->exportOrderExpense($dataExportConfigurationTransfer);
    }
}