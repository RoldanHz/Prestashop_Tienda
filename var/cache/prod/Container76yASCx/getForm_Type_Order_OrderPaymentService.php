<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.order_payment' shared service.

return $this->services['form.type.order.order_payment'] = new \PrestaShopBundle\Form\Admin\Sell\Order\OrderPaymentType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.form.choice_provider.currency_symbol_by_id'] ?? ($this->services['prestashop.adapter.form.choice_provider.currency_symbol_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CurrencySymbolByIdChoiceProvider())), ($this->services['prestashop.adapter.form.choice_provider.order_invoice_by_id'] ?? $this->load('getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService.php')), ($this->services['prestashop.adapter.form.choice_provider.installed_payment_modules'] ?? ($this->services['prestashop.adapter.form.choice_provider.installed_payment_modules'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\InstalledPaymentModulesChoiceProvider())), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->id, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id);