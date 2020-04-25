<?php
	$shape_section = get_query_var('shape_section', '');
	if(!empty($shape_section))
	{
		$shape = get_theme_mod("${shape_section}_shape", 'none');

		//Reset Shape Section
		set_query_var('shape_section', '');

		if($shape != 'none')
		{
			echo 'style="';
			$strength = get_theme_mod("${shape_section}_shape_strength", 10);

			switch($shape)
			{
				case 'none':
					break;

				case 'rounded':
					$strength /= 2;
					echo "border-radius: ${strength}%;";
					break;

				case 'line-top-left':
					echo "clip-path: polygon(0 ${strength}%, 100% 0, 100% 100%, 0 100%);";
					break;

				case 'line-top-right':
					echo "clip-path: polygon(0 0, 100% ${strength}%, 100% 100%, 0 100%);";
					break;

				case 'line-bottom-left':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0 0, 100% 0, 100% 100%, 0% ${strength_rev}%);";
					break;

				case 'line-bottom-right':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0 0, 100% 0, 100% ${strength_rev}%, 0% 100%);";
					break;

				case 'line-both-left':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0 0, 100% ${strength}%, 100% 100%, 0 ${strength_rev}%);";
					break;

				case 'line-both-right':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0 ${strength}%, 100% 0, 100% ${strength_rev}%, 0 100%);";
					break;

				case 'point-up':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0 ${strength}%, 50% 0, 100% ${strength}%, 100% 100%, 0% 100%);";
					break;

				case 'point-down':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(50% 100%, 100% ${strength_rev}%, 100% 0, 0 0, 0 ${strength_rev}%);";
					break;

				case 'point-left':
					echo "clip-path: polygon(${strength}% 0, 100% 0, 100% 100%, ${strength}% 100%, 0 51%);";
					break;

				case 'point-right':
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(0% 0%, ${strength_rev}% 0, 100% 50%, ${strength_rev}% 100%, 0% 100%);";
					break;

				case 'circle-up':
					$strength = 100 - $strength;
					echo "clip-path: circle(${strength}% at 50% 0);";
					break;

				case 'circle-down':
					$strength = 100 - $strength;
					echo "clip-path: circle(${strength}% at 50% 100%);";
					break;

				case 'circle-full':
					$strength = 100 - $strength;
					$strength /= 2;
					echo "clip-path: circle(${strength}% at 50% 50%);";
					break;

				case 'paper-top-left':
					$strength_rev = 100 - $strength;
					echo "border-radius: 100% 0% 100% 0% / ${strength}% 100% 0% ${strength_rev}%";
					break;

				case 'paper-top-right':
					$strength_rev = 100 - $strength;
					echo "border-radius: 0% 100% 0% 100% / 100% ${strength}% ${strength_rev}% 0%";
					break;

				case 'paper-bottom-left':
					$strength_rev = 100 - $strength;
					echo "border-radius: 0% 100% 0% 100% / ${strength_rev}% 0% 100% ${strength}%";
					break;

				case 'paper-bottom-right':
					$strength_rev = 100 - $strength;
					echo "border-radius: 100% 0% 100% 0% / 0% ${strength_rev}% ${strength}% 100%";
					break;

				case 'trapezoid-up':
					$strength /= 2;
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(${strength}% 0, ${strength_rev}% 0, 100% 100%, 0% 100%);";
					break;

				case 'trapezoid-down':
					$strength /= 2;
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(${strength}% 100%, ${strength_rev}% 100%, 100% 0, 0 0);";
					break;

				case 'rhombus':
					$strength /= 2;
					$strength_rev = 100 - $strength;
					echo "clip-path: polygon(50% ${strength}%, ${strength_rev}% 50%, 50% ${strength_rev}%, ${strength}% 50%);";
					break;

				case 'frame':
					$strength /= 2;
					$strength_rev = 100 - $strength; ?>
						clip-path: polygon(
							0% 0%,
							0% 100%,
							<?php echo $strength; ?>% 100%,
							<?php echo $strength; ?>% <?php echo $strength; ?>%,
							<?php echo $strength_rev; ?>% <?php echo $strength; ?>%,
							<?php echo $strength_rev; ?>% <?php echo $strength_rev; ?>%,
							<?php echo $strength; ?>% <?php echo $strength_rev; ?>%,
							<?php echo $strength; ?>% 100%,
							100% 100%,
							100% 0%
						);
					<?php
					break;

				case 'inset':
					$strength /= 2;
					echo "clip-path: inset(${strength}% ${strength}% ${strength}% ${strength}%);";
					break;

				case 'fancy':
					$strength = 100 - $strength;
					$strength /= 100;

					$str_1 = rand(0, 100);
					$str_1_rev = 100 - $str_1;
					$str_2 = rand(0, 100);
					$str_2_rev = 100 - $str_2;
					$str_3 = rand(0, 100);
					$str_3_rev = 100 - $str_3;
					$str_4 = rand(0, 100);
					$str_4_rev = 100 - $str_4;

					echo "border-radius: ${str_1}% ${str_1_rev}% ${str_2}% ${str_2_rev}% / ${str_3}% ${str_4}% ${str_4_rev}% ${str_3_rev}%;";
					echo "transform: scaleX(${strength}) scaleY(${strength});";
					break;

				default:
					break;
			}

			echo '"';
		}
	}
?>
