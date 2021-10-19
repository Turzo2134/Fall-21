<!DOCTYPE html>
<html>
<body>
<h1>Please fill up the form </h1>
<form action="insert.php" method="POST">
<table>

<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" name="firstname"></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td><label for="lastname">Last name:</label></td>
 <td><input type="text" name="lastname">
</td>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email"  name="email"></td>
</tr>
<tr>
 <td></td>

 <tr>



<td>Gender:</td>
<td><input type="radio" name="Gender" value="M">
  <label for="Gender">Male</label>
<input type="radio" name="Gender" value="F">
  <label for="Gender">Female</label>
 
</tr>


</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="Mobile">Mobile No:</label></td>
 <td> <input type="Mobile" name="Mobile"></td>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
  <td> <label for="date">Date of birth:</label></td>
  <td><input type="date" name="date"></td>
 
</tr>


<tr>
  <td> <label for="hsc">HSC result:</label></td>
  <td><input type="hsc"  name="hsc"></td>
</tr>


<tr>
  <td> <label for="ssc">SSC result:</label></td>
  <td><input type="ssc"  name="ssc"></td>
</tr>

<tr>
<td> <label>Select a course you want to enroll :</label></td>
<td> 
<select name='course'>  
 
  <option value="CSE">CSE</option>  
  <option value="EEE">EEE</option>  
  <option value="LAW">LAW</option>  
  <option value="COE">COE</option>  
  
</select> 
</td>
</tr>



<tr>
<td> <label>Choose a year enrolling year :</label></td>
<td> 
<select name='year'>  
 
  <option value="2021">2021</option>  
  <option value="2022">2022</option>  
  <option value="2023">2023</option>  
  <option value="2024">2024</option>  
  
</select> 
</td>
</tr>


<tr>
<td> <label>Choose a year enrolling year :</label></td>
<td> 
<select name='Semester'>  
 
  <option value="Summer">Summer</option>  
  <option value="Spring">Spring</option>  
  <option value="Fall">Fall</option>  
  
</select> 
</td>
</tr>

<tr>
   
  <td><button type="button" onclick="alert('Data Successfully Submitted')">Insert Data</button></td>
  </tr>

  </table>
</form>

</body>
</html>