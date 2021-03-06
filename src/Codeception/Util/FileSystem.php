<?php

namespace Codeception\Util;

/**
 * @author tiger
 */
class FileSystem
{
    public static function doEmptyDir($path)
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($path),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $path) {
            if ($path->isDir()) {
                $dir = (string) $path;
                if (basename($dir) === '.' || basename($dir) === '..') {
                    continue;
                }
                rmdir($dir);
            } else {
                unlink($path->__toString());
            }
        }
    }
}
