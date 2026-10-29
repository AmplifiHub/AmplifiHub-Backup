<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$content = explode("\n", $content);

foreach ($content as $line) :
    echo '<p> ' . $line . "</p>\n";
endforeach;

?>

<style>
  table {
    border-collapse: collapse;
    width: 90%;
    margin-left: 5%;
  }

  td,
  th {
    border: 1px solid #ccc;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #ddd;
  }
</style>

<table>
    <tr>
        <th colspan="2">Track details</th>
    </tr>
    <?php foreach ($trackData as $field => $value): ?>
    <tr>
        <th><?= \Cake\Utility\Inflector::humanize($field) ?></th>
        <td><?= ($field === 'delivery_stores' && is_array($value)) ? $this->Text->toList($value) : $value ?></td>
    </tr>
    <?php endforeach; ?>
</table>
