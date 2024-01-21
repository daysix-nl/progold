<?php
/**
 * Template name: Hoofdprijs
 */


 get_header(); 
 $get_number_month = date('n', mktime(0, 0, 0, date('n'), 22));
 ?>


<main class="">
    <section class="relative z-[3] mt-6 overflow-hidden bg-confetti">
        <div class="relative overflow-hidden">
            <div class="container relative">
                <!-- CONTENT -->
                <div class="w-full md:w-[400px] lg:w-[517px] mx-auto relative z-[2]">
                    <!-- FORMULIER -->
                    <h1 class="text-60 leading-60 md:text-86 md:leading-86 lg:text-111 lg:leading-111 uppercase font-semibold text-[#709138]"><?php the_field("hoofdprijs_titel_$get_number_month", 'option');?></h1>
                    <div class="min-h-[570px]">
                        <div class="text-16 leading-26 text-white font-light tracking-wide mt-2 px-[10px]"><?php the_field("hoofdprijs_tekst_$get_number_month", 'option');?></div>
                        <div class="relative w-full rounded-[10px] px-[25px] py-[30px] overflow-hidden mt-2 ">
                            <div class="blurr absolute top-0 left-0 right-0 bottom-0 z-[3]"></div>
                            <div class="relative z-[6] formtwee">
                                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- VEELGESTELDE VRAGEN -->
                    <div id="faq" class="pt-[160px] min-h-[760px]">
                        <h2 class="text-30 leading-30 lg:text-45 lg:leading-45 font-semibold text-white tracking-wide pb-[30px] duration-150">Veelgestelde vragen</h2>
                        <div class="grid gap-2">
                            <?php
                            if( have_rows('faq', 'option') ):
                                while( have_rows('faq', 'option') ) : the_row(); ?>
                                <!-- ACCORDION ITEM -->
                                <div class="accordion-item h-fit">
                                    <!-- ACCORDION HEADER -->
                                    <button class="accordion min-h-[65px] md:min-h-[65px] lg:min-h-[70px] xl:min-h-[70px] flex items-center px-[15px] lg:px-2 w-full relative overflow-hidden">
                                        <h4 class="font-satoshi font-semibold text-white text-18 leading-18 w-[296px] md:w-[400px] lg:w-[517px] text-left relative z-[6] tracking-wide"><?php the_sub_field('vraag', 'option');?></h4>
                                        <div class="blurr absolute top-0 left-0 right-0 bottom-0 z-[3]"></div>
                                    </button>
                                    <!-- ACCORDION BODY -->
                                    <div class="panel w-full relative overflow-hidden rounded-b-[10px]">
                                        <div class="px-[15px] lg:px-2 pb-[15px] lg:pb-3 xl:pb-4">
                                            <div class="text-white font-light text-16 leading-26 text-editor relative z-[6] tracking-wide"><?php the_sub_field('antwoord', 'option');?></div>
                                            <div class="blurr absolute top-0 left-0 right-0 bottom-0 z-[3]"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                      <!-- WIST JE DAT -->
                    <?php
                    $image = get_field('weetje_afbeelding_1', 'option');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <?php
                    $link = get_field('weetje_link_1', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <div id="wistjedat" class="pt-[160px]">
                        <h2 class="text-30 leading-30 lg:text-45 lg:leading-45 font-semibold text-white tracking-wide pb-[30px]">Wist je dat</h2>
                        <div class="bg-[#709138] w-full rounded-[10px] px-[25px] lg:px-[25px] py-[30px] lg:py-3 xl:py-4 flex items-end">
                            <div class="flex flex-col justify-between">
                                <div class="text-16 leading-26 text-white font-light tracking-wide"><?php the_field('weetje_tekst_1', 'option');?></div>
                                <a href="<?php echo $link_url; ?>" class="h-[51px] px-[30px] rounded-[10px] bg-[#092950] w-fit text-white flex items-center mt-[40px] border-[1px] border-[#092950] hover:border-white hover:bg-transparent font-medium tracking-wide" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            </div>
                            <div class="h-full flex items-end w-[270px] px-[35px]">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ELEMENTEN -->
                <div class="absolute hidden md:flex justify-between top-0 md:left-[-280px] md:right-[-240px] lg:left-[-75px] lg:right-[-30px] bottom-0 z-[1]">
                    <div class="h-full w-[380px] relative">
                        <div class="absolute top-[40px] right-[0px]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/Group 30.png" alt="">
                        </div>
                        <div class="absolute top-[1080px] right-[-65px]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/verfrol-vilt.png" alt="">
                        </div>

                        <div class="absolute top-[1966px] left-[-85px] right-[-85px]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/roller.png" alt="">
                        </div>

                        <!-- confetti -->
                        <div class="absolute top-[490px] left-[10px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-b.png" alt="">
                        </div>

                        <div class="absolute top-[950px] left-[60px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-c.png" alt="">
                        </div>

                        <div class="absolute top-[2200px] left-[-40px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-a.png" alt="">
                        </div>
                    </div>
                    <div class="h-full w-[380px] relative">
                        <div class="absolute top-[240px] left-[-45px]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/Group 31.png" alt="">
                        </div>
                        <div class="absolute top-[750px] right-[30px]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/progold-non_crack.png" alt="">
                        </div>
                        <div class="absolute top-[2250px] left-[50px] right-[-220px]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/Group 32.png" alt="">
                        </div>

                        <!-- confetti - right -->
                        <div class="absolute top-[40px] right-[40px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-a.png" alt="">
                        </div>
                        <div class="absolute top-[950px] right-[-40px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-c.png" alt="">
                        </div>
                        <div class="absolute top-[1400px] left-[-200px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-d.png" alt="">
                        </div>

                        <div class="absolute top-[2200px] left-[-250px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-e.png" alt="">
                        </div>

                        <div class="absolute top-[2900px] right-[-80px]">
                            <img src="/wp-content/themes/progold/img/local/confetti-b.png" alt="">
                        </div>
                    </div>
                </div>
             </div>
            <!-- FOOTER -->
             <div class="mt-[460px] w-full flex justify-center bg-half relative">
                <div class="container">
                    <img src="/wp-content/themes/progold/img/local/systainer.png" alt="">
                </div>

               <div class="absolute top-[500px] left-1/2-translate-x-1/2 hidden md:flex">
                    <img src="/wp-content/themes/progold/img/local/confetti-e.png" alt="">
               </div>
               
            </div>
        </div>
    </section>
</main>
<!-- BACKGROUND -->
<div class="absolute top-0 left-0 right-0 bottom-0 z-[1] overflow-hidden">
    <img src="/wp-content/themes/progold/img/local/bg.png" alt="" class="min-h-full min-w-full object-cover object-top">
</div>
<?php get_footer('nofooter'); ?>

