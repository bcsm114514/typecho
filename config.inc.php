/** 定义数据库参数 */
$dbHost = getenv('DB_HOST');
$dbPort = getenv('DB_PORT') ?: '3306'; // 默认端口
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

if ($dbHost && $dbUser && $dbPassword && $dbName) {
    $db = new Typecho_Db('Pdo_Mysql', 'typecho_');
    $db->addServer([
        'host'     => $dbHost,
        'port'     => $dbPort,
        'user'     => $dbUser,
        'password' => $dbPassword,
        'database' => $dbName,
        'charset'  => 'utf8mb4',
    ], Typecho_Db::READ | Typecho_Db::WRITE);

    Typecho_Db::set($db);
} else {
    die('数据库环境变量未正确配置');
}
