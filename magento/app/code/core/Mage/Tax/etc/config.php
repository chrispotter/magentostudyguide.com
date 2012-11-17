<?php
echo '<pre>';
echo '&lt;?xml version="1.0"?&gt;
&lt;!--
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Tax
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
--&gt;
&lt;config&gt;
    &lt;modules&gt;
        &lt;Mage_Tax&gt;
            &lt;version&gt;1.6.0.3&lt;/version&gt;
        &lt;/Mage_Tax&gt;
    &lt;/modules&gt;
    &lt;global&gt;
        &lt;models&gt;
            &lt;tax&gt;
                &lt;class&gt;Mage_Tax_Model&lt;/class&gt;
                &lt;resourceModel&gt;tax_resource&lt;/resourceModel&gt;
            &lt;/tax&gt;
            &lt;tax_resource&gt;
                &lt;class&gt;Mage_Tax_Model_Resource&lt;/class&gt;
                &lt;deprecatedNode&gt;tax_mysql4&lt;/deprecatedNode&gt;
                &lt;entities&gt;
                    &lt;tax_class&gt;
                        &lt;table&gt;tax_class&lt;/table&gt;
                    &lt;/tax_class&gt;
                    &lt;tax_calculation&gt;
                        &lt;table&gt;tax_calculation&lt;/table&gt;
                    &lt;/tax_calculation&gt;
                    &lt;tax_calculation_rate&gt;
                        &lt;table&gt;tax_calculation_rate&lt;/table&gt;
                    &lt;/tax_calculation_rate&gt;
                    &lt;tax_calculation_rate_title&gt;
                        &lt;table&gt;tax_calculation_rate_title&lt;/table&gt;
                    &lt;/tax_calculation_rate_title&gt;
                    &lt;tax_calculation_rule&gt;
                        &lt;table&gt;tax_calculation_rule&lt;/table&gt;
                    &lt;/tax_calculation_rule&gt;
                    &lt;tax_order_aggregated_created&gt;
                        &lt;table&gt;tax_order_aggregated_created&lt;/table&gt;
                    &lt;/tax_order_aggregated_created&gt;
                    &lt;tax_order_aggregated_updated&gt;
                        &lt;table&gt;tax_order_aggregated_updated&lt;/table&gt;
                    &lt;/tax_order_aggregated_updated&gt;
                    &lt;sales_order_tax&gt;
                        &lt;table&gt;sales_order_tax&lt;/table&gt;
                    &lt;/sales_order_tax&gt;
                    &lt;sales_order_tax_item&gt;
                        &lt;table&gt;sales_order_tax_item&lt;/table&gt;
                    &lt;/sales_order_tax_item&gt;
                &lt;/entities&gt;
            &lt;/tax_resource&gt;
        &lt;/models&gt;
        &lt;resources&gt;
            &lt;tax_setup&gt;
                &lt;setup&gt;
                    &lt;module&gt;Mage_Tax&lt;/module&gt;
                    &lt;class&gt;Mage_Tax_Model_Resource_Setup&lt;/class&gt;
                &lt;/setup&gt;
            &lt;/tax_setup&gt;
        &lt;/resources&gt;
        &lt;fieldsets&gt;
            &lt;sales_convert_quote_address&gt;
                &lt;subtotal_incl_tax&gt;
                    &lt;to_order&gt;*&lt;/to_order&gt;
                &lt;/subtotal_incl_tax&gt;
                &lt;base_subtotal_incl_tax&gt;
                    &lt;to_order&gt;*&lt;/to_order&gt;
                &lt;/base_subtotal_incl_tax&gt;
            &lt;/sales_convert_quote_address&gt;
            &lt;sales_convert_quote_item&gt;
                &lt;price_incl_tax&gt;
                    &lt;to_order_item&gt;*&lt;/to_order_item&gt;
                &lt;/price_incl_tax&gt;
                &lt;base_price_incl_tax&gt;
                    &lt;to_order_item&gt;*&lt;/to_order_item&gt;
                &lt;/base_price_incl_tax&gt;
                &lt;row_total_incl_tax&gt;
                    &lt;to_order_item&gt;*&lt;/to_order_item&gt;
                &lt;/row_total_incl_tax&gt;
                &lt;base_row_total_incl_tax&gt;
                    &lt;to_order_item&gt;*&lt;/to_order_item&gt;
                &lt;/base_row_total_incl_tax&gt;
            &lt;/sales_convert_quote_item&gt;
            &lt;sales_convert_order_item&gt;
                &lt;price_incl_tax&gt;
                    &lt;to_invoice_item&gt;*&lt;/to_invoice_item&gt;
                    &lt;to_shipment_item&gt;*&lt;/to_shipment_item&gt;
                    &lt;to_cm_item&gt;*&lt;/to_cm_item&gt;
                &lt;/price_incl_tax&gt;
                &lt;base_price_incl_tax&gt;
                    &lt;to_invoice_item&gt;*&lt;/to_invoice_item&gt;
                    &lt;to_shipment_item&gt;*&lt;/to_shipment_item&gt;
                    &lt;to_cm_item&gt;*&lt;/to_cm_item&gt;
                &lt;/base_price_incl_tax&gt;
            &lt;/sales_convert_order_item&gt;
        &lt;/fieldsets&gt;
        &lt;events&gt;
            &lt;sales_convert_quote_address_to_order&gt;
                &lt;observers&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/observer&lt;/class&gt;
                        &lt;method&gt;salesEventConvertQuoteAddressToOrder&lt;/method&gt;
                    &lt;/tax&gt;
                &lt;/observers&gt;
            &lt;/sales_convert_quote_address_to_order&gt;
            &lt;sales_order_save_after&gt;
                &lt;observers&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/observer&lt;/class&gt;
                        &lt;method&gt;salesEventOrderAfterSave&lt;/method&gt;
                    &lt;/tax&gt;
                &lt;/observers&gt;
            &lt;/sales_order_save_after&gt;
            &lt;catalog_prepare_price_select&gt;
                &lt;observers&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/observer&lt;/class&gt;
                        &lt;method&gt;prepareCatalogIndexPriceSelect&lt;/method&gt;
                    &lt;/tax&gt;
                &lt;/observers&gt;
            &lt;/catalog_prepare_price_select&gt;
            &lt;catalog_product_collection_load_after&gt;
                &lt;observers&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/observer&lt;/class&gt;
                        &lt;method&gt;addTaxPercentToProductCollection&lt;/method&gt;
                    &lt;/tax&gt;
                &lt;/observers&gt;
            &lt;/catalog_product_collection_load_after&gt;
            &lt;sales_quote_collect_totals_before&gt;
                &lt;observers&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/observer&lt;/class&gt;
                        &lt;method&gt;quoteCollectTotalsBefore&lt;/method&gt;
                    &lt;/tax&gt;
                &lt;/observers&gt;
            &lt;/sales_quote_collect_totals_before&gt;
        &lt;/events&gt;
        &lt;sales&gt;
            &lt;quote&gt;
                &lt;totals&gt;
                    &lt;tax_subtotal&gt;
                        &lt;class&gt;tax/sales_total_quote_subtotal&lt;/class&gt;
                        &lt;after&gt;freeshipping&lt;/after&gt;
                        &lt;before&gt;tax,discount&lt;/before&gt;
                    &lt;/tax_subtotal&gt;
                    &lt;tax_shipping&gt;
                        &lt;class&gt;tax/sales_total_quote_shipping&lt;/class&gt;
                        &lt;after&gt;shipping&lt;/after&gt;
                        &lt;before&gt;tax,discount&lt;/before&gt;
                    &lt;/tax_shipping&gt;
                    &lt;tax&gt;
                        &lt;class&gt;tax/sales_total_quote_tax&lt;/class&gt;
                        &lt;after&gt;subtotal,shipping&lt;/after&gt;
                        &lt;before&gt;grand_total&lt;/before&gt;
                        &lt;renderer&gt;tax/checkout_tax&lt;/renderer&gt;
                        &lt;admin_renderer&gt;adminhtml/sales_order_create_totals_tax&lt;/admin_renderer&gt;
                    &lt;/tax&gt;
                    &lt;subtotal&gt;
                        &lt;renderer&gt;tax/checkout_subtotal&lt;/renderer&gt;
                        &lt;admin_renderer&gt;adminhtml/sales_order_create_totals_subtotal&lt;/admin_renderer&gt;
                    &lt;/subtotal&gt;
                    &lt;shipping&gt;
                        &lt;renderer&gt;tax/checkout_shipping&lt;/renderer&gt;
                        &lt;admin_renderer&gt;adminhtml/sales_order_create_totals_shipping&lt;/admin_renderer&gt;
                    &lt;/shipping&gt;
                    &lt;discount&gt;
                        &lt;renderer&gt;tax/checkout_discount&lt;/renderer&gt;
                        &lt;admin_renderer&gt;adminhtml/sales_order_create_totals_discount&lt;/admin_renderer&gt;
                    &lt;/discount&gt;
                    &lt;grand_total&gt;
                        &lt;renderer&gt;tax/checkout_grandtotal&lt;/renderer&gt;
                        &lt;admin_renderer&gt;adminhtml/sales_order_create_totals_grandtotal&lt;/admin_renderer&gt;
                    &lt;/grand_total&gt;
                &lt;/totals&gt;
                &lt;nominal_totals&gt;
                    &lt;nominal_tax_subtotal&gt;
                        &lt;class&gt;tax/sales_total_quote_nominal_subtotal&lt;/class&gt;
                        &lt;sort_order&gt;500&lt;/sort_order&gt;
                    &lt;/nominal_tax_subtotal&gt;
                    &lt;nominal_tax&gt;
                        &lt;class&gt;tax/sales_total_quote_nominal_tax&lt;/class&gt;
                        &lt;sort_order&gt;750&lt;/sort_order&gt;
                    &lt;/nominal_tax&gt;
                &lt;/nominal_totals&gt;
            &lt;/quote&gt;
        &lt;/sales&gt;
        &lt;pdf&gt;
            &lt;totals&gt;
                &lt;subtotal&gt;
                    &lt;model&gt;tax/sales_pdf_subtotal&lt;/model&gt;
                &lt;/subtotal&gt;
                &lt;shipping&gt;
                    &lt;model&gt;tax/sales_pdf_shipping&lt;/model&gt;
                &lt;/shipping&gt;
                &lt;grand_total&gt;
                    &lt;model&gt;tax/sales_pdf_grandtotal&lt;/model&gt;
                &lt;/grand_total&gt;
                &lt;tax translate="title"&gt;
                    &lt;title&gt;Tax&lt;/title&gt;
                    &lt;source_field&gt;tax_amount&lt;/source_field&gt;
                    &lt;model&gt;tax/sales_pdf_tax&lt;/model&gt;
                    &lt;font_size&gt;7&lt;/font_size&gt;
                    &lt;display_zero&gt;0&lt;/display_zero&gt;
                    &lt;sort_order&gt;300&lt;/sort_order&gt;
                &lt;/tax&gt;
            &lt;/totals&gt;
        &lt;/pdf&gt;
    &lt;/global&gt;
    &lt;adminhtml&gt;
        &lt;translate&gt;
            &lt;modules&gt;
                &lt;Mage_Tax&gt;
                    &lt;files&gt;
                        &lt;default&gt;Mage_Tax.csv&lt;/default&gt;
                    &lt;/files&gt;
                &lt;/Mage_Tax&gt;
            &lt;/modules&gt;
        &lt;/translate&gt;
    &lt;/adminhtml&gt;
    &lt;frontend&gt;
        &lt;translate&gt;
            &lt;modules&gt;
                &lt;Mage_Tax&gt;
                    &lt;files&gt;
                        &lt;default&gt;Mage_Tax.csv&lt;/default&gt;
                    &lt;/files&gt;
                &lt;/Mage_Tax&gt;
            &lt;/modules&gt;
        &lt;/translate&gt;
    &lt;/frontend&gt;
    &lt;default&gt;
        &lt;tax&gt;
            &lt;classes&gt;
                &lt;shipping_tax_class/&gt;
            &lt;/classes&gt;
            &lt;calculation&gt;
                &lt;algorithm&gt;TOTAL_BASE_CALCULATION&lt;/algorithm&gt;
                &lt;apply_after_discount&gt;0&lt;/apply_after_discount&gt;
                &lt;discount_tax&gt;0&lt;/discount_tax&gt;
                &lt;based_on&gt;shipping&lt;/based_on&gt;
                &lt;price_includes_tax&gt;0&lt;/price_includes_tax&gt;
                &lt;shipping_includes_tax&gt;0&lt;/shipping_includes_tax&gt;
                &lt;discount_tax&gt;0&lt;/discount_tax&gt;
                &lt;apply_tax_on&gt;0&lt;/apply_tax_on&gt;
            &lt;/calculation&gt;
            &lt;defaults&gt;
                &lt;country&gt;US&lt;/country&gt;
                &lt;region&gt;0&lt;/region&gt;
                &lt;postcode&gt;*&lt;/postcode&gt;
            &lt;/defaults&gt;
            &lt;display&gt;
                &lt;type&gt;1&lt;/type&gt;
                &lt;shipping&gt;1&lt;/shipping&gt;
            &lt;/display&gt;
            &lt;cart_display&gt;
                &lt;price&gt;1&lt;/price&gt;
                &lt;subtotal&gt;1&lt;/subtotal&gt;
                &lt;shipping&gt;1&lt;/shipping&gt;
                &lt;discount&gt;1&lt;/discount&gt;
                &lt;grandtotal&gt;0&lt;/grandtotal&gt;
                &lt;full_summary&gt;0&lt;/full_summary&gt;
                &lt;zero_tax&gt;0&lt;/zero_tax&gt;
            &lt;/cart_display&gt;
            &lt;sales_display&gt;
                &lt;price&gt;1&lt;/price&gt;
                &lt;subtotal&gt;1&lt;/subtotal&gt;
                &lt;shipping&gt;1&lt;/shipping&gt;
                &lt;discount&gt;1&lt;/discount&gt;
                &lt;grandtotal&gt;0&lt;/grandtotal&gt;
                &lt;full_summary&gt;0&lt;/full_summary&gt;
                &lt;zero_tax&gt;0&lt;/zero_tax&gt;
            &lt;/sales_display&gt;
        &lt;/tax&gt;
    &lt;/default&gt;
    &lt;crontab&gt;
        &lt;jobs&gt;
            &lt;aggregate_sales_report_tax_data&gt;
                &lt;schedule&gt;
                    &lt;cron_expr&gt;0 0 * * *&lt;/cron_expr&gt;
                &lt;/schedule&gt;
                &lt;run&gt;
                    &lt;model&gt;tax/observer::aggregateSalesReportTaxData&lt;/model&gt;
                &lt;/run&gt;
            &lt;/aggregate_sales_report_tax_data&gt;
        &lt;/jobs&gt;
    &lt;/crontab&gt;
&lt;/config&gt;';
echo '</pre>';