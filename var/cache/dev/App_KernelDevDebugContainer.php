<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNlzQqLv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNlzQqLv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNlzQqLv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNlzQqLv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNlzQqLv\App_KernelDevDebugContainer([
    'container.build_hash' => 'NlzQqLv',
    'container.build_id' => '65ffa4dc',
    'container.build_time' => 1668717180,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNlzQqLv');
