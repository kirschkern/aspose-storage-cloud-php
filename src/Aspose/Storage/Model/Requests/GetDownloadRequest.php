<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="GetDownloadRequest.php">
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
namespace Aspose\Storage\Model\Requests;

/*
 * Request model for getDownload" operation.
 */
class GetDownloadRequest
{
    /*
     * Initializes a new instance of the GetDownloadRequest class.
     *  
     * @param string $path Path of the file including the file name and extension e.g. /file.ext
     * @param string $versionId File's version
     * @param string $storage User's storage name
     */
    public function __construct($path, $versionId = null, $storage = null)             
    {
        $this->path = $path;
        $this->versionId = $versionId;
        $this->storage = $storage;
    }

    /*
     * Path of the file including the file name and extension e.g. /file.ext
     */
    public $path;

    /*
     * File's version
     */
    public $versionId;
	
    /*
     * User's storage name
     */
    public $storage;
}