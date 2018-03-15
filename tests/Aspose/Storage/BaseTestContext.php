<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="BaseTestContext.php">
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
use Aspose\Storage\Api\StorageApi;
use PHPUnit_Framework_TestCase;
use Aspose\Storage\Configuration;

abstract class BaseTestContext extends PHPUnit_Framework_TestCase
{
    protected $storageApi;
    protected $config;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud
        //      (free registration is required).
        $this->config = new Configuration();
        $this->config->setAppKey($config["AppKey"]);
        $this->config->setAppSid($config["AppSID"]);
        $this->config->setHost($config["ApiBaseUrl"]);
        $this->storageApi = new StorageApi($this->config);
    }
}