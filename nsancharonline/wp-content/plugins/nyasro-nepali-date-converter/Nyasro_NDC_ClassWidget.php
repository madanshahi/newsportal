<?php

	class Nyasro_NepaliDateConverterWidget extends WP_Widget
	{
		public function __construct() 
		{
			$widget_ops = array('description' => 'Nepali to English or English to Nepali Date Converter');
			parent::__construct(false,'Nyasro Nepali Date Converter', $widget_ops);
		}
				
		public function widget( $args, $instance ) 
		{
			extract( $args );
			$title			= isset($instance['title']) ? $instance['title'] : false;

			if( $title )
				echo $before_title . $title . $after_title;
				
			_Nyasro_NepaliDateConverterWidget();

		}
		
		public function form( $instance ) 
		{
      $instance['title'] = isset($instance['title'])?$instance['title']:'';
			?>
				<p>  
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:'); ?></label>  
                    <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />  
                </p> 
			<?php
		}
		
		public function update( $new_instance, $old_instance ) 
		{
			$instance		= $old_instance;
			$instance['title'] = strip_tags( $new_instance['title'] );
			
			return $instance;

		}
	}








?>