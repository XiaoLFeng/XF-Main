<?PHP 
// 构建显色函数
function color($color_id) {
    global $menu_id;
    if ($menu_id == $color_id) {
        echo 'active';
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-50 mb-4 shadow">
    <div class="container-fluid my-2">
        <a class="navbar-brand" href="<?PHP echo 'http://'.$_SERVER['HTTP_HOST'].'/index.php' ?>"><strong><?PHP echo $normal['data']['web_title']['vaule']; ?></strong></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?PHP color(1) ?>" aria-current="page" href="/index.php"><i class="bi bi-house-door"></i> 首页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?PHP color(2) ?>" href="<?PHP echo $normal['data']['person_blog_url']['vaule']; ?>"><i class="bi bi-person"></i> 博客</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?PHP color(3) ?>" href="./atom.php"><i class="bi bi-rss"></i> 博文预览</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?PHP color(4) ?>" href="./sponsor.php"><i class="bi bi-coin"></i> 赞助列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?PHP color(4) ?>" href="./sponsor.php"><i class="bi bi-music-note-beamed"></i> 音乐人</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> 更多</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://main.x-lf.cn/">公开服务</a></li>
                        <li><a class="dropdown-item" href="https://img.x-lf.cn/">私家图床</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./admin/">管理员登陆</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="例：bilibili" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="搜索"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>