<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBtdxbga\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBtdxbga/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBtdxbga.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBtdxbga\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerBtdxbga\srcApp_KernelProdContainer([
    'container.build_hash' => 'Btdxbga',
    'container.build_id' => 'cb755de1',
    'container.build_time' => 1655493346,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBtdxbga');
