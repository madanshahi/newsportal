<?php 
    function widgets_init() {
        $sidebars = array(
            array( 'name' => __( 'लोगोको छेउमा ', 'sobizPress' ), 'id' => 'aside_logo' ),
            array( 'name' => __( 'मनुको तल ', 'sobizPress' ), 'id' => 'below_menu' ),
            array( 'name' => __( 'ब्रेकिङ्ग को तल ', 'sobizPress' ), 'id' => 'below_breaking' ),
            array( 'name' => __( 'समाचारको माथि ', 'sobizPress' ), 'id' => 'above-samachar' ),
            array( 'name' => __( 'विचारको माथि ', 'sobizPress' ), 'id' => 'above-bichar' ),
            array( 'name' => __( 'Aside taja ', 'sobizPress' ), 'id' => 'aside_taja' ),
            array( 'name' => __( 'Aside Samachar ', 'sobizPress' ), 'id' => 'aside_samachar' ),
            array( 'name' => __( 'between news ', 'sobizPress' ), 'id' => 'betn-content' ),
            array( 'name' => __( 'skip adds home ', 'sobizPress' ), 'id' => 'jacket' ),
            array( 'name' => __( 'skip adds not home ', 'sobizPress' ), 'id' => 'jacket-not-home' ),
        );

        foreach ($sidebars as $sidebar) {
            register_sidebar( array(
                'name' => $sidebar['name'],
                'id' => $sidebar['id'],
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ) );
        }
    }
