<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Path to directory for storing log files
	|--------------------------------------------------------------------------
	|
	| This is path to directory storing your log files. In Laravel
	| 4.2, normally this path is app/storage/logs
	|
	*/

	'path' => storage_path('logs'),

	/*
	|--------------------------------------------------------------------------
	| Default log filename
	|--------------------------------------------------------------------------
	|
	| This is default log filename that you want read from
	| automatically. In Laravel 4.2, normally this name is
	| 'laravel.log'. This string is compatible with format string in
	| sprintf() function in PHP, it's mean you can set '*.*' to read
	| all log files
	|
	*/

	'filename' => '*.*',

	/*
	|--------------------------------------------------------------------------
	| Environment's log to read
	|--------------------------------------------------------------------------
	|
	| This is information to limit reading logs entry on specify
	| environment. Example: local, product... You can set null if want
	| read from all environment
	|
	*/

	'environment' => null,

	/*
	|--------------------------------------------------------------------------
	| Level's log to read
	|--------------------------------------------------------------------------
	|
	| This array is information to limit reading logs entry from
	| specify levels. Example: ['error', 'warning']. You can set null
	| if want read from all levels.
	|
	*/

	'level' => null,

	/*
	|--------------------------------------------------------------------------
	| Default sort field
	|--------------------------------------------------------------------------
	|
	| This is default field to sort by when reading
	|
	*/

	'order_by_field' => 'date',

	/*
	|--------------------------------------------------------------------------
	| Default sort direction
	|--------------------------------------------------------------------------
	|
	| This is default direction to sort by when reading
	|
	*/

	'order_by_direction' => 'asc'

);