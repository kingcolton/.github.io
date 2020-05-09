# Prototype Sigma Nu Event Sign-Up

This is the conceptual website and test site for myself to practice and improvse my website development skill (primarily in HTML, CSS, PHP, Bootstrap, and JavaScript). I just constantly brainstorm on how will this website look like. Unfortunately, Github Page doesn't allow to run PHP so I will be looking elsewhere for me to host on.

What does it look like? Here's my ideas (for now);

- When you sign up with provided information you filled out, it will be sent to the SQL database and display database to the admin panel (only admins can access to that page to see it!) without dependent on a 3rd party system like Google Spreadsheet.

- In the admin panel "home page", it will show only two buttons- "Browse all Event titles" and "Edit Event Title".

- Admins can edit the event page's title only in the admin page. When you change the event title (located in "Edit Event Title" button), it will automatically create a new table in the same database. This also display as a new title button in the browse list (located in "Browse all Event titles" button) for admins to click on to show list of participants. Admins can also view older event (as long as they're in the same database and used different title). It will have a system to prevent admin from using same event title (if it is already exist in same database) to prevent confusion.

Any suggestions are greatly appreciated!
