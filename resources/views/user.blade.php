<h1>This my User page from UserController</h1>
<!-- This is the user.blade.php file -->
 <!-- This file is used to display user information passed from the UserController -->
<!-- The variables $name, $age, and $email are passed from the UserController's show method -->
 <h1>User Information</h1>
<h2>User Name: {{ $name }}</h2>
<h2>User Age: {{ $age }}</h2>
<h2>User Email: {{ $email }}</h2>