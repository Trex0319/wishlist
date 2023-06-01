<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=wishlist', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'r9wz9RSYYaTbjS7v' // instruction: change this to your database password
    );
}