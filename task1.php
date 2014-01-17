<?php
	date_default_timezone_set('Asia/Singapore');

	function fbb($start, $end)
	{
		for($i=$start; $i<=$end; $i++)
		{
			if ($i%3 == 0)
				echo 'Fizz';
			
			if ($i%5 == 0)
				echo 'Buzz';
			
			if (($i%3 != 0)&&($i%5 != 0))
				echo $i;
			
			echo ' ';
		}
	}

	function fbb2($start, $end)
	{
		$fb = array();

		for($i=$start; $i<=$end; $i++)
		{
			if ($i%3 == 0)
			{
				$fb[$i] = '1';
				echo 'Fizz';
			}
			
			if ($i%5 == 0)
			{
				$fb[$i] = '1';
				echo 'Buzz';
			}
			
			if (($i%3 != 0)&&($i%5 != 0))
			{
				if (isset($fb[$i-1])&&isset($fb[$i-2]))
				{
					if (($fb[$i-1] == '1')&&($fb[$i-2] == '1'))
						echo 'Bazz';
					else
						echo $i;
				}
				else
					echo $i;
			}
			
			echo ' ';
		}
	}
	
	fbb(12, 16);
	echo '<br /><br />';
	fbb2(4, 11);
?>