**Assignment-17**

1\.Explain what Laravel's query builder is and how it provides a simple and elegant way to interact with databases.

Answer:   Laravel's query builder is a feature that provides a simple and elegant way to interact with databases in the Laravel framework. It allows developers to build database queries using a fluent, chainable interface. The query builder abstracts the database system, offers methods for constructing queries, handles parameter binding, and integrates with the Eloquent ORM. It is database agnostic and supports various engines. The query builder improves code readability, enhances security, and provides query logging and debugging capabilities. Overall, it streamlines the database interaction process and makes development more efficient.

2\.Write the code to retrieve the "excerpt" and "description" columns from the "posts" table using Laravel's query builder. Store the result in the \$posts variable. Print the $posts variable.

Answer:

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.001.png)






3\.Describe the purpose of the distinct() method in Laravel's query builder. How is it used in conjunction with the select() method?

Answer:    The **distinct()** method is used to retrieve unique values from a column or combination of columns in the query result. 

the **distinct()** method in conjunction with the **select()** method, allows to specify the columns and retrieve only unique values or combinations. We can select single or multiple columns in **select()** to find out the unique values based on the given columns. It enables to filter out duplicates and obtain distinct results directly from the query.

4\.Write the code to retrieve the first record from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the \$posts variable. Print the "description" column of the $posts variable.

Answer:  

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.002.png)




5\.Write the code to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the \$posts variable. Print the $posts variable.

Answer:

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.003.png)





6\.Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?

Answer:   The **first()** method fetches the first record that matches the query criteria while the **find()** method fetches a record by its primary key. Both methods are used to retrieves single record but **first()** method works based on **query condition**, while **find()** methods works based on **primary key value**.





7\.Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the \$posts variable. Print the $posts variable.

Answer: 

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.004.png)


8\.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is\_published" column to true and the "min\_to\_read" column to 2. Print the result of the insert operation.

Answer:

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.005.png)

9\.Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.

Answer:

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.006.png)

10\.Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.

Answer:

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.007.png)


11\.Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.

Answer:

The aggregate methods in laravel query builder are used to perform calculations on the values of specific columns in a table. Aggregate methods are used to generate reports, calculating statistics and many other kinds of calculation purposed works. There are several aggregate methods in Laravel query builders these are: 

- **count()** : The count() method returns the total number of rows in a table based on the query criteria.

$totalPosts = DB::table(‘posts’)->count();

`	`In this example count() method will return the total number of rows in posts table.

- **sum()** : The sum() method add the total values of a specific column in a table and returns the sum.

$totalReadTime = DB::table(‘posts)->sum(‘min\_to\_read);

`	`In this example sum method will return the total read time of all the posts in posts table.

- **avg():** The avg() method calculates and returns the values from a specific column in a table.

$avgReadTime = DB::table(‘posts’)->avg(‘min\_to\_read’);

`	 `In this example avg() method will return the total read time for all of the posts.

- **max() :** The max() method calculates and returns the biggest value from a specific column in a table.

$maxReadTime = DB::table(‘posts’)->max(‘min\_to\_read’);

`	 `Here max() method will return the maximum values from min\_to\_read column in posts table.

- **min() :**  The min() method calculates and returns the minimum value from a specific column in a table.

$minReadTime = DB::table(‘posts’)->min(‘min\_to\_read’);

`	`Here min() method will return the minimum values from min\_to\_read column in posts table



12\.Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.

Answer:   The **whereNot()** method in Laravel's query builder is used to add a "not equal" condition to a query. It allows to retrieve records where a specific column's value is not equal to a given value or does not match a set of values. It is useful for excluding specific values or a set of values from the query results.





![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.008.png)

Here is a example code snippet of whereNot() method. Here the code will return all records excepts which records values of min\_to\_read value is 5. 

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.009.png)

Fig: Output of whereNot() code snippet





13\.Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?

Answer:  The exists() method returns true if at least one record matches the query criteria and false otherwise. This method can be used to check if any records exist that satisfy specific conditions.

`	`![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.010.png)

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.011.png)

In this example we can see the query try to check if any posts record with id of 3 exists or not. In the output we can show as there is no such id so exists() return false.

The **doesntExist()** method returns true if no records match the query criteria, and false if there is at least one matching record. It is the negation of the exists() method.

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.012.png)

In this example we try to insert new records if id of 3 does not exists in posts table. As we don’t have id of ‘3’ in posts table as shown in previous example so **doesntExist()** return true hence new data is inserted with id of  ‘3’. 

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.013.png)

Figure: output of **doesntExist**() code snippet


14\.Write the code to retrieve records from the "posts" table where the "min\_to\_read" column is between 1 and 5 using Laravel's query builder. Store the result in the \$posts variable. Print the $posts variable.

Answer: 

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.014.png)

15\.Write the code to increment the "min\_to\_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.

Answer: 

![](Aspose.Words.a61831be-3c3d-41a6-839f-19525ec70cb5.015.png)
