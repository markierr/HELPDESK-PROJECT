<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>open tickets</title>
    <link rel="stylesheet" href="tickets.css">
     <link rel="stylesheet" href="registration.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="tickets form">
            <form action="code.php" method="post">
        
                <label for "name">Your name</label>
                <input type="text"  name="full names" onkeyup="checkform()" placeholder="your name...">
                <label for "email">Your email</label>
                <input type="text"  name="email" onkeyup="checkform()"  placeholder="your email...">
                <label for "phonenumber">Your phone number</label>
                <input type="text"  name="phone number" onkeyup="checkform()" placeholder="your phone number...">
                
                <label for "ticketsubject">Ticket subject</label>
                <select id="ticketsubject">
                     <option value="feedback">feedback</option>
                     <option value="General enquiry">General enquiry</option>
                     <option value="Hardware">Hardware</option>
                     <option value="Software">Software</option>
                     <option value="Network/internet">Network/internet</option>
                     <option value="POS device support">Pos device support</option>
                     <option value="Report a problem">Report a problem</option>
                    
                     </select>
                     <label for "ticket priority">Ticket priority</label>
                     <select id="ticketpriority">
                        <option value="low">low</option>
                        <option value="high">high</option>
                        <option value="medium">medium</option>
                        <option value="urgent">urgent</option>
                
                        </select>
                        <label for "Ticket details">ticket details</label>
                <textarea id="message" rows="4" placeholder="Please describe your issue" ></textarea>   
                             
                        
                           </div>
                           <div> 
                            <input class="btn btn-primary"
                             type="submit" name="submit" value="submit">
                             </div>
                            </form>
        


    </body>
    </html>