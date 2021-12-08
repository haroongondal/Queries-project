# Queries-project

I changed nav.html to nav.php, so I could use PHP functions. Without PHP,
clicking a query link would remove the first_name and last_name variables from
the URL string, and the welcome message would disappear.

I created a file within the includes folder called 'display_results_table.php',
which is a generic function for displaying query results as an HTML table. This
way, I don't need to write (or copy/paste) the script for each query.
