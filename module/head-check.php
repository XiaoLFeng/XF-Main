<?PHP 
// 获取数据（获取数据库信息）
include($_SERVER['DOCUMENT_ROOT'].'/config.inc.php');
// 链接数据库
include($_SERVER['DOCUMENT_ROOT'].'/plugins/sql_conn.php');

// 载入网站基本信息
$normal_url = $_SERVER['HTTP_HOST'].'/api/normal/?ssid='.$setting['SSID'].'&type=all';    
$normal_ch = curl_init($normal_url);
curl_setopt($normal_ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($normal_ch, CURLOPT_RETURNTRANSFER, true);
$normal = curl_exec($normal_ch);
$normal = json_decode($normal,true);

// 函数
    // 网站镜像
    function mirrors() {
        global $normal;
        if ($normal['data']['web_mirror']['vaule'] == 'akass') {
            return 'https://npm.akass.cn/';
        } elseif ($normal['data']['web_mirror']['vaule'] == 'jsdelivr') {
            return 'https://cdn.jsdelivr.net/npm/';
        } else {
            return $_SERVER['DOCUMENT_ROOT'];
        }
    }