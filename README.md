# Small REST API for Kohana PHP Framework

[Kohana](http://kohanaframework.org/)
Made for v3.3.6

## Steps

1. Import Database(kohana.sql)
2. Add Classes(Api.php and Index.php) to  folder application/classes/Controller
3. Add Classes(Klass.php)  to  folder application/classes/Model
4. Add View(v_index.php)  to  folder application/views
5. Add database config(database.php)  to  folder application/config
6. Edit bootstrap.php:
```
Kohana::init(array(
	'base_url'   => '/kohana/',
    'index_file' => false,
));


Kohana::modules(array(
...
	'database'   => MODPATH.'database',   // Database access
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
));


Route::set('api', 'api/<key>(/<action>(/<id>))')
	->defaults(array(
		'controller' => 'api',
		'action'     => 'index',
	));
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'index',
		'action'     => 'index',
	));
```	
## Usage

API access-key is static now - 737.

Data in JSON format.

* All items of Database - url - /api/<key>/
* Get one item - url - /api/<key>/get/<id>
* Change status "active/deactive" - url - /api/<key>/active/<id> 