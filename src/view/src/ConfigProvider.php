<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\View;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                RenderInterface::class => Render::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config of view.',
                    'source' => __DIR__ . '/../publish/view.php',
                    'destination' => BASE_PATH . '/config/autoload/view.php',
                ],
            ],
        ];
    }
}
