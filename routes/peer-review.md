P3 Peer Review

+ Reviewer's name: Chiwen Lai
+ Reviwee's name: Leo Landau
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/llandau/p3>*


1. Interface


+The text is in black, so the words are easy to read, and the interface is clear and is listed well in order.
+ Again, each function is very clear to select, but personally I am not familiar with stocks, so I found it hard to choose when it comes with the terms.  
+ The number input box is working perfectly. You can also select number by using the scroll down up and down the numbers. everything is very clean and neat.
+ Darker the feedbacks color, because there's alot of content informations to read. if the texts were darker or boldEr. the feedback may pop out more.


## 2. Functional testing

+ warning pops up while submitting a form without entering any data
+ the warning will pop up when only submitting part of the form. + The warning will pop up when entering the negative number/ no number/ or number thats not between 1-365.
+ 404 not found when access a URL on the site that likely does not exist.
+ the warning signs shows at each missing column, helps user to see the the missing data.
+ When try entering the alphabet in the number only column, the textarea stopped user from entering alphabets instead.


## 3. Code: Routes
+ routes/web.php is clean, no issues noted.

## 4. Code: Views
+ Template inheritance has been used.
+ No separation of concern issues.
+ use of PHP and Blade very well. I think the developer knows what he's doing, he made everything very neat and seems very simple to understand.  

+ Did they use any Blade syntax/techniques you were unfamiliar with?

## 5. Code: General
+ Case conventions: The developer used lowerCamelCase
+ Rendered html code passed the validation at https://validator.w3.org

+ Good separation of stock predicting logic and form process code. Easy for other stock engineer to edit the code while not need to look at the whole code.

+ The returned stock message can be displayed in a better format.

+ well used of returning error message on the validation of radio button.

+ template inheritance is used.

+ The variable $validForm should have a line between the above code for the readibility.

+ StockDataRequest and StockData class can be merged into one class since they are all about stock logic.

+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ There are some codes that call external functions to get the stock data, but the code only has brief explanation.
For example,
       // get the stock data from the Laravel-specific database_path
       $stockData = new StockData(database_path("stock_data.json"));
       $data = $stockData->getData();
       $stockTickersStr = implode(",", array_keys($data));
Maybe explain more about what stock_data.json is and how to turn the data into non-static value.

+ The project is based on real life financial software which includes complicated algorithm. I could improve my project
with some basic animal health indicator based on their weight and height and other physical condition as well, as extension of p3 for p4 perhaps.

+ Are there any parts of the code that you don't understand?
There are external classes and many php functions used in the mainConroller , but I sorted out after thorough review.
However, I have no idea where stock_data.json is about. Moreover, StockData class could have more explanation about
the logic rather than only saying "using machine learning".

## 6. Misc
The project looks very nice and neat. I just started in this field, but i believe he fulfilled the requirement of the project. Very nice work but the interface can be edited a little bit more.
