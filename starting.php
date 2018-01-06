$sql_file = 'stockmgt.sql';

$contents = file_get_contents($sql_file);

// Remove C style and inline comments
$comment_patterns = array('/\/\*.*(\n)*.*(\*\/)?/', //C comments
                          '/\s*--.*\n/', //inline comments start with --
                          '/\s*#.*\n/', //inline comments start with #
                          );
$contents = preg_replace($comment_patterns, "\n", $contents);

//Retrieve sql statements
$statements = explode(";\n", $contents);
$statements = preg_replace("/\s/", ' ', $statements);

require_once 'MDB2.php';

$mdb2 =& MDB2::connect('mysql://usr:pw@localhost/dbnam');

foreach ($statements as $query) {
    if (trim($query) != '') {
        echo 'Executing query: ' . $query . "\n";
        $res = $mdb2->exec($query);

        if (PEAR::isError($res)) {
            die($res->getMessage());
        }
    }
}