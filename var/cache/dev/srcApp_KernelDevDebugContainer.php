<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNm58uNH\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNm58uNH/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNm58uNH.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNm58uNH\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNm58uNH\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Nm58uNH',
    'container.build_id' => 'ffd1e8f0',
    'container.build_time' => 1594402025,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNm58uNH');
