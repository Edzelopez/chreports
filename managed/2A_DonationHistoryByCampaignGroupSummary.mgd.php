<?php
return array(
  array(
    'module' => 'biz.jmaconsulting.chreports',
    'name' => 'Contribution History by Campaign Group (Summary)',
    'update' => 'always',
    'entity' => 'ReportInstance',
    'params' => array(
      'version' => 3,
      'report_id' => 'biz.jmaconsulting.chreports/extendsummary',
      'name' => 'Contribution History by Campaign Group (Summary)',
      'title' => ts('Contribution History by Campaign (Summary)'),
      "description" => "Overview of contributions by Campaign Group",
      'permission' => 'access CiviReport',
      'is_active' => 1,
      "form_values" => "a:81:{s:8:\"entryURL\";s:98:\"https://test2-dms.canadahelps.org/civicrm/report/biz.jmaconsulting.chreports/extendsummary?reset=1\";s:6:\"fields\";a:2:{s:12:\"total_amount\";s:1:\"1\";s:11:\"campaign_id\";s:1:\"1\";}s:21:\"receive_date_relative\";s:0:\"\";s:17:\"receive_date_from\";s:0:\"\";s:15:\"receive_date_to\";s:0:\"\";s:25:\"contribution_status_id_op\";s:2:\"in\";s:28:\"contribution_status_id_value\";a:1:{i:0;s:1:\"1\";}s:23:\"contribution_page_id_op\";s:2:\"in\";s:26:\"contribution_page_id_value\";a:0:{}s:20:\"financial_type_id_op\";s:2:\"in\";s:23:\"financial_type_id_value\";a:0:{}s:16:\"total_amount_min\";s:0:\"\";s:16:\"total_amount_max\";s:0:\"\";s:15:\"total_amount_op\";s:3:\"lte\";s:18:\"total_amount_value\";s:0:\"\";s:25:\"non_deductible_amount_min\";s:0:\"\";s:25:\"non_deductible_amount_max\";s:0:\"\";s:24:\"non_deductible_amount_op\";s:3:\"lte\";s:27:\"non_deductible_amount_value\";s:0:\"\";s:13:\"total_sum_min\";s:0:\"\";s:13:\"total_sum_max\";s:0:\"\";s:12:\"total_sum_op\";s:3:\"lte\";s:15:\"total_sum_value\";s:0:\"\";s:15:\"total_count_min\";s:0:\"\";s:15:\"total_count_max\";s:0:\"\";s:14:\"total_count_op\";s:3:\"lte\";s:17:\"total_count_value\";s:0:\"\";s:13:\"total_avg_min\";s:0:\"\";s:13:\"total_avg_max\";s:0:\"\";s:12:\"total_avg_op\";s:3:\"lte\";s:15:\"total_avg_value\";s:0:\"\";s:14:\"campaign_id_op\";s:2:\"in\";s:17:\"campaign_id_value\";a:0:{}s:22:\"contribution_source_op\";s:2:\"in\";s:25:\"contribution_source_value\";a:0:{}s:24:\"payment_instrument_id_op\";s:2:\"in\";s:27:\"payment_instrument_id_value\";a:0:{}s:16:\"campaign_type_op\";s:2:\"in\";s:19:\"campaign_type_value\";a:0:{}s:20:\"financial_account_op\";s:2:\"in\";s:23:\"financial_account_value\";a:0:{}s:13:\"is_deleted_op\";s:2:\"eq\";s:16:\"is_deleted_value\";s:1:\"0\";s:12:\"custom_13_op\";s:3:\"has\";s:15:\"custom_13_value\";s:0:\"\";s:15:\"card_type_id_op\";s:2:\"in\";s:18:\"card_type_id_value\";a:0:{}s:11:\"batch_id_op\";s:2:\"in\";s:14:\"batch_id_value\";a:0:{}s:8:\"tagid_op\";s:2:\"in\";s:11:\"tagid_value\";a:0:{}s:6:\"gid_op\";s:2:\"in\";s:9:\"gid_value\";a:0:{}s:12:\"custom_24_op\";s:2:\"eq\";s:15:\"custom_24_value\";s:0:\"\";s:12:\"custom_36_op\";s:3:\"has\";s:15:\"custom_36_value\";s:0:\"\";s:12:\"custom_37_op\";s:3:\"has\";s:15:\"custom_37_value\";s:0:\"\";s:13:\"custom_38_min\";s:0:\"\";s:13:\"custom_38_max\";s:0:\"\";s:12:\"custom_38_op\";s:3:\"lte\";s:15:\"custom_38_value\";s:0:\"\";s:12:\"custom_45_op\";s:3:\"has\";s:15:\"custom_45_value\";s:0:\"\";s:9:\"group_bys\";a:1:{s:11:\"campaign_id\";s:1:\"1\";}s:14:\"group_bys_freq\";a:1:{s:12:\"receive_date\";s:5:\"MONTH\";}s:9:\"order_bys\";a:1:{i:1;a:2:{s:6:\"column\";s:11:\"campaign_id\";s:5:\"order\";s:3:\"ASC\";}}s:11:\"description\";s:43:\"Overview of contributions by Campaign Group\";s:13:\"email_subject\";s:0:\"\";s:8:\"email_to\";s:0:\"\";s:8:\"email_cc\";s:0:\"\";s:9:\"row_count\";s:0:\"\";s:9:\"view_mode\";s:8:\"criteria\";s:13:\"cache_minutes\";s:2:\"60\";s:10:\"permission\";s:17:\"access CiviReport\";s:9:\"parent_id\";s:0:\"\";s:12:\"drilldown_id\";s:0:\"\";s:8:\"radio_ts\";s:0:\"\";s:6:\"groups\";s:0:\"\";s:11:\"instance_id\";s:1:\"5\";}",
      'is_reserved' =>  0,
    ),
  ),
);
