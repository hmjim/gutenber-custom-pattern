<?php
/**
 * Two Columns Secondary Block Patterns Template
 *
 * @package aquila-features
 */



$course_posts = get_posts([
  'post_type' => 'course',
  'post_status' => 'publish',
  'numberposts' => 9
  // 'order'    => 'ASC'
]);
// or /wp-json/wp/v2/course/?per_page=9
?>

<div class="section_posts_and_filters">
	<div class="posts_and_filters_wrap">
		<div class="posts_and_filters_left_col">
			<div class="posts_and_filters_filter_first">
				<div class="posts_and_filters_title">
				Filter by campus
				<svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M11.707 5.29285C12.0975 5.68337 12.0975 6.31657 11.707 6.70709C11.3164 7.09762 10.6832 7.09765 10.2927 6.70712L6.05 2.46441L1.80728 6.70712C1.41676 7.09765 0.783561 7.09762 0.393036 6.70709C0.00251198 6.31657 0.00248146 5.68337 0.393006 5.29285L5.34275 0.343101C5.53728 0.148571 5.79203 0.0509491 6.047 0.0502272C6.30396 0.0494232 6.56118 0.147045 6.75724 0.343101L11.707 5.29285Z" fill="#D8D8D8"/>
				<mask id="mask0_1893_256" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="7">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M11.707 5.29285C12.0975 5.68337 12.0975 6.31657 11.707 6.70709C11.3164 7.09762 10.6832 7.09765 10.2927 6.70712L6.05 2.46441L1.80728 6.70712C1.41676 7.09765 0.783561 7.09762 0.393036 6.70709C0.00251198 6.31657 0.00248146 5.68337 0.393006 5.29285L5.34275 0.343101C5.53728 0.148571 5.79203 0.0509491 6.047 0.0502272C6.30396 0.0494232 6.56118 0.147045 6.75724 0.343101L11.707 5.29285Z" fill="white"/>
				</mask>
				<g mask="url(#mask0_1893_256)">
				<rect width="16" height="16" transform="matrix(0 -1 -1 0 14 12)" fill="#071436"/>
				</g>
				</svg>
				</div>
				<div class="posts_and_filters_content">
					<input class="cl-custom-check" id="marking_09" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_09" title="Click for select/unselect">Enfield</label>

					<input class="cl-custom-check" id="marking_10" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_10" title="Click for select/unselect">Crystal Palace Park</label>

					<input class="cl-custom-check" id="marking_11" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_11" title="Click for select/unselect">Gunnersbury Park</label>

					<input class="cl-custom-check" id="marking_12" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_12" title="Click for select/unselect">Regent's Park</label>
					
					<input class="cl-custom-check" id="marking_11" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_11" title="Click for select/unselect">Brooks Farm</label>

					<input class="cl-custom-check" id="marking_12" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_12" title="Click for select/unselect">Mottingham</label>
				</div>
			</div>
			<div class="posts_and_filters_filter_second">
				<div class="posts_and_filters_title">
				Filter by course type
				<svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M11.707 5.29285C12.0975 5.68337 12.0975 6.31657 11.707 6.70709C11.3164 7.09762 10.6832 7.09765 10.2927 6.70712L6.05 2.46441L1.80728 6.70712C1.41676 7.09765 0.783561 7.09762 0.393036 6.70709C0.00251198 6.31657 0.00248146 5.68337 0.393006 5.29285L5.34275 0.343101C5.53728 0.148571 5.79203 0.0509491 6.047 0.0502272C6.30396 0.0494232 6.56118 0.147045 6.75724 0.343101L11.707 5.29285Z" fill="#D8D8D8"/>
				<mask id="mask0_1893_256" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="7">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M11.707 5.29285C12.0975 5.68337 12.0975 6.31657 11.707 6.70709C11.3164 7.09762 10.6832 7.09765 10.2927 6.70712L6.05 2.46441L1.80728 6.70712C1.41676 7.09765 0.783561 7.09762 0.393036 6.70709C0.00251198 6.31657 0.00248146 5.68337 0.393006 5.29285L5.34275 0.343101C5.53728 0.148571 5.79203 0.0509491 6.047 0.0502272C6.30396 0.0494232 6.56118 0.147045 6.75724 0.343101L11.707 5.29285Z" fill="white"/>
				</mask>
				<g mask="url(#mask0_1893_256)">
				<rect width="16" height="16" transform="matrix(0 -1 -1 0 14 12)" fill="#071436"/>
				</g>
				</svg>
				</div>
				<div class="posts_and_filters_content">
					<input class="cl-custom-check" id="marking_09" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_09" title="Click for select/unselect">All</label>

					<input class="cl-custom-check" id="marking_10" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_10" title="Click for select/unselect">Full-time</label>

					<input class="cl-custom-check" id="marking_11" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_11" title="Click for select/unselect">Part-time</label>

					<input class="cl-custom-check" id="marking_12" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_12" title="Click for select/unselect">Apprenticeships</label>
					
					<input class="cl-custom-check" id="marking_11" type="checkbox" />
					<label class="cl-custom-check-label" for="marking_11" title="Click for select/unselect">Higher Education</label>
				</div>
			</div>
			<div class="posts_and_filters_filter_third">
				<button>Apply now</button>
			</div>
		</div>
		<div class="right_col">
		<?php
		foreach($course_posts as $k => $v){
			echo '<div class="item_course">';
			echo get_the_post_thumbnail( $v->ID, 'thumbnail' );
			echo '<div class="item_course_title">'. $v->post_title .'</div>';
			
			$terms_type_courses = wp_get_object_terms( $v->ID, 'course_type');
			echo '<div class="item_course_type">';
			foreach($terms_type_courses as $terms_course){
				echo $terms_course->name;
			}
			echo '</div>';
			echo '<div class="item_course_duration">';
			echo get_field( "duration", $v->ID );
			echo '</div>';
			$terms_courses = wp_get_object_terms( $v->ID, 'campus');
			echo '<div class="item_campus">';
			foreach($terms_courses as $terms_course){
				echo '<div class="item_campus_circle" title="'.$terms_course->name.'">';
				echo $terms_course->name[0];
				echo '</div>';
			}
			echo '</div>';
			echo '</div>';
		}
		?>
		</div>
	</div>
</div>


