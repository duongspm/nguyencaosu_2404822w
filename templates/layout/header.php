<div class="header">
    <div class="header__top">
        <div class="header__slogan">
            <!-- marquee -->
            <div class="">
                <div>
                    <span>
                        <?=$sloganheader['name'.$lang]?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="header__buttom">
            <div class="header__info-item">
                <div class="header__logo">
                    <a href="" title="<?=trangchu?>" class="peShiner">
                        <?=$func->getImage(['sizes' => '180x100x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                </div>
            </div>
            <div class="header__info-item">
                <div class="header__banner">
                    <?=$func->getImage(['sizes' => '444x87x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
                </div>
            </div>
            <div class="header__info-item">
                <div class="header__open">
                    <div class="header__open--time">
                        <div class="header__icon">
                            <img src="assets/images/icon--02.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>
                            <?=$opentime['name'.$lang]?>
                        </span>
                    </div>
                    <div class="header__hotline">
                        <div class="header__icon">
                            <img src="assets/images/icon--02.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>
                            Hotline:
                        </span>
                        <a
                            href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>