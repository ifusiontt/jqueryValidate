<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/jqueryValidate/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/jqueryvalidate')) {
            $cache->deleteTree(
                $dev . 'assets/components/jqueryvalidate/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/jqueryvalidate/', $dev . 'assets/components/jqueryvalidate');
        }
        if (!is_link($dev . 'core/components/jqueryvalidate')) {
            $cache->deleteTree(
                $dev . 'core/components/jqueryvalidate/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/jqueryvalidate/', $dev . 'core/components/jqueryvalidate');
        }
    }
}

return true;