<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
    # Connect to the database.
    require ('db_connection.php');

    # Initialize an error array.
    $errors = array();

    # Check for title .
    if ( empty( $_POST[ 'title' ] ) )
    { $errors[] = 'Enter title.' ; }
    else
    { $t = mysqli_real_escape_string( $link, trim( $_POST[ 'title' ] ) ) ; }

    # Check for description.
    if (empty( $_POST[ 'description' ] ) )
    { $errors[] = 'Enter description.' ; }
    else
    { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'description' ] ) ) ; }

    # Check for price.
    if (empty( $_POST[ 'price' ] ) )
    { $errors[] = 'Enter price.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'price' ] ) ) ; }

    # Check for color.
    if (empty( $_POST[ 'color' ] ) )
    { $errors[] = 'Enter color.' ; }
    else
    { $c = mysqli_real_escape_string( $link, trim( $_POST[ 'color' ] ) ) ; }

    # On success data into my_table on database.
    if ( empty( $errors ) )
    {
        $q = "INSERT INTO product (title, description, price, color) 
	VALUES ('$t','$d', '$p', '$c' )";
        $r = @mysqli_query ( $link, $q ) ;
        if ($r)
        { echo '<a href="index.php">Return To Home Page</a>'; }

        # Close database connection.
        mysqli_close($link);

        exit();
    }

    # Or report errors.
    else
    {
        echo '<p>The following error(s) occurred:</p>' ;
        foreach ( $errors as $msg )
        { echo "$msg<br>" ; }
        echo '<p>Please try again.</p></div>';
        # Close database connection.
        mysqli_close( $link );

    }
}
?>


