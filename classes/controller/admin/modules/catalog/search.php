<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules_Catalog_Search extends Controller_Admin_Front {

	protected $menu_active_item = 'modules';
	protected $title = 'Catalog search';
	protected $sub_title = '(administrator)';
	
	public $layout_aside = NULL;

	public function before()
	{
		parent::before();
		
		$this->title = __($this->title);
		$this->sub_title = __($this->sub_title);
	}
	
	public function action_index()
	{
		// поиск по элементам (название, артикул)
		// поиск по номенклатуре (название, артикул)
		
		// если есть права доступа к модулю Каталог/Номенклатура и есть право редактировать,
		// то ссылка на "Редактировать"
		// сслыка на просмотр карточки товара/номенклатуры
		
		
		$this->template
			->set_filename('modules/catalog-search/list')
		;
	}
	
}
