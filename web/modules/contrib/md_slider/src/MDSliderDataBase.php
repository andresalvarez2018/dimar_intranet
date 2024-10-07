<?php

/**
 * @file
 * Contains \Drupal\md_slider\MDSliderDataBase.
 */

namespace Drupal\md_slider;
use Drupal\Core\Database\Database;
use Drupal\Core\Database\Connection;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Messenger;
class MDSliderDataBase {

  /**
   * @param $table
   * @param $field
   * @return \Drupal\Core\Database\StatementInterface|int|null
   */
  public static function insert($table, $field) {

    $return_value = NULL;
    try {
      /*$return_value = db_insert($table)
        ->fields($field)
        ->execute();
		*/
	  //$connection = \Drupal\Core\Database\Database::getConnection();
	  $connection = \Drupal::database();
	  $return_value = $connection->insert($table)->fields($field)->execute();
    }
    catch (\Exception $e) {
      /*drupal_set_message(t('db_insert failed. Message = %message, query= %query', array(
        '%message' => $e->getMessage(),
        '%query' => $e->query_string,
      )), 'error');
	  */
	  \Drupal::messenger()->addMessage(t('Insert failed. Message = %message, query= %query', array(
        '%message' => $e->getMessage(),
        '%query' => $e->query_string,
      )),MessengerInterface::TYPE_ERROR);
    }
    return $return_value;
  }

  public static function update($table, $fields, $conditions) {
    try {
      /*
	  $count = db_update($table)
        ->fields($fields);
		*/
      //$connection = \Drupal\Core\Database\Database::getConnection();
	  $connection = \Drupal::database();
	  $count = $connection->update($table)->fields($fields);
      foreach ($conditions as $field => $value) {
        $count->condition($field, $value);
      }
      $count->execute();
    }
    catch (\Exception $e) {
      /*drupal_set_message(t('db_update failed. Message = %message, query= %query', array(
        '%message' => $e->getMessage(),
        '%query' => $e->query_string,
      )), 'error');*/
	  \Drupal::messenger()->addMessage(t('Update failed. Message = %message, query= %query', array(
        '%message' => $e->getMessage(),
        '%query' => $e->query_string,
      )),MessengerInterface::TYPE_ERROR);
    }
    return $count;
  }
  /**
   * @param $table
   * @param array $entry
   */
  public static function load($table, $entry = array()) {
    //$select = db_select($table, 'table_alias');
	//$database = \Drupal::database();
	//$connection = \Drupal\Core\Database\Database::getConnection();
	$connection = \Drupal::database();
	$select =  $connection->select($table, 'table_alias')->fields('table_alias');
	//$select =  $select->fields('table_alias');
    foreach ($entry as $field => $value) {
      $select->condition($field, $value);
    }
    return $select->execute()->fetchAssoc();
  }

  /**
   * @param $table
   * @param array $entry
   * @param null $sort
   * @return
   */
  public static function loadAll($table, $entry = array(), $sort = array()) {
    //$select = db_select($table, 'table_alias');
	//$select->fields('table_alias');
	
	//$connection = \Drupal\Core\Database\Database::getConnection();
	$connection = \Drupal::database();
	$select = $connection->select($table,'table_alias')->fields('table_alias');
    if (count($entry) > 0) {
      foreach ($entry as $field => $value) {
        $select->condition($field, $value);
      }
    }
    if (count($sort) > 0) {
      foreach ($sort as $field => $value) {
        $select->orderBy($field, $value);
      }
    }

    return $select->execute()->fetchAll();
  }

  public static function delete($table, $entry = array()) {
    //$delete = db_delete($table);
	//$connection = \Drupal\Core\Database\Database::getConnection();
	$connection = \Drupal::database();
	$delete = $connection->delete($table);
    if (count($entry) > 0) {
      foreach ($entry as $field => $value) {
        $delete->condition($field, $value);
      }
    }
    return $delete->execute();
  }
}