<?php
/**
 * Template name: Actievoorwaarden
 */


 get_header(); ?>

<main class="overflow-hidden">
    <section class="relative z-[3] mt-6 overflow-hidden ">
        <div class="relative overflow-hidden">
            <div class="container relative">
                <!-- CONTENT -->
                <div class="w-full md:w-[600px] lg:w-[800px] mx-auto relative z-[2]">
                    <!-- VOORWAARDEN -->
                   <h1 class="text-30 leading-30 uppercase font-semibold text-[#709138]"><?php the_field('actievoorwaarden_titel', 'option');?></h1>
                    <div class="text-16 leading-26 text-white font-light tracking-wide mt-2"><?php the_field('actievoorwaarden_tekst', 'option');?></div>
                </div>
             </div>
            <!-- FOOTER -->
             <div class="mt-[400px] w-full flex justify-center bg-half">
                <div class="container">
                    <img src="/wp-content/themes/progold/img/local/systainer.png" alt="">
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
               
            </div>
        </div>
    </section>
</main>
<!-- BACKGROUND -->
<div class="absolute top-0 left-0 right-0 bottom-0 z-[1] overflow-hidden">
    <img src="/wp-content/themes/progold/img/local/bg.png" alt="" class="min-h-full min-w-full object-cover object-top">
</div>
<?php get_footer('nofooter'); ?>

