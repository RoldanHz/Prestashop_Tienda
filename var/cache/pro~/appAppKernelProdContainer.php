<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUxetdQQ\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUxetdQQ/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerUxetdQQ.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerUxetdQQ\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerUxetdQQ\appAppKernelProdContainer([
    'container.build_hash' => 'UxetdQQ',
    'container.build_id' => '845cc944',
    'container.build_time' => 1698979698,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUxetdQQ');