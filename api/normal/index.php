<?PHP 
/*
 * XF-Main API 
 * 作者：筱锋xiao_lfeng
 * 该内容为隐私重要内容，请勿随意修改
 * 请尊重作者权益
 */

// 设置请求头
header('Content-Type: application/json;charset=utf-8');
// 获取数据
include($_SERVER['DOCUMENT_ROOT'].'/config.inc.php');
include($_SERVER['DOCUMENT_ROOT'].'/plugins/sql_conn.php');
// 从数据库获取密钥
function ssid() {
    global $conn;
    global $setting;
    $xfs_ssid = mysqli_query($conn,"SELECT * FROM ".$setting['SQL_DATA']['OPTIONS']." WHERE opt_name='web_session'");
    $xfs_ssid_object = mysqli_fetch_object($xfs_ssid);
    return $xfs_ssid_object->vaule;
}

// 获取参数
$ssid = htmlspecialchars($_GET['ssid']);
$type = htmlspecialchars($_GET['type']);
$p = htmlspecialchars($_GET['p']);

// 构建函数
if (!empty($ssid) || !$ssid == ssid()) {
    // 检查输入参数是否缺少
    if (!empty($type)) {
        // 检查参数是什么
        if ($type == 'all') {
            $result_normal = mysqli_query($conn,"SELECT * FROM ".$setting['SQL_DATA']['OPTIONS']." ORDER BY id");
            // 构建参数
            $array = array();
            while ($result_normal_object = mysqli_fetch_object($result_normal)) {
                $array[$result_normal_object->opt_name] = array(
                    'vaule'=>$result_normal_object->vaule,
                    'autoload'=>$result_normal_object->autoload,
                );
            }
            // 构建json
            $data = array(
                'output'=>'SUCCESS',
                'code'=>200,
                'info'=>'输出完毕',
                'data'=>$array,
            );
            // 输出数据
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        } elseif ($type == 'only') {
            # code...
        } else {
            // 构建json
            $data = array(
                'output'=>'TYPE_ERROR',
                'code'=>403,
                'info'=>'参数 Query[type] 错误'
            );
            // 输出数据
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            header("HTTP/1.1 403 Forbidden");
        }
    } else {
        // 构建json
        $data = array(
            'output'=>'TYPE_NONE',
            'code'=>403,
            'info'=>'参数 Query[type] 缺少'
        );
        // 输出数据
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        header("HTTP/1.1 403 Forbidden");
    }
} else {
    // 构建json
    $data = array(
        'output'=>'SSID_ERROR',
        'code'=>403,
        'info'=>'参数 Query[ssid] 缺少或错误'
    );
    // 输出数据
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
    header("HTTP/1.1 403 Forbidden");
}

// 释放数据库
mysqli_free_result($result_normal);
// 关闭数据库
mysqli_close($conn);