<?PHP
include('../module/head-check.php');
?>
<div class="row">
    <div class="col-12 col-lg-8 col-xl-9 mb-3">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="col-6 col-xl-3 mb-3">
                        <a class="text-decoration-none" href="">
                            <div class="card shadow-sm rounded-3">
                                <img src="https://www.x-lf.com/src/img/blog.png" width="" height="" class="card-img-top">
                                <div class="card-body text-center text-black fw-bold">
                                    我的博客
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3 mb-3">
                        <a class="text-decoration-none" href="">
                            <div class="card shadow-sm rounded-3">
                                <img src="https://www.x-lf.com/src/img/boxes.png" width="" height="" class="card-img-top">
                                <div class="card-body text-center text-black fw-bold">
                                    我的博客
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3 mb-3">
                        <a class="text-decoration-none" href="">
                            <div class="card shadow-sm rounded-3">
                                <img src="https://www.x-lf.com/src/img/frontleaves.png" width="" height="" class="card-img-top">
                                <div class="card-body text-center text-black fw-bold">
                                    我的博客
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a class="text-decoration-none" href="">
                            <div class="card shadow-sm rounded-3">
                                <img src="https://www.x-lf.com/src/img/music.png" width="" height="" class="card-img-top">
                                <div class="card-body text-center text-black fw-bold">
                                    我的博客
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3">
                <div class="card shadow-sm rounded-3">
                    <div class="card-header fw-bold"><i class="bi bi-person"></i> 简单介绍</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">昵称</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3">
                <div class="card shadow-sm rounded-3">
                    <div class="card-header fw-bold"><i class="bi bi-book"></i> 学习阶段</div>
                    <div class="card-body">
                        测试
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-3 mb-3">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3 text-center">
                                <img src="<?PHP echo $normal['data']['person_icon']['vaule'];?>" style="width:120px;" class="rounded-circle">
                            </div>
                            <div class="col-12 mb-1 text-center fs-5 fw-bold"><?PHP echo $normal['data']['person_displayname']['vaule'];?></div>
                            <div class="col-12 text-center"><?PHP echo $normal['data']['person_desc']['vaule'];?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow-sm rounded-3">
                    <div class="card-header text-cenetr fw-bold"><i class="bi bi-share"></i> 小链接</div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-12 mb-3 d-grid gap-2"><a class="btn btn-outline-primary" href="<?PHP echo $normal['data']['person_blog_url']['vaule']; ?>" role="button"><i class="bi bi-rss"></i> 我的博客</a></div>
                            <div class="col-12 d-grid gap-2"><a class="btn btn-outline-primary" href="https://music.163.com/#/user/home?id=1325484279" role="button"><i class="bi bi-music-note-list"></i> 我的网易云</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow-sm rounded-3">
                    <div class="card-header fw-bold"><i class="bi bi-link-45deg"></i> 友人帐</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>