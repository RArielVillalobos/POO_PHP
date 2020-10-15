<?php


namespace Styde;


class FileLogger
{
    public  function info($message){
        //guardar contenido de mensaje en un archivo
        file_put_contents(
          __DIR__.'/storage/log.txt',
            '('.date('Y-m-d H:i:s').')'.$message."\n",
            FILE_APPEND
        );
    }
}