<html>
    <form name="form_register.php" method="POST" action="form_result.php"> <br>  
        Name: <input type="text" name="member_name"> <br>
        E-mail: <input type="text" name="member_email"> <br>
        Phone: <input type="text" name="member_phone" maxlength="10"> <br>
        Gender: <input type="radio" name="member_gender" value="1"> Male
                <input type="radio" name="member_gender" value="2"> Female <br>
        Address:  <textarea name="member_address"></textarea><br>
        Major: <select name="member_major">
                <option>  --Please Select-- </option>
                <option value="cs"> Computer Science </option>
                <option value="it"> Information Technology </option>
                <option value="mt"> Multimedia Technology </option>
            </select> <br>
            Date:
            <input type="checkbox" name="member_day1" value="1"> DAY1 
            <input type="checkbox" name="member_day2" value="2"> DAY2 
            <input type="checkbox" name="member_day3" value="3"> DAY3 
        <br>
        <input type="submit" name="submit" value="save"> 
        <input type="reset" name="reset" value="cancel">
       
    </form>
    

</html>