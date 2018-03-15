<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PostMoveFolderRequest.php">
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
 * Request model for postMoveFolder" operation.
 */
class PostMoveFolderRequest
{
    /*
     * Initializes a new instance of the PostMoveFolderRequest class.
     *  
     * @param string $src Source folder path e.g. /Folder1
     * @param string $dest Destination folder path e.g. /Folder2
     * @param string $storage User's source storage name
     * @param string $destStorage User's destination storage name
     */
    public function __construct($src, $dest, $storage = null, $destStorage = null)             
    {
        $this->src = $src;
        $this->dest = $dest;
        $this->storage = $storage;
        $this->destStorage = $destStorage;
    }

    /*
     * Source folder path e.g. /Folder1
     */
    public $src;

    /*
     * Destination folder path e.g. /Folder2
     */
    public $dest;

    /*
     * User's source storage name
     */
    public $storage;

    /*
     * User's destination storage name
     */
    public $destStorage;
}