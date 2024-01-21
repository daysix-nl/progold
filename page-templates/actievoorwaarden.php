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

