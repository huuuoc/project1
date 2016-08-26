<?

class Wp_Widget_Test extends WP_Widget {
	// Hàm này thể hiện các thông tin cơ bản của Widget như ID, Tên Widget, mô tả của Widget.
	function __construct() {
		parent::__construct(
			// ID widget của bạn
			'CKN_widget', 
			// Tên Widget xuất hiện trong giao diện
			__('Widget chào các bạn', 'CKN_widget_ChaoCacBan'), 

			// Thông tin mô tả về Widget
			array( 'description' => __( 'Đây là Widget đơn giản hiển thị nội dung Chào các bạn đây là bài viết Hướng dẫn tạo Widget trong WordPress!', 'CKN_widget_ChaoCacBan' ), ) 
		);
	}
	
	// Phần này sẽ viết mã hiển thị dữ liệu trên giao diện (widget front-end)
	// function widget() là hàm xử lý thông tin cần hiển thị lên giao diện;
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$outputHTML='';
		// Trước và sau một Widget bạn cần cho phép hiển thị giá trị của các đối số được định nghĩa bởi Theme bất kỳ, nhằm tăng tính tương thích của Theme với Widget của bạn.
		$outputHTML .= $args['before_widget'];
		if ( ! empty( $title ) )
		$outputHTML .= $args['before_title'] . $title . $args['after_title'];

		// Từ vị trí này bạn sẽ viết mã xử lý hiển thị dữ liệu của mình.
		$outputHTML .='Chào các bạn đây là bài viết Hướng dẫn tạo Widget trong WordPress!';
		$outputHTML .= $args['after_widget'];
		echo $outputHTML;
	}

	// Phần xử lý dữ liệu bên dưới giao diện (widget Backend).
	// Form điền thông số tùy chỉnh theo chức năng mà Widget bạn cần phát triển. Ở đây mình chỉ cho tùy chỉnh tiêu đề Widget.
	public function form( $instance ) {
		// Chúng ta kiểm tra biến $instance['title'] có giá trị không ? Nếu có thì gán cho biến $title
		if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
		}
		else {
		$title = __( 'Tiêu đề mặc định', 'CKN_widget_ChaoCacBan' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Tiêu đề:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	
	// Hàm cập nhật giá trị cho Widget, các giá trị cũ $old_instance sẽ được thay thế bằng $new_instance
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} 