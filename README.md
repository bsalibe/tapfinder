# Tapfinder #

### Contact Information ###
* Aseem Dhakal, adhakal@terpmail.umd.edu
* Kyle Chin, kchin113@terpmail.umd.edu
* Oni Oluwaseyi, Ooni@terpmail.umd.edu
* Sun Bukar Alibe, bsalibe@gmail.com


### Information Problem ###

In order to solve a problem, our team had to find a problem. Our team decided to do social good and aim to improve the health of users. Health is a very big area, we focused on one topic to improve health, dehydration. We believed that dehydration is one big health issue. Dehydration can range in its severity, from mild issues like fatigue to even death. However the solving dehydration was still a broad scope for four students from INST377 course. Therefore we looked at smaller area of dehydration, which was helping reduce dehydration on UMCP campus. 

UMCP is a very big campus. There are many buildings and some of these buildings have filtered water filling stations. Since the campus is so big, students, staff and visitors on campus do not know the location of every water filling station. This phenomena may cause users to hold off on drinking water for an elongated amount of time till they are in vicinity of a water filling station they know. This prolonged wait for water may increase the chance of dehydration in the users. Since dehydration can cause fatigue, students and staff may not be able to perform their best effort.

Considering this, our information problem is:

#### *Students, staff and visitors do not know the location of filtered water filling station on UMCP campus.* ####

By solving this issue, our team is hoping to contribute to a small part of improving people’s health.



### Strategies/solutions to solve problem ###

There are many ideas to solve this problem. Our team could post location of water filling stations on a list and spread it around campus, put the information at the door of buildings, make information easily accessible on Google etc. One of the best ways to solve the problem is building a dynamic web application. This compliments the fact that we are required to build a dynamic web application for our project. Therefore our idea was to have a list of location and build a dynamic web application around the list. Originally our team was planning to go to every building and find the water filling station, but we found a pdf file containing a list of locations. 

The solution to this problem had to be something quick and easily accessible. Most students/staffs on campus have a smartphone. They can easily access the internet and our application. Therefore when users open the website, the first things they should see is a search bar where they can input name of a building and get an output of the location. 

Some building names are long and confusing. In order to increase the efficiency, the search had to have a drop down suggestion as the user types so they can easily pick out the building name from the suggested list as opposed to typing out the whole name.

In an academic setting like UMCP campus, many users may prefer to stay organized. These users may plan out where on campus they would be throughout the day. The application needed to have a login system where users can store the building name, and the location information would be saved on their account. These organized users can save the building information beforehand for an even quicker access to the location information. 

### Rationales and justifications on system design and technology ###

System has an MVC architecture.
The Model is made of php, html, css and javascript codes. The model gives the basic framework/layout of the pages.
The Controller are forms in the website. User searching for a building, user logging in and user adding/deleting buildings are the main controllers. When users input from these controllers, it manipulates the model. The controller functions mostly through php post methods. The model then updates its view to that specific user.
The View is updated through php for the specific user. The view depends on what the user did with the controllers. 
With an MVC model, multiple users can use the system and not affect the entire model. 

For the main function, searching building, the system has implemented autocomplete. By using autocomplete, users won’t make error while looking for a building name. It also makes the task more efficient.

The system uses mostly php, html, css and javascript, and mysql because our team learned most of it in the course, INST377. These are powerful languages to create a website which our team implemented to design the system.


### How final system solves the problem ###

The target system information problem is:
Students, staff and visitors do not know the location of filtered water filling station on UMCP campus.

By using the system, users can easily find the location of filtered water filling station by typing building name on the system. They will be prompted with the location of the water station for that specific building. This solves the target information problem.

By helping users find the water location, the system is aiding to hydrate users on UMCP campus. The system is promoting on improving users health on campus. By helping promote users health on campus, the system ultimately helps a little bit to improving health of users which was our overarching problem. The system is a technology for social good.
