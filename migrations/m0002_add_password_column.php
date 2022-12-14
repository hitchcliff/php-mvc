<?php
use app\core\Application;

class m0002_add_password_column
{
  public function up()
  {
    $db = Application::$app->db;
    $sql = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;";

    $db->pdo->exec($sql);

    echo 'Applying migrations' . PHP_EOL;
  }
  public function down()
  {
    $db = Application::$app->db;
    $sql = "ALTER TABLE users DROP COLUMN password;";

    $db->pdo->exec($sql);
    echo 'Down migration' . PHP_EOL;
  }
}