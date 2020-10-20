<html>
<head>

</head>
<body>
<center>
<h1> This is the Rubric </h1>



<form action="my_alcohol_addiction.php" method = "POST">
 <label for="groups">Choose a Group:</label>
   <select required name="groups" id = "groups">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>


<ul>
  <li>Does the project answer the question?</li>
  Points
  <input required type="radio" id="4" name="q1" value=4>
  <label for="4">4</label>
  <input type="radio" id="3" name="q1" value=3>
  <label for="3">3</label>
  <input type="radio" id="2" name="q1" value=2>
  <label for="2">2</label>
  <input type="radio" id="1" name="q1" value=1>
  <label for="1">1</label>
  <br><br>

    <li>Is the project interesting?</li>
    Points
    <input required type="radio" id="4" name="q2" value=4>
    <label for="4">4</label>
    <input type="radio" id="3" name="q2" value=3>
    <label for="3">3</label>
    <input type="radio" id="2" name="q2" value=2>
    <label for="2">2</label>
    <input type="radio" id="1" name="q2" value=1>
    <label for="1">1</label>
    <br><br>
      <li>Was the project well done?</li>
      Points
      <input required type="radio" id="4" name="q3" value=4>
      <label for="4">4</label>
      <input type="radio" id="3" name="q3" value=3>
      <label for="3">3</label>
      <input type="radio" id="2" name="q3" value=2>
      <label for="2">2</label>
      <input type="radio" id="1" name="q3" value=1>
      <label for="1">1</label>
      <br><br>
        <li>Can you pass the test at the end?</li>
        Points
        <input required type="radio" id="4" name="q4" value=4>
        <label for="4">4</label>
        <input type="radio" id="3" name="q4" value=3">
        <label for="3">3</label>
        <input type="radio" id="2" name="q4" value=2>
        <label for="2">2</label>
        <input type="radio" id="1" name="q4" value=1>
        <label for="1">1</label>
        <br><br>
          <li>Was the test a good test?</li>
          Points
          <input required type="radio" id="4" name="q5" value=4>
          <label for="4">4</label>
          <input type="radio" id="3" name="q5" value=3>
          <label for="3">3</label>
          <input type="radio" id="2" name="q5" value=2>
          <label for="2">2</label>
          <input type="radio" id="1" name="q5" value=1>
          <label for="1">1</label>
          <br><br>
            
</ul>


      </div>
<br><br>Average Distance

<input required type="text" id="avgDistance" name="avgDistance"><br><br>
<br><br><input type="submit" name="rubricSubmit" value="Submit">
</form>

</center>
</body>
</html>


