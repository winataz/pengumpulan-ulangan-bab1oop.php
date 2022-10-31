<?php

class new construct{

    public$nama;
    public$level;

    public function______Construct($nama,$level)
    {
        $this->nama=$nama;
        $this->level=$level;
    }
}

$obj=new new construct("new constructor","Easy");

echo 'nama judul:'.$obj->name.'<br>';
echo 'level:'.$obj->level;

//output:
//nama judul:"ini class new constructor"
//Level:"Easy"