<?php
namespace Arins\Helpers\Filex;

interface FilexInterface
{
    /**
     * ======================================================
     * 1. uiux get asset from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    function image($data);

    /**
     * ======================================================
     * 2. delete file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    function delete($data);

    /**
     * ======================================================
     * 3. upload file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    function upload($fileName, $fileLocation, $fileObject, $diskDriver, $customFileName);

    /**
     * ======================================================
     * 4. upload file from storage
     *   base on disk driver in config file filesystems.php
     * ====================================================== */
    function uploadTemp($fileObject, $fileTempName, $diskDriver, $customFileName);

    /**
     * ======================================================
     * 5. upload atau hapus file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    function uploadOrRemove($fileName, $fileLocation, $fileObject, $diskDriver, $remove);

    /**
     * ======================================================
     * 6. upload atau copy dan hapus file from storage temp to real path
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    function uploadOrCopyAndRemove($fileName, $fileTempName, $fileLocation, $fileObject, $diskDriver, $remove, $customFileName);
    
}
