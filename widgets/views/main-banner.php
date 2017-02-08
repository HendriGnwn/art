<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!-- start revolution slider 5.0 -->
<section class="rev_slider_wrapper">
    <div class="rev_slider materialize-slider" >
        <ul>

            <!-- slide 1 start --> 
            <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?= Url::to(['themes/v1/img/banner-1/bg.jpg']) ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="We are Art TC" data-description="">

                <!-- MAIN IMAGE -->
                <img src="<?= Url::to(['themes/v1/img/banner-1/bg.jpg']) ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide"
                     data-x="['right','right','right','right']" data-hoffset="['0','0','-70','-70']" 
                     data-y="['top','top','top','top']" data-voffset="['0','0','-30','-30']" 
                     data-transform_idle="o:1;"
                     data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2000"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/book.jpg']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                     data-x="left"
                     data-y="center" data-voffset="-150"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2000"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/glasses.jpg']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                     data-x="left"
                     data-y="bottom" data-voffset="100"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/earphones.jpg']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide" 
                     data-x="['right','right','right','right']" data-hoffset="['0','0','-50','-50']" 
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                     data-transform_idle="o:1;"
                     data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/cup.jpg']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                     data-x="center"
                     data-y="center" data-voffset="-100" 
                     data-fontsize="['70','70','70','45']"
                     data-lineheight="['70','70','70','50']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="800" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap;">We Are ATC
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                     data-x="center"
                     data-y="center" 
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"

                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 6; white-space: nowrap;">materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                     data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-style_hover="cursor:default;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="1200" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 7; white-space: nowrap;">
                    <?= Html::a(Yii::t('app.button', 'Explore More'), ['/about-us'], ['class'=>'btn btn-lg waves-effect waves-light']) ?>
                </div>


                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide" 
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-70','-70','-170','-170']" 
                     data-transform_idle="o:1;"

                     data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/macbook.jpg']) ?>">
                    </div>
                </div>
            </li>
            <!-- slide 1 end -->

            <!-- slide 2 start --> 
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/img/banner-2/bg.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Build" data-description="">

                <!-- MAIN IMAGE -->
                <img src="<?= Url::to(['themes/v1/img/banner-2/bg.jpg']) ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide"
                     data-x="['right','right','right','right']" data-hoffset="['0','0','-170','-170']" 
                     data-y="['top','top','top','top']" data-voffset="['0','0','-90','-90']" 
                     data-transform_idle="o:1;"
                     data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2000"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.png']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-2/dummy.png']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide"
                     data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                     data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2000"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.png']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-2/flower.png']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                     data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-90','-90']"

                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.png']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-2/box.png']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide" 
                     data-x="['right','right','right','right']" data-hoffset="['0','0','-150','-150']" 
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                     data-transform_idle="o:1;"
                     data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.png']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-2/tube.png']) ?>">
                    </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                     data-x="center"
                     data-y="center" data-voffset="-100" 
                     data-fontsize="['70','70','70','45']"
                     data-lineheight="['70','70','70','50']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="800" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 5; white-space: nowrap;">We Build Web, Mobile and Network Systems
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                     data-x="center"
                     data-y="center" 
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"

                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="1000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 6; white-space: nowrap;">materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                     data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-style_hover="cursor:default;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                     data-start="1200" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-responsive_offset="on"
                     style="z-index: 7; white-space: nowrap;">
                    <?= Html::a(Yii::t('app.button', 'Explore More'), ['/services'], ['class'=>'btn btn-lg waves-effect waves-light']) ?>
                </div>


                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                     data-basealign="slide" 
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-120','-120','-170','-170']" 
                     data-transform_idle="o:1;"

                     data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                     data-start="2400"
                     style="z-index: 5;">
                    <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.png']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-2/ipad.png']) ?>">
                    </div>
                </div>
            </li>
            <!-- slide 2 end -->

        </ul>             
    </div><!-- end revolution slider -->
</section><!-- end of slider wrapper -->