<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVLxSQ0m\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVLxSQ0m/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVLxSQ0m.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVLxSQ0m\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVLxSQ0m\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VLxSQ0m',
    'container.build_id' => 'ea7bc737',
    'container.build_time' => 1595139882,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVLxSQ0m');
