<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PutCreateRequest.php">
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
 * Request model for putCreate" operation.
 */
class PutCreateRequest
{
    /*
     * Initializes a new instance of the PutCreateRequest class.
     *  
     * @param string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext
     * @param \SplFileObject $file File to upload
     * @param string $versionId Source file's version
     * @param string $storage User's storage name
     */
    public function __construct($path, $file, $versionId = null, $storage = null)             
    {
        $this->path = $path;
        $this->file = $file;
        $this->versionId = $versionId;
        $this->storage = $storage;
    }

    /*
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext
     */
    public $path;
	
    /*
     * File to upload
     */
    public $file;
	
    /*
     * Source file's version
     */
    public $versionId;
	
    /*
     * User's storage name
     */
    public $storage;
}
