<?php
	$section = get_query_var('section');
	$separator = get_theme_mod("${section}_separator", 'none');

	if($separator != 'none')
	{
		function generate_zigzag($d=5, $strength=90, $is_rev=false)
		{
			$result = '';
			for($i = 0; $i <= 100; $i+=$d)
			{
				if($i % ($d*2) == 0)
				{
					if($is_rev) {
						$result .= "${i}% 100%, ";
					}else {
						$result .= "${i}% ${strength}%, ";
					}
				}else{
					if($is_rev) {
						$result .= "${i}% ${strength}%, ";
					}else {
						$result .= "${i}% 100%, ";
					}
				}
			}
			return $result;
		}

		echo 'style="';
		$strength = get_theme_mod("${section}_separator_strength", 10);
		$strength = 100 - $strength;

		switch($separator)
		{
			case 'none':
				break;

			case 'line-left':
				echo "clip-path: polygon(0 0, 100% 0, 100% ${strength}%, 0% 100%);";
				break;

			case 'line-right':
				echo "clip-path: polygon(0 0, 100% 0, 100% 100%, 0% ${strength}%);";
				break;

			case 'point':
				echo "clip-path: polygon(50% 100%, 100% ${strength}%, 100% 0, 0 0, 0 ${strength}%);";
				break;

			case 'circle':
				echo "clip-path: circle(${strength}vh at 50% 0);";
				break;

			case 'zigzag-1':
				$zigzag = generate_zigzag(5, $strength);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-2':
				$zigzag = generate_zigzag(5, $strength, true);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-3':
				$zigzag = generate_zigzag(4, $strength);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-4':
				$zigzag = generate_zigzag(4, $strength, true);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-5':
				$zigzag = generate_zigzag(2, $strength);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-6':
				$zigzag = generate_zigzag(2, $strength, true);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-7':
				$zigzag = generate_zigzag(1, $strength);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'zigzag-8':
				$zigzag = generate_zigzag(1, $strength, true);
				echo "clip-path: polygon(${zigzag}	100% 0, 0 0);";
				break;

			case 'paper-left':
				$strength_rev = 100 - $strength;
				echo "border-radius: 0% 100% 0% 100% / ${strength}% 0% 100% ${strength_rev}%";
				break;

			case 'paper-right':
				$strength_rev = 100 - $strength;
				echo "border-radius: 100% 0% 100% 0% / 0% ${strength}% ${strength_rev}% 100%";
				break;

			default:
				break;
		}

		echo '"';
	}
?>
