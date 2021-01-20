<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesDataExport\Business;

use Generated\Shared\Transfer\DataExportConfigurationTransfer;
use Generated\Shared\Transfer\DataExportReportTransfer;

interface SalesDataExportFacadeInterface
{
    /**
     * Specification:
     * - Exports orders according to configuration in `DataExportConfigurationTransfer`.
     * - Merges module level configuration with provided `DataExportConfigurationTransfer`.
     * - Returns results of export in `DataExportReportTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataExportReportTransfer
     */
    public function exportOrder(DataExportConfigurationTransfer $dataExportConfigurationTransfer): DataExportReportTransfer;

    /**
     * Specification:
     * - Exports order items according to configuration in `DataExportConfigurationTransfer`.
     * - Merges module level configuration with provided `DataExportConfigurationTransfer`.
     * - Returns results of export in `DataExportReportTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataExportReportTransfer
     */
    public function exportOrderItem(DataExportConfigurationTransfer $dataExportConfigurationTransfer): DataExportReportTransfer;

    /**
     * Specification:
     * - Exports order expenses according to configuration in `DataExportConfigurationTransfer`.
     * - Merges module level configuration with provided `DataExportConfigurationTransfer`.
     * - Returns results of export in `DataExportReportTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $dataExportConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataExportReportTransfer
     */
    public function exportOrderExpense(DataExportConfigurationTransfer $dataExportConfigurationTransfer): DataExportReportTransfer;
}
