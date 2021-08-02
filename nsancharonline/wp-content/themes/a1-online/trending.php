<div class="trending__hidden">
 <div class="ok__container"> 
  <div class="trending__wrapp">
   <span class="closeThis">
    <i class="fas fa-times"></i></span>  
    <div class="cards side_card"> 
      <div class="title">ट्रेन्डिङ </div> 
      <ul class="trending flex-box">
      <?php trend_block(-100,12,0,60);?>
        </ul> </div> </div> </div> </div> 
                       <div class="latestUps__hidden"> 
                        <div class="ok__container"> 
                          <div class="latestUp__wrapp"> 
                            <span class="closeThis">
                              <i class="fas fa-times"></i></span> 
                               <div class="cards side_card">
                                <div class="title">ताजा अपडेट</div> 
                                <div class="latest__wrap--list"> 
                                <ol>
                                 
                                         <?php taja_block(-100,6,0,60);?>
                                       </ol>
                                                               </div> 
                                                               </div> 
                                                               </div> 
                                                               </div> 
                                                               </div>  
                                                               <div class="search__box--main"> 
                                                               <form method="get" action="#"> 
                                                               <div class="ok__container flex-box"> 
                                                               <div class="ok18-search-field-wrap"> 
                                                               <input type="text" name="from_date" value="" class="ok18-nepali-calendar" id="ok18-search-from" placeholder="From" autocomplete="off" /> <i class="far fa-calendar-alt"></i> </div> <div class="ok18-search-field-wrap"> <input type="text" name="to_date" value="" class="ok18-nepali-calendar" id="ok18-search-to" placeholder="To" autocomplete="off" /> <i class="far fa-calendar-alt"></i> </div> <div class="ok18-search-field-wrap"> <input type="text" name="s" placeholder="Keyword" value="" class="main--search--box" /> </div> <div class="ok18-search-field-wrap"> <button type="submit" class="btn btn-cmnt">Search</button> </div> <span class="closeThis"><i class="fas fa-times"></i></span> </div> </form> </div>  </nav>


<section id="trendingTicker" class="ok__trending--ticker">
<div class="ok__container">

<div class="trending__tickr--purecompo">
<div class="title__label"> TRENDING</div>
<ul class="item__lists flex-box">
<?php
$i=0;
$posttags = get_terms('post_tag');
  foreach($posttags as $tag) {
    if ($posttags && $i<8) { 
     ?>   
  <li> <a href="<?php echo get_tag_link($tag_id); ?>"> <?php echo "  ".$tag->name ."   "."     "."  "; ?> </a></li> <?php
  }
 $i++;
}
?>
</ul>
</div>

</div>
</section>
<div id="stop" class="scrollTop">
    <span><a href=""></a></span>
</div>
<script>
    $(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  });

}); // ready() END
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<?php if ( is_home() ) {?>
   <?php if ( is_active_sidebar('jacket') ) {?>
       <div id="messagem">
           <div class="add-head">
               <img src="<?php echo of_get_option( 'logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" width="350" onload="startTimer1()">
           </div>
           <div class="add-text">
               <h1>Advertisment</h1>
               <a href="javascript:;" onClick="javascript:hideMessagem()" >SKIP THIS</a>
           </div>
           <div class="add-img">
               <?php dynamic_sidebar('jacket'); ?>
           </div>
       </div>
      <? }else{ ?>

      <?php } ?>
      <? }else{ ?>
      <?php if ( is_active_sidebar('jacket-not-home') ) {?>
       <div id="messagem">
           <div class="add-head">
               <img src="<?php echo of_get_option( 'logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" width="350" onload="startTimer1()">
           </div>
           <div class="add-text">
               <h1>Advertisment</h1>
               <a href="javascript:;" onClick="javascript:hideMessagem()" >SKIP THIS</a>
           </div>
           <div class="add-img">
               <?php dynamic_sidebar('jacket-not-home'); ?>
           </div>
       </div>
      <? }else{ ?>

      <?php } ?>
      <?php } ?>
<div id="messagem1" style="display:none"></div>
<script type="text/javascript">
    function hideMessagem() {
        document.getElementById("messagem").style.display="none";
    }
    function showMessagem() {
        document.getElementById("messagem1").style.display="block";
    }
    function startTimer1() {
        var tim = window.setTimeout("hideMessagem()", 10000);  // 5000 milliseconds = 5 seconds
        var tim = window.setTimeout("showMessagem()", 1000);
    }
</script>