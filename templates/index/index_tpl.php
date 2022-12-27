<div class="doitac">
    <div class="doitacc">
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="3:10" data-md-items="6:10"
            data-lg-items="7:10" data-xlg-items="9:10" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0"
            data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
            data-nav="0"
            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
            data-navcontainer=".control-partner">
            <?php if(!empty($doitac)) {
                foreach($doitac as $v){?>
            <div class="doitac-item">
                <a href="<?=$v['link']?>" class="doitac__img effect10">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '100x70x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]]) ?>
                </a>
            </div>
            <?php }}?>
        </div>
    </div>
</div>
<div class="tieuchi">
    <div class="wrapper">
        <div class="tieuchii">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:0" data-sm-items="3:0" data-md-items="3:0"
                data-lg-items="3:0" data-xlg-items="3:0" data-rewind="1" data-autoplay="0" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-partner">
                <?php if(!empty($tieuchi)) {
                foreach($tieuchi as $v){?>
                <div class="tieuchi__item">
                    <div class="tieuchi__item--icon">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '55x51x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </div>
                    <div class="tieuchi__content">
                        <div class="tieuchi__name">
                            <span>
                                <?=$v['name'.$lang]?>
                            </span>
                        </div>
                        <div class="tieuchi__desc">
                            <span>
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <div class="about__heading heading">
                    <span><?=$about[0]['name'.$lang]?></span>
                </div>
                <div class="about__middle">
                    <div>
                        <img src="assets/images/images/item-about02.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                    <div class="about__content">
                        <span>
                            <?=$about[0]['desc'.$lang]?>
                        </span>
                        <div class="about__btn">
                            <a href="gioi-thieu" title="Giới thiệu"
                                class="button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                                    tất cả</span><img src="assets/images/images/item-btn.png"
                                    alt="<?=$setting['name'.$lang]?>"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="about__right">
                <?php if(!empty($imgabout[0])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '190x190x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
                <?php if(!empty($imgabout[1])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '240x220x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[1]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
                <?php if(!empty($imgabout[2])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '300x340x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[2]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="productbc pd mr-top">
    <div class="wrapper">
        <div class="heading__top">
            <span class="heading heading--white">
                Sản phẩm bán chạy
            </span>
            <div class="heading__slogan heading__slogan--white">
                <div>
                    <img src="assets/images/images/line-white.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>
                    <?=$slogan['name'.$lang]?>
                </span>
                <div>
                    <img src="assets/images/images/line-white-right.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
        </div>
        <div class="productbc__list">
            <?php if (count($productbc)) { ?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:20" data-sm-items="2:20" data-md-items="3:20"
                data-lg-items="4:20" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="1"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-congtrinh">
                <?php foreach ($productbc as $v) { ?>
                <div>
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="productbc__item">
                        <div class="productbc__img effect10 scale-img">
                            <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => true, 'prefix' => 'product', 'sizes' => '380x380x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="productbc__content">
                            <div class="productbc__name">
                                <span><?=$v['name'.$lang]?></span>
                            </div>
                            <div class="productbc__price">
                                <span>
                                    <?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="control-congtrinh transition"></div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="productnb pd">
    <div class="wrapper">
        <div class="heading__top">
            <span class="heading heading--black">
                Sản phẩm nổi bật
            </span>
            <div class="heading__slogan heading__slogan--black">
                <div>
                    <img src="assets/images/images/line-blue.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>
                    <?=$slogan['name'.$lang]?>
                </span>
                <div>
                    <img src="assets/images/images/line-blue-02.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
        </div>
        <?php if (!empty($productlist)) { ?>
        <div class="title-product-list text-center">
            <?php foreach ($productlist as $key => $vl) : ?>
            <a class="text-decoration-none a-title-product" data-list="<?= $vl['id'] ?>"><?= $vl['name' . $lang] ?></a>
            <?php endforeach ?>
        </div>
        <?php } ?>
        <div class="productnb__list">
            <div class="paging-product-list"></div>
        </div>
    </div>
</div>
<div>
    <?php if(!empty($banner)){?>
    <div class="banner effect10">
        <?= $func->getImage(['class' => 'lazy', 'sizes' => '1366x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => "about"]) ?>
    </div>
    <?php }?>
</div>
<div class="videofb pd">
    <div class="wrapper">
        <div class="videofbb">
            <div class="videoo">

                <div class="heading__02">

                    <span class="heading--02">
                        video nổi bật
                    </span>
                    <div class="heading__slogan--02">
                        <span>
                            <?=$slogan['name'.$lang]?>
                        </span>
                    </div>

                </div>
            </div>
            <div class="feedback">
                <div class="heading__02">
                    <span class="heading--02">
                        cảm nhận khách hàng
                    </span>
                    <div class="heading__slogan--02">
                        <span>
                            <?=$slogan['name'.$lang]?>
                        </span>
                    </div>
                </div>
                <div class="feedback__list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                        data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="1" data-nav="0"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".feedback-partner">
                        <?php if(!empty($feedback)) {
                foreach($feedback as $v){?>
                        <div class="feedback__item">
                            <div class="feedback__img scale-img effect10">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '220x220x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                            <div class="feedback__content">
                                <div class="feedback__name">
                                    <span><?=$v['name'.$lang]?></span>
                                </div>
                                <div class="feedback__desc">
                                    <span>
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading_top">
                <div class="heading">
                    <span>Tin tức sự kiện</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="blog__right">
                    <a class="blog__right-item" href="<?=$newsnb[0][$sluglang]?>">
                        <div class="blog__right-img hover_sang">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '580x355x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name' . $lang]]) ?>
                        </div>
                        <div class="blog__right-content">
                            <span class="blog__name">
                                <?=$newsnb[0]['name'.$lang]?>
                            </span>
                            <div class="blog__right-date">
                                <div>
                                    <img src="assets/images/icon-blog.png" alt="<?=$newsnb[0]['name'.$lang]?>">
                                </div>
                                <span class="blog__right-date1"><?=date("j F Y",$newsnb[0]['date_created'])?></span>
                                <span class="blog__right-date2">
                                    Tin tức
                                </span>
                            </div>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="blog__left">
                    <div class="slickblog">
                        <?php foreach ($newsnb as $v) { ?>
                        <div>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="blog__lef-item">
                                <div class="blog__left-img hover_sang">
                                    <?= $func->getImage(['class' => '', 'sizes' => '280x210x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </div>
                                <div class="blog__left-content">

                                    <span class="blog__name"> <?=$v['name'.$lang]?></span>
                                    <div class="blog__right-date">
                                        <span
                                            class="blog__right-date1"><?=date("j F Y",$newsnb[0]['date_created'])?></span>
                                        <span class="blog__right-date2">
                                            Tin tức
                                        </span>
                                    </div>
                                    <span class="blog__desc">
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="albumd pd">
    <div class="wrapper">
        <div class="albumdd">
            <div class="heading_top">
                <div class="heading">
                    <span>Album ảnh</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="albumd__list">
                <div class="albumd__top">
                    <?php if(count($thuvienanh)>1){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[0][$sluglang]?>"
                                title="<?=$thuvienanh[0]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>2){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[1][$sluglang]?>"
                                title="<?=$thuvienanh[1]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>3){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[2][$sluglang]?>"
                                title="<?=$thuvienanh[2]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="albumd__buttom">
                    <?php if(count($thuvienanh)>4){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[3][$sluglang]?>"
                                title="<?=$thuvienanh[3]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>5){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[4][$sluglang]?>"
                                title="<?=$thuvienanh[4]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <?php if(!empty($thuvienanh)){?>
            <div class="albumd__list-mobile">
                <?php foreach($thuvienanh as $v){?>
                <div class="albumd__mobile-item">
                    <a class="album-image scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php } ?>

            </div>
            <?php } ?>


            <?php if (count($thuvienanh)>5){?>
            <div class="albumd__btn">
                <a href="thi-vien-anh">Xem thêm công trình</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="videoo pd">
    <div class="wrap">
        <div class="videoo">
            <div class="heading_top">
                <div class="heading">
                    <span>Video clip</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <?php if(!empty($videoclipd)) {?>
            <div class="videoo__list">
                <div class="flipstervideo">
                    <ul>
                        <?php foreach($videoclipd as $v){?>
                        <li class="viddeoo__item">
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?=$func->getImage(['class' => '', 'sizes' => '635x308x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </div>
                                <div class="video__info">
                                    <span class="video__name"><?=$v['name'.$lang]?></span>
                                    <span class="video__desc"><?=$v['desc'.$lang]?></span>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>