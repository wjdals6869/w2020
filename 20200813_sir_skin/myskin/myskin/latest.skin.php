<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="section">
	<div class="section_title">
		<h3><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h3>
		<a href="<?php echo get_pretty_url($bo_table); ?>" class="more_btn">more</a>
	</div>
	<div class="section_content">
		<ul class="news_list">
			<?php for ($i=0; $i<$list_count; $i++) {  ?>
			<li>
			<a href="<?echo $list[$i]['href']; ?>">
					<h4 class="news_title"><?echo $list[$i]['subject'];?></h4>
					<span class="date">
						<?php echo $list[$i]['datetime2'] ?></span>
					</span>
				</a>
				</li>
				<?php }  ?>
				<?php if ($list_count == 0) { //게시물이 없을 때  ?>
				<li class="empty_li">게시물이 없습니다.</li>
				<?php }  ?>

		</ul>
	</div>
</div>
