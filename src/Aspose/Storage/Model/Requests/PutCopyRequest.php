<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PutCopyRequest.php">
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
 * Request model for putCopy" operation.
 */
class PutCopyRequest
{
    /*
     * Initializes a new instance of the PutCopyRequest class.
     *  
     * @param string $path Source file's path. Sample: '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     * @param string $newdest Destination file path
     * @param string $versionId Source file's version
     * @param string $storage User's source storage name
     * @param string $destStorage User's destination storage name
     */
    public function __construct($path, $newdest, $versionId = null, $storage = null, $destStorage = null)             
    {
        $this->path = $path;
        $this->newdest = $newdest;
        $this->versionId = $versionId;
        $this->storage = $storage;
        $this->destStorage = $destStorage;
    }

    /*
     * Source file's path. Sample: '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public $path;
	
    /*
     * Destination file path
     */
    public $newdest;
	
    /*
     * Source file's version
     */
    public $versionId;
	
    /*
     * User's source storage name
     */
    public $storage;
	
    /*
     * User's destination storage name
     */
    public $destStorage;
}
