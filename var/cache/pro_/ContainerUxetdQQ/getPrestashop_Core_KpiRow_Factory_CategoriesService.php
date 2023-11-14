<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.kpi_row.factory.categories' shared service.

return $this->services['prestashop.core.kpi_row.factory.categories'] = new \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory([0 => ($this->services['prestashop.adapter.kpi.disabled_categories'] ?? $this->load('getPrestashop_Adapter_Kpi_DisabledCategoriesService.php')), 1 => ($this->services['prestashop.adapter.kpi.empty_categories'] ?? $this->load('getPrestashop_Adapter_Kpi_EmptyCategoriesService.php')), 2 => ($this->services['prestashop.adapter.kpi.top_category'] ?? $this->load('getPrestashop_Adapter_Kpi_TopCategoryService.php')), 3 => ($this->services['prestashop.adapter.kpi.average_products_in_category'] ?? $this->load('getPrestashop_Adapter_Kpi_AverageProductsInCategoryService.php'))], ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), 'categories');