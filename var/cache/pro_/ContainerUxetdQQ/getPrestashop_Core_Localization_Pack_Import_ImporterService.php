<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.localization.pack.import.importer' shared service.

return $this->services['prestashop.core.localization.pack.import.importer'] = new \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImporter(($this->services['prestashop.core.localization.pack.loader.remote'] ?? $this->load('getPrestashop_Core_Localization_Pack_Loader_RemoteService.php')), ($this->services['prestashop.core.localization.pack.loader.local'] ?? $this->load('getPrestashop_Core_Localization_Pack_Loader_LocalService.php')), ($this->services['prestashop.core.localozation.pack.factory.localization_pack'] ?? ($this->services['prestashop.core.localozation.pack.factory.localization_pack'] = new \PrestaShop\PrestaShop\Core\Localization\Pack\Factory\LocalizationPackFactory())), ($this->services['translator'] ?? $this->getTranslatorService()));
