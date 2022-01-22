# GP3: apple_tree_managment_system
Uses phpMyAdmin to store information related to trees, orchards which can be selected by customers upon signing up and logging in as a user.

Stores user details on relevant table schema and is only accesible by the 'head grower'. 

Growers (employees) have the ability to manipulate table schemas relevant to trees and orchards

General users can only select trees, orchards, no. of trees/orchards, location to grow and so forth etc... 

User freindly - includes disability features i.e. automatic speech recognition of text on screen for blind/poor sighted and dyslexic users. 

Requires XAMPP to run on your local machine along with phpMyAdmin to store relevant data related to trees, orchards and users. 

XAMPP Download: https://www.apachefriends.org/download.html

phpMyAdmin Download: https://www.phpmyadmin.net/downloads/

Home page
![home_page](https://user-images.githubusercontent.com/65728188/150635251-22efcf8d-44d5-421d-b9f7-25e8688ffc10.png)

Carousel - automatically flicks through a range of products in stock
![carousel](https://user-images.githubusercontent.com/65728188/150635273-757e0762-86fe-40b5-8498-d1ff3688572c.png)

Filter table/User Guide - (HELP PROMPT/USERGUIDE) which navigate to popovers that contains a search filter table to narrow down 
                                        user queries based on common questions that would be asked by a generic user and a user guide which has 
                                        a table included with instructions on when to plant/harvest trees and further instructions on how to grow 
                                        and maintain trees. 
![filter_table](https://user-images.githubusercontent.com/65728188/150635303-5f486555-b97e-4aee-abc6-3ef266ad2f3e.png)

![user_guide](https://user-images.githubusercontent.com/65728188/150635669-2db27ff5-f6a4-46bb-9df4-28e1d41b13f3.png)

Sign up form - Allows users to create an account (user friendly i.e. individuals with poor eyesight or reading disabilities will have each column read back to them on click of relevant columns i.e. 'Full name', 'email', 'Username', 'Password', 'Repeat Password'). 

![sign_up_form](https://user-images.githubusercontent.com/65728188/150635855-74d32fa0-8142-4c4d-8a97-5d450488c8db.png)

Login form - Allows user to login to existing account (applies the same accessibility features as sign up page). Users will be able to gain access to pages relevant to their privileges as a given user. 

![login_form](https://user-images.githubusercontent.com/65728188/150635991-70339587-b0cd-4313-8705-30e44fd0d15d.png)

Result upon logging in as head grower (would apply to any users given username) 

![User_Uid](https://user-images.githubusercontent.com/65728188/150636047-5f817755-ab1a-4b76-8973-3d4c3d108b5d.png)

User error messages signup/login 

![image](https://user-images.githubusercontent.com/65728188/150636082-53ea923e-c0f7-4045-996c-78605ebe17f6.png)

![image](https://user-images.githubusercontent.com/65728188/150636087-ccd7fb6b-41c8-438e-87ef-2e9e7415b13b.png)

Storing of user accounts - User details are automatically fetched by the use of phpMyAdmin database and stored within the relevant table schema where the passwords are hashed to allow the the head grower to know what users have made accounts, but not be able to gain root access to them. 

![user_details](https://user-images.githubusercontent.com/65728188/150636196-ab253c03-3cb0-43a9-8236-b001021cd478.png)
