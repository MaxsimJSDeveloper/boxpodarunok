<?php

function getSuccsesPhrases($defaultLang = 'en')
{
	// Lang
	$langCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	// Чтение JSON-файла
	$jsonString = file_get_contents('succses.json');
	// Декодирование JSON-строки в ассоциативный массив
	$phrases = json_decode($jsonString, true);
	$defaultObj = [];


	// Перебираем каждый объект в массиве
	foreach ($phrases as $phrase) {
		// Проверяем наличие кода языка в свойстве lang_code текущего объекта
		if (isset($phrase['lang_code']) && in_array($langCode, $phrase['lang_code'])) {
			// Если найдено совпадение, возвращаем текущий объект
			return $phrase;
		}

		if (isset($phrase['lang_code']) && in_array($defaultLang, $phrase['lang_code'])) {
			// Если найдено совпадение, возвращаем текущий объект
			$defaultObj = $phrase;
		}
	}


	if (!empty($defaultObj) && array_is_list($defaultObj)) {
		return $defaultObj;
	}


	foreach ($phrases as $phrase) {
		if (isset($phrase['lang_code']) && in_array($defaultLang, $phrase['lang_code'])) {
			// Если найдено совпадение, возвращаем текущий объект
			return $phrase;
		}
	}
}
?>