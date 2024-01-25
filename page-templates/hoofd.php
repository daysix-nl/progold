<?php
/**
 * Template name: Hoofdprijs
 */


 get_header(); 
 ?>


<main class="">
    <audio autoplay>
        <source src="/wp-content/themes/progold/img/local/yah-norm.mp3" type="audio/mp3">
    </audio>
    <section class="relative z-[3] mt-6 overflow-hidden bg-confetti">
        <div class="relative overflow-hidden">
            <div class="container relative">
                <!-- CONTENT -->
                <div class="w-full md:w-[400px] lg:w-[517px] mx-auto relative z-[2]">
                    <!-- FORMULIER -->
                    <h1 class="text-60 leading-60 md:text-86 md:leading-86 lg:text-111 lg:leading-111 uppercase font-semibold text-[#709138]"><?php the_field("hoofdprijs_titel_2", 'option');?></h1>
                    <div class="min-h-[570px]">
                        <div class="text-16 leading-26 text-white font-light tracking-wide mt-2 px-[10px]"><?php the_field("hoofdprijs_tekst_2", 'option');?></div>
                        <div class="relative w-full rounded-[10px] px-[25px] py-[30px] overflow-hidden mt-2 ">
                            <div class="blurr absolute top-0 left-0 right-0 bottom-0 z-[3]"></div>
                            <div class="relative z-[6] formtwee">
                                <?php echo do_shortcode('[gravityform id="14" title="false" description="false" ajax="true"]'); ?>
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
                    $image = get_field('weetje_afbeelding_2', 'option');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <?php
                    $link = get_field('weetje_link_2', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <div id="wistjedat" class="pt-[160px]">
                        <h2 class="text-30 leading-30 lg:text-45 lg:leading-45 font-semibold text-white tracking-wide pb-[30px]">Wist je dat</h2>
                        <div class="bg-[#709138] w-full rounded-[10px] px-[25px] lg:px-[25px] py-[30px] lg:py-3 xl:py-4 flex items-end">
                            <div class="flex flex-col justify-between">
                                <div class="text-16 leading-26 text-white font-light tracking-wide"><?php the_field('weetje_tekst_2', 'option');?></div>
                                <a href="<?php echo $link_url; ?>" class="h-[51px] px-[30px] rounded-[10px] bg-[#092950] w-fit text-white flex items-center mt-[40px] border-[1px] border-[#092950] hover:border-white hover:bg-transparent font-medium tracking-wide" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            </div>
                            <div class="h-full flex items-end w-[270px] px-[35px]">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ELEMENTEN -->
                <div class="absolute flex justify-between top-[75px] md:top-0 md:left-[-280px] md:right-[-240px] lg:left-[-75px] lg:right-[-30px] bottom-0 z-[1]">
                    <div class="h-full w-[380px] relative">
                        <div class="absolute rotate-[-80deg] md:rotate-[unset] scale-[0.5] md:scale-[unset] top-[410px] md:top-[40px] right-[40px] md:right-[0px]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/Group 30.png" alt="">
                        </div>
                        <div class="absolute scale-[0.5] md:scale-[unset] top-[880px] md:top-[1080px] left-[-200px] md:left-[unset] md:right-[-65px]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/verfrol-vilt.png" alt="">
                        </div>

                        <div class="absolute top-[1966px] left-[-250px] md:left-[-85px] right-[-85px] scale-[0.5] md:scale-[unset]">
                            <img class="par-bottom" src="/wp-content/themes/progold/img/local/rollerv2.png" alt="">
                        </div>

                        <!-- confetti -->
                        <div class="absolute hidden md:block md:top-[490px] md:left-[10px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-b.png" alt="">
                        </div>

                        <div class="absolute top-[650px] right-[-55px] md:right-[unset] md:top-[950px] md:left-[60px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-c.png" alt="">
                        </div>

                        <div class="absolute top-[1355px] md:top-[2200px] right-[-55px] md:right-[unset] md:left-[-40px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-a.png" alt="">
                        </div>
                    </div>
                    <div class="h-full w-[380px] relative">
                        <div class="absolute scale-[0.5] md:scale-[unset] top-[-5px] md:top-[240px] left-[-211px] md:left-[-45px]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/Group 31.png" alt="">
                        </div>
                        <div class="absolute rotate-[57deg] md:rotate-[unset]  scale-[0.3] md:scale-[unset] top-[975px] md:top-[750px] left-[-360px] md:left-[unset] md:right-[30px]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/progold-non_crack.png" alt="">
                        </div>
                        <div class="absolute top-[2150px] md:top-[2250px] left-[-350px] md:left-[50px] right-[-220px] scale-[0.5] md:scale-[unset]">
                            <img class="par-top" src="/wp-content/themes/progold/img/local/Group 32.png" alt="">
                        </div>

                        <!-- confetti - right -->
                        <div class="absolute top-[2220px] left-[-430px] md:left-[unset] md:top-[40px] md:right-[40px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-a.png" alt="">
                        </div>
                        <div class="absolute hidden md:block md:top-[950px] md:right-[-40px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-c.png" alt="">
                        </div>
                        <div class="absolute top-[1380px] left-[-480px] md:left-[unset] md:top-[1400px] md:left-[-200px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-d.png" alt="">
                        </div>

                        <div class="absolute top-[2050px] left-[-200px] md:left-[unset] md:top-[2200px] md:left-[-250px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-e.png" alt="">
                        </div>

                        <div class="absolute top-[2600px] left-[-100px] md:left-[unset] md:top-[2900px] md:right-[-80px] scale-[0.5] md:scale-[unset]">
                            <img src="/wp-content/themes/progold/img/local/confetti-b.png" alt="">
                        </div>
                    </div>
                </div>
             </div>
            <!-- FOOTER -->
             <div class="mt-[460px] w-full flex justify-center bg-half relative">
                <div class="container">
                    <img src="/wp-content/themes/progold/img/local/systainerv2.png" alt="">
                    <div class="pb-[30px]">
                        <svg id="ppg" xmlns="http://www.w3.org/2000/svg" width="47" height="37.142" viewBox="0 0 47 37.142">
                        <g id="Group_28" data-name="Group 28">
                            <g id="Group_27" data-name="Group 27">
                            <path id="Path_24" data-name="Path 24" d="M38.1,37.142H8.9a8.907,8.907,0,0,1-8.9-8.9V8.9A8.907,8.907,0,0,1,8.9,0H38.1A8.908,8.908,0,0,1,47,8.9V28.243A8.908,8.908,0,0,1,38.1,37.142Z" fill="#fff"/>
                            <path id="Path_25" data-name="Path 25" d="M43.165,40.64h-29.2A7.353,7.353,0,0,1,6.63,33.309V13.961A7.353,7.353,0,0,1,13.961,6.63h29.2A7.353,7.353,0,0,1,50.5,13.961V33.307A7.351,7.351,0,0,1,43.165,40.64Z" transform="translate(-5.064 -5.064)" fill="#0078a9"/>
                            <path id="Path_26" data-name="Path 26" d="M50.162,27.791a5.332,5.332,0,0,1,4.95,1.193V25.214c-4.572-.725-6.97-.231-8.8.9A6.212,6.212,0,0,0,44.2,28.36s-.033.068-.087.191c-.241-9.537-6.075-8.706-13.04-8.7H27.154v8.219C26,24.664,22.423,25.03,18.6,25.03H15.38V42.415h5.267a2.064,2.064,0,0,1-1.325-2.175V35.466l1.519,1.519a5.365,5.365,0,0,0,6.308-3.446V47.606h6.266a2.042,2.042,0,0,1-1.32-2.156V36l2.376,2.367a4.7,4.7,0,0,0,1.979.291,7.667,7.667,0,0,0,6.6-4.192c.135,3.108,1.153,6.223,4.306,7.449a10.126,10.126,0,0,0,4.606.6A21.19,21.19,0,0,0,55.11,42.2V33.688h-4.8a2.012,2.012,0,0,1,1.325,2.135V39.7a3.228,3.228,0,0,1-3.4-1.063c-1.042-1.349-1.231-5.142-.789-7.728A4.289,4.289,0,0,1,50.162,27.791Zm-29.036,7a2.524,2.524,0,0,1-1.8-.555V27.987a.979.979,0,0,1,.964-.966c.621-.071,3.444-.522,3.444,3.663C23.734,34.6,22.01,34.791,21.126,34.791Zm14.133.64a5.771,5.771,0,0,1-3.162-.9V24.163c0-.864,1.023-1.46,1.9-1.568.938-.118,5.257-.768,5.257,6.027C39.253,34.748,36.343,35.431,35.259,35.431Z" transform="translate(-11.748 -15.145)" fill="#fff"/>
                            </g>
                        </g>
                        </svg>
                    </div>
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

