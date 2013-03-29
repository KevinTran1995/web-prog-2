<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Search Results</title>
      <style type = "text/css">
         body
            {
               font-family: arial, sans-serif;
               background-color: #f0e68c;
            }
         table
            {
               background-color: #add8e6;
            }
         td
            {
               padding-top: 2px 4px;
               border-width: 1px;
               border-style: inset;
            }
      </style>
   </head>
   <body>
      <?php
         // Connect to MYSQL
         if ( !( $dbconn = mysql_connect( "localhost", "kgfjv", "testing123") ) )
            die( "<p>Could not connect to database.</p></body></html>" );

         // open Contacts database
         if ( !mysql_select_db( "contacts", $dbconn ) )
            die( "<p>Could not open contacts_test database.</p></body></html>" );

         if ($_SERVER['REQUEST_METHOD'] == 'GET')
         {
         	// gets every entry in _GET array and makes variables from them
            extract( $_GET ); // shorthand for	$select = $_GET['select'];

           // make sure to use a default value if none is found
           if (!isset($select))
              $select = '*';

           // build SELECT query string
           $query = 'SELECT ' . $select . ' FROM contacts.address';

           // query Contacts database
           if ( !( $result = mysql_query( $query, $dbconn ) ) )
           {
              print( '<p>Could not execute query! <br />' );
              die( mysql_error() . '</p></body></html>' );
           } // end if
         }
         else if ($_SERVER['REQUEST_METHOD'] == 'POST')
         {
           extract( $_POST );

           // build INSERT query string
           $query = 'INSERT INTO address (firstname, lastname, email) '
                  . "VALUES ('$firstname', '$lastname', '$email')";

           // query Contacts database
           if ( !( $result = mysql_query( $query, $dbconn ) ) )
           {
              print( '<p>Could not execute query! <br />' );
              die( mysql_error() . '</p></body></html>' );
           } // end if

           // build SELECT query string
           $query = 'SELECT * FROM address';

           // query Contacts database
           if ( !( $result = mysql_query( $query, $dbconn ) ) )
           {
              print( '<p>Could not execute query! <br />' );
              die( mysql_error() . '</p></body></html>' );
           } // end if
         }

         mysql_close( $dbconn );
      ?><!-- end PHP script -->
      <h3>Search Results</h3>
      <table>
         <?php
            // fetch each record in result set
            for ( $counter = 0; $row = mysql_fetch_row( $result ); $counter++ )
            {
               // build table to display results
               print( "<tr>" );
               foreach ( $row as $key => $value )
                  print( "<td>$value</td>" );

               print( "</tr>" );
            } // end for
         ?><!-- end PHP script -->
      </table>
      <p>Your search yielded <strong><?php print( "$counter" );?> results</strong>.</p>
   </body>
</html>
