<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtjsn6y\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtjsn6y/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXtjsn6y.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXtjsn6y\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXtjsn6y\appProdProjectContainer([
    'container.build_hash' => 'Xtjsn6y',
    'container.build_id' => 'c6830e1c',
    'container.build_time' => 1575841200,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXtjsn6y');
