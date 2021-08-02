<?php get_header();?>
<div id="content" class="site-content">
<div id="primary" class="content-area ok__cat--listing">
<main id="main" class="site-main">
<section class="">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<div class="breadcrumbs">
<div class="brdcmbList">
<ul>
<li><a href="<?php echo get_home_url(); ?>">Home</a> </li>
<li><i class="fas fa-angle-right"></i></li>
<li><?php single_cat_title('Showing Post From:-');?></li>
</ul>
</div>
</div>

<div class="ok__archive--titlerow">
<div class="flex-box">
<h2 class="title__medium cat__title"><span><?php single_cat_title();?></span></h2>
<div class="sorting">
<span class="list-view"><i class="fas fa-list"></i>List</span>
<span class="grid-view active"><i class="fas fa-th-large"></i>Grid</span>
</div>
</div>
</div>

<div class="list_child_wrp">

<?php category_block(9,0,60);?>
</div>
<div class="ok18-pagination-wrap">
<div class="paginate-links"><span aria-current="page" class="page-numbers current">1</span>
<?php  post_pagination();
  ?></div> </div>
</div>



</div>
</div>
</section>

</main>
</div>
</div>
<?php get_footer();?>