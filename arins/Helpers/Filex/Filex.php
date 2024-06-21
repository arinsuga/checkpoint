<?php

namespace Arins\Helpers\Filex;

use Arins\Helpers\Filex\FilexInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Filex implements FilexInterface
{
    protected $result;

    /**
     * Comment template.
     *
     * @param  boolean     $par1
     * @param  int         $par2
     * @param  string      $par3
     * @param  string|null $par4
     * @param  mixed|null  $par5
     * @return array|string|int|boolean
     */


    public function __construct()
    {
    }

    /**
     * ======================================================
     * 1. uiux get asset from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    public function image($data, $diskDriver='public')
    {
        if (Storage::disk($diskDriver)->exists($data)) {
            // ...
            return asset(Storage::url($data));
        }
        else {
            return asset(config('a1.uiux.blank_image'));
        }
    }

    /**
     * ======================================================
     * 2. delete file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    public function delete($data, $diskDriver='public')
    {
        Storage::disk($diskDriver)->delete($data);
    }

    /**
     * ======================================================
     * 3. upload file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    public function upload($fileName, $fileLocation, $fileObject, $diskDriver='public', $customFileName='')
    {
        $path = $fileName;
        if ($fileObject) {
            $fileInfo = explode('.', $fileObject->getClientOriginalName());
            $fileType = $fileInfo[count($fileInfo)-1];
            $newCustomFileName = $customFileName . '-' . Str::random(40) . '.' . $fileType;

            //return dd($newCustomFileName);
    
            if ( ($fileName == '') || ($fileName == null) ) {
                
                if ( ($customFileName == '') || ($customFileName == null) ) {
                    $path = Storage::disk($diskDriver)
                    ->putFile($fileLocation, $fileObject);

                } else {

                    $path = Storage::disk($diskDriver)
                    ->putFileAs($fileLocation, $fileObject, $newCustomFileName);

                } //end if

            }
            else {
                $path = Storage::disk($diskDriver)
                        ->putFile($fileLocation, $fileObject);
                $this->delete($fileName, $diskDriver);
            }
        } else {
            //$this->delete($fileName, $diskDriver);
        }

        return $path;
    }

    /**
     * ======================================================
     * 4. upload file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    public function uploadTemp($fileObject, $fileTempName, $diskDriver='public', $customFileName='')
    {
        $path = '';
        //create temporary uploaded image
        if ($fileObject) {
            $path = $this->upload(null, 'temp', $fileObject, $diskDriver, $customFileName);
            Filex::delete($fileTempName);
        } else {
            $path = $fileTempName;
        } //end if

        return $path;
    }

    /**
     * ======================================================
     * 5. upload atau hapus file from storage
     *    base on disk driver in config file filesystems.php
     * ====================================================== */
    public function uploadOrRemove($fileName, $fileLocation, $fileObject, $diskDriver, $remove)
    {
        if ($remove == 'true') {
            $this->delete($fileName, $diskDriver);
            return '';
        } else {
            return $this->upload($fileName, $fileLocation, $fileObject, $diskDriver);
        }
    }

    /**
     * ======================================================
     * 6. upload atau copy file from storage temp
     *    to real path base on disk driver in config file
     *    filesystems.php
     * ====================================================== */
    function uploadOrCopy($fileName, $fileSourceName, $fileTargetLocation, $fileObject, $diskDriver, $remove)
    {
        //code here
        $path = '';
        if ($fileObject) {

            $path = $this->upload($fileName, $fileTargetLocation, $fileObject, $diskDriver);

        } elseif ($fileSourceName) {

            $nPos = strpos($fileSourceName, '/');
            $nPos = ($nPos != '' ? $nPos+1 : $nPos);
            
            $fileNewLocation = $fileTargetLocation.'/'.substr($fileSourceName, $nPos);

            $path = Storage::disk($diskDriver)
            ->copy($fileSourceName, $fileNewLocation);

            $path = $fileNewLocation;

        } //end if
        
        return $path;
    }

    /**
     * ======================================================
     * 6. upload atau copy dan hapus file from storage temp
     *    to real path base on disk driver in config file
     *    filesystems.php
     * ====================================================== */
    function uploadOrCopyAndRemove($fileName, $fileSourceName, $fileTargetLocation, $fileObject, $diskDriver, $remove, $customFileName)
    {
        //code here
        $path = '';
        if ($fileObject) {
            $path = $this->upload($fileName, $fileTargetLocation, $fileObject, $diskDriver, $customFileName);
            //return dd('$fileSourceName = ' . $fileSourceName . ' - $fileTargetLocation = ' . $fileTargetLocation);
        } elseif ($fileSourceName) {
            $nPos = strpos($fileSourceName, '/');
            $nPos = ($nPos != '' ? $nPos+1 : $nPos);
            
            $fileNewLocation = $fileTargetLocation.'/'.substr($fileSourceName, $nPos);

            $path = Storage::disk($diskDriver)
            ->copy($fileSourceName, $fileNewLocation);

            $path = $fileNewLocation;

        } elseif ($fileName) {

            $path = $fileName;
            
        } //end if
        
        $this->delete($fileSourceName, $diskDriver);

        return $path;
    }

}
