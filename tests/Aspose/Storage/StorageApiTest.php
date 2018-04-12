<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="Aspose\Storage\StorageApiTest.php">
*   Copyright (c) 2018 Aspose.Storage for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
* 
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
* 
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Storage\Test;


use Aspose\Storage\Model\Requests;
use PHPUnit\Framework\Assert;

require_once "BaseTestContext.php";

class StorageApiTest extends BaseTestContext
{
    /**
     * Test case for putCreate
     *
     * Create a specific file.
     *
     */
    public function testPutCreate()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder/FileTest1.pdf";
        $versionId = null;
        $storage = "First Storage";
        $request = new Requests\GetDownloadRequest($path, $versionId, $storage);

        $result = $this->storageApi->getDownload($request);
        Assert::assertNotNull($result, "Error while downloading document");
        $file = $result;

        $path = "folder1/FileTest1.pdf";
        $version_id = null;
        $storage = "First Storage";
        $request = new Requests\PutCreateRequest($path, $file, $version_id, $storage);

        $result = $this->storageApi->putCreate($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for getDownload
     *
     * Download a specific file.
     *
     */
    public function testGetDownload()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder1/FileTest1.pdf";
        $versionId = null;
        $storage = "First Storage";
        $request = new Requests\GetDownloadRequest($path, $versionId, $storage);

        $result = $this->storageApi->getDownload($request);
        Assert::assertNotNull($result, "Error while downloading document");

    }

    /**
     * Test case for deleteFile
     *
     * Remove a specific file.
     *
     */
    public function testDeleteFile()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder1/FileTest1.pdf";
        $versionId = null;
        $storage = "First Storage";
        $request = new Requests\DeleteFileRequest($path, $versionId, $storage);

        $result = $this->storageApi->deleteFile($request);
        Assert::assertEquals(200, $result->getCode());
    }

    /**
     * Test case for putCopy
     *
     * Copy a specific file.
     *
     */
    public function testPutCopy()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder/FileTest1.pdf";
        $newdest = "/folder2/FileTest1.pdf";
        $versionId = null;
        $storage = "First Storage";
        $destStorage = "First Storage";
        $request = new Requests\PutCopyRequest($path, $newdest, $versionId, $storage, $destStorage);

        $result = $this->storageApi->putCopy($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for postMoveFile
     *
     * Move a specific file.
     *
     */
    public function testPostMoveFile()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $src = "folder2/FileTest1.pdf";
        $dest = "/folder3/folder2/FileTest1.pdf";
        $versionId = null;
        $storage = "First Storage";
        $destStorage = "First Storage";
        $request = new Requests\PostMoveFileRequest($src, $dest, $versionId, $storage, $destStorage);

        $result = $this->storageApi->postMoveFile($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for putCreate
     *
     * Create a specific folder.
     *
     */
    public function testPutCreateFolder()
    {

        $path = "folder4";
        $storage = "First Storage";
        $destStorage = "First Storage";
        $request = new Requests\PutCreateFolderRequest($path, $storage, $destStorage);

        $result = $this->storageApi->PutCreateFolder($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for getListFiles
     *
     * Get the file listing of a specific folder.
     *
     */
    public function testGetListFiles()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder3";
        $storage = "First Storage";
        $request = new Requests\GetListFilesRequest($path, $storage);

        $result = $this->storageApi->getListFiles($request);
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getFiles());
    }
    /**
     * Test case for deleteFolder
     *
     * Remove a specific folder.
     *
     */
    public function testDeleteFolder()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder4";
        $storage = "First Storage";
        $recursive = true;
        $request = new Requests\DeleteFolderRequest($path, $storage, $recursive);

        $result = $this->storageApi->deleteFolder($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for putCopyFolder
     *
     * Copy a folder.
     *
     */
    public function testPutCopyFolder()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder3";
        $newdest = "folder5/folder3";
        $storage = "First Storage";
        $dest_storage = "First Storage";
        $request = new Requests\PutCopyFolderRequest($path, $newdest, $storage, $dest_storage);

        $result = $this->storageApi->putCopyFolder($request);
        Assert::assertEquals(200, $result->getCode());

    }
    /**
     * Test case for postMoveFolder
     *
     * Move a specific folder.
     *
     */
    public function testPostMoveFolder()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $src = "folder3";
        $dest = "folder6/folder3";
        $storage = "First Storage";
        $dest_storage = "First Storage";
        $request = new Requests\PostMoveFolderRequest($src, $dest, $storage, $dest_storage);

        $result = $this->storageApi->postMoveFolder($request);
        Assert::assertEquals(200, $result->getCode());

    }

    /**
     * Test case for getDiscUsage
     *
     * Check the disk usage of the current account.
     *
     */
    public function testGetDiscUsage()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $storage = "First Storage";
        $request = new Requests\GetDiscUsageRequest($storage);

        $result = $this->storageApi->getDiscUsage($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
        Assert::assertNotNull(json_decode($result->getDiscUsage()));
    }

    /**
     * Test case for getIsExist
     *
     * Check if a specific file or folder exists.
     *
     */
    public function testGetIsExist()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder6";
        $versionId = null;
        $storage = "First Storage";
        $request = new Requests\GetIsExistRequest($path, $versionId, $storage);

        $result = $this->storageApi->getIsExist($request);
        Assert::assertEquals(200, $result->getCode());
        Assert::assertTrue($result->getFileExist()["isExist"]);
    }

    /**
     * Test case for getIsStorageExist
     *
     * Check if storage exists.
     *
     */
    public function testGetIsStorageExist()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $name = "First Storage";
        $request = new Requests\GetIsStorageExistRequest($name);

        $result = $this->storageApi->getIsStorageExist($request);
        Assert::assertEquals(200, $result->getCode());
        Assert::assertTrue($result->getIsExist());
    }

    /**
     * Test case for getListFileVersions
     *
     * Get the file's versions list.
     *
     */
    public function testGetListFileVersions()
    {
        //$this->storageApi->getConfig()->setDebug(true);
        $path = "folder/TestFile1.pdf";
        $storage = "First Storage";
        $request = new Requests\GetListFileVersionsRequest($path, $storage);

        $result = $this->storageApi->getListFileVersions($request);
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getFileVersions());

    }
}
