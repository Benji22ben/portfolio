<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <div class="name">
      <div class="center-div">
        <h1><?php the_field('nom'); ?></h1>
      <div class="picture-wrap">
        <img class="presentation-picture" src="<?php the_field('image'); ?>" />
        <div class="purplesquare"></div>
      </div>
        <h1><?php the_field('nom2'); ?></h1>
      </div>
      <h1 class="firstname"><?php the_field('prenom'); ?></h1>
      <h3><?php the_field('fonction'); ?></h2>
    </div>
    <div class="who">
        <h2><?php the_field('qui_suis-je_'); ?></h2>
        <p class="presentation-text"><?php the_field('presentation'); ?></p>
        <p class="presentation-text"><?php the_field('presentation2'); ?></p>
        <p class="presentation-text"><?php the_field('presentation3'); ?></p>
    </div>
    <div class="skills">
        <h2><?php the_field('mes_competences_'); ?></h2>
          <div class="audiovisual">
            <?php $__currentLoopData = $competences_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <img class="app_img" src="<?php echo e($app->app_img); ?>"/>
                  <p class="app"><?php echo e($app->app); ?></p> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
          </div>
          <div class="graph">

          </div>
          <div class="code">
            
          </div>
    </div>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>