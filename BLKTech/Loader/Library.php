<?php
/*
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 */

namespace BLKTech\Loader;
use BLKTech\DataType\Path;
use BLKTech\DataType\URL;

/**
 *
 * @author TheKito < blankitoracing@gmail.com >
 */
 
class Library 
{
    private $namespace;    
    private $path;
    private $url;
    
    public function __construct(Path $namespace, Path $path, URL $url = null) 
    {
        $this->namespace = $namespace;
        $this->path = $path;
        $this->url = $url;
        
        $this->namespace->setDirectorySeparator("\\");        
    }

    public function getNamespace() {return $this->namespace;}
    public function getPath() {return $this->path;}
    public function getUrl() {return $this->url;}



}