<strong>
    databaseconnected
</strong>
<?php
try {
    DB::connection()->getPDO();
    echo DB::connection()->getDatabaseName();
} catch (\Throwable $th) {
    //throw $th;
    echo "null";
}

?>