<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container76yASCx\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container76yASCx/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container76yASCx.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container76yASCx\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container76yASCx\appAppKernelProdContainer([
    'container.build_hash' => '76yASCx',
    'container.build_id' => '35202119',
    'container.build_time' => 1698979750,
], __DIR__.\DIRECTORY_SEPARATOR.'Container76yASCx');
