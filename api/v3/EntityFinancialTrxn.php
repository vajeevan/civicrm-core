<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.6                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2015                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 * This api exposes CiviCRM FinancialType.
 *
 * @package CiviCRM_APIv3
 */

/**
 * Save a Entity Financial Trxn.
 *
 * @param array $params
 *
 * @return array
 */
function civicrm_api3_entity_financial_trxn_create($params) {
  return _civicrm_api3_basic_create(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}

/**
 * Get a Entity Financial Trxn.
 *
 * @param array $params
 *
 * @return array
 *   Array of retrieved Entity Financial Trxn property values.
 */
function civicrm_api3_entity_financial_trxn_get($params) {
  return _civicrm_api3_basic_get(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}

/**
 * Delete a Entity Financial Trxn.
 *
 * @param array $params
 *
 * @return array
 *   Array of deleted values.
 */
function civicrm_api3_entity_financial_trxn_delete($params) {
  return _civicrm_api3_basic_delete(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}

/**
 * Adjust Metadata for Create action.
 *
 * The metadata is used for setting defaults, documentation & validation.
 *
 * @param array $params
 *   Array of parameters determined by getfields.
 */
function _civicrm_api3_entity_financial_trxn_create_spec(&$params) {
  $params['entity_table']['api.required'] = 1;
  $params['entity_id']['api.required'] = 1;
  $params['financial_trxn_id']['api.required'] = 1;
  $params['amount']['api.required'] = 1;
}
