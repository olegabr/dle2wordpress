<?php

	/**
	 * Transliteration russian to latin
	 * Many thanks for KPETuH here: http://www.softtime.ru/forum/read.php?id_forum=1&id_theme=53318
	 * @param string $string
	 * @return string
	 */
	function encodestring($string) { 
		$table = array( 
					'А' => 'A', 
					'Б' => 'B', 
					'В' => 'V', 
					'Г' => 'G', 
					'Д' => 'D', 
					'Е' => 'E', 
					'Ё' => 'YO', 
					'Ж' => 'ZH', 
					'З' => 'Z', 
					'И' => 'I', 
					'Й' => 'J', 
					'К' => 'K', 
					'Л' => 'L', 
					'М' => 'M', 
					'М' => 'N', 
					'О' => 'O', 
					'П' => 'P', 
					'Р' => 'R', 
					'С' => 'S', 
					'Т' => 'T', 
					'У' => 'U', 
					'Ф' => 'F', 
					'Х' => 'H', 
					'Ц' => 'C', 
					'Ч' => 'CH', 
					'Ш' => 'SH', 
					'Щ' => 'CSH', 
					'Ь' => '', 
					'Ы' => 'Y', 
					'Ъ' => '', 
					'Э' => 'E', 
					'Ю' => 'YU', 
					'Я' => 'YA', 

					'а' => 'a', 
					'б' => 'b', 
					'в' => 'v', 
					'г' => 'g', 
					'д' => 'd', 
					'е' => 'e', 
					'ё' => 'yo', 
					'ж' => 'zh', 
					'з' => 'z', 
					'и' => 'i', 
					'й' => 'j', 
					'к' => 'k', 
					'л' => 'l', 
					'м' => 'm', 
					'н' => 'n', 
					'о' => 'o', 
					'п' => 'p', 
					'р' => 'r', 
					'с' => 's', 
					'т' => 't', 
					'у' => 'u', 
					'ф' => 'f', 
					'х' => 'h', 
					'ц' => 'c', 
					'ч' => 'ch', 
					'ш' => 'sh', 
					'щ' => 'csh', 
					'ь' => '', 
					'ы' => 'y', 
					'ъ' => '', 
					'э' => 'e', 
					'ю' => 'yu', 
					'я' => 'ya', 
		); 

		$output = str_replace( 
			array_keys($table), 
			array_values($table),$string 
		); 

		return $output; 
	} 
