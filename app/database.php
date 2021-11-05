<?php

/**
 * Database Connection 
 */
function connect()
{
    return new mysqli(HOST, USER, PASS, DB);
}


/**
 * Create 
 */
function create($sql)
{
    connect()->query($sql);
}


// slug generate

function slug($name)
{
   $plower = strtolower($name);
   return str_replace(' ', '-', $plower);
}




/**
 * Get all data 
 */
function all($table)
{
    return connect()->query("SELECT * FROM {$table}");
}
