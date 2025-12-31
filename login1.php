
    <html>
    <head>
        <title>Kaun Banega Crorepati</title>
        <style>
            body{
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                image-rendering: smooth;
            }
            h1{
                text-align: center;
                background-color: blue;
            }
            h2{
                text-align: center;
                color: black;
            }
            label{
                font-size: larger;
            }
            .but{
                width: 20%;
                height: 10%;
                border-radius: 36%;
                font-size: x-large;
                background-color: blue;
                color: white;
                margin-left: 37%;
                border-color: blue;
            }
            .error {
                color: red;
                font-size: small;
            }
        </style>
        <script>
            function validateForm() {
                let errors = [];
                let form = document.forms["myform"];

                // Clear previous error messages
                let errorElements = document.getElementsByClassName("error");
                while (errorElements.length > 0) {
                    errorElements[0].parentNode.removeChild(errorElements[0]);
                }

                
               // Validate name
               let name = form["name"].value;
                let namePattern = /^[a-zA-Z\s]+$/;
                if (name == "") {
                    errors.push("Name is required.");
                    form["name"].insertAdjacentHTML('afterend', '<span class="error">Name is required.</span>');
                } else if (!namePattern.test(name)) {
                    errors.push("Name must contain only letters.");
                    form["name"].insertAdjacentHTML('afterend', '<span class="error">Name must contain only letters.</span>');
                }


                    // Validate birthdate
                let bod = form["bod"].value;
                let today = new Date().toISOString().split('T')[0];
                if (bod == "") {
                    errors.push("Birthdate is required.");
                    form["bod"].insertAdjacentHTML('afterend', '<span class="error">Birthdate is required.</span>');
                } else if (bod >= today) {
                    errors.push("Birthdate cannot be today or a future date.");
                    form["bod"].insertAdjacentHTML('afterend', '<span class="error">Birthdate cannot be today or a future date.</span>');
                }
                   // Validate Aadhar Card Number
                   let adh = form["adh"].value;
                if (adh == "") {
                    errors.push("Aadhar Card Number is required.");
                    form["adh"].insertAdjacentHTML('afterend', '<span class="error">Aadhar Card Number is required.</span>');
                } else if (isNaN(adh)) {
                    errors.push("Aadhar Card Number must be a number.");
                    form["adh"].insertAdjacentHTML('afterend', '<span class="error">Aadhar Card Number must be a number.</span>');
                } else if (adh.length != 12) {
                    errors.push("Aadhar Card Number must be 12 digits.");
                    form["adh"].insertAdjacentHTML('afterend', '<span class="error">Aadhar Card Number must be 12 digits.</span>');
                }

                let mob = form["mob"].value;
                if (mob == "") {
                    errors.push("Mobile Number is required.");
                    form["mob"].insertAdjacentHTML('afterend', '<span class="error">Mobile Number is required.</span>');
                } else if (isNaN(mob)) {
                    errors.push("Mobile Number must be a number.");
                    form["mob"].insertAdjacentHTML('afterend', '<span class="error">Mobile Number must be a number.</span>');
                } else if (mob.length != 10) {
                    errors.push("Mobile Number must be 10 digits.");
                    form["mob"].insertAdjacentHTML('afterend', '<span class="error">Mobile Number must be 10 digits.</span>');
                }


                // Validate Address
                let adr = form["adr"].value;
                if (adr == "") {
                    errors.push("Address is required.");
                    form["adr"].insertAdjacentHTML('afterend', '<span class="error">Address is required.</span>');
                }

                // Validate Email
                let email = form["email"].value;
                let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (email == "") {
                    errors.push("Email is required.");
                    form["email"].insertAdjacentHTML('afterend', '<span class="error">Email is required.</span>');
                } else if (!emailPattern.test(email)) {
                    errors.push("Invalid email format.");
                    form["email"].insertAdjacentHTML('afterend', '<span class="error">Invalid email format.</span>');
                }

                 // Validate Account Number
                 let acc = form["acc"].value;
                if (acc == "") {
                    errors.push("Account Number is required.");
                    form["acc"].insertAdjacentHTML('afterend', '<span class="error">Account Number is required.</span>');
                } else if (isNaN(acc)) {
                    errors.push("Account Number must be a number.");
                    form["acc"].insertAdjacentHTML('afterend', '<span class="error">Account Number must be a number.</span>');
                } else if (acc.length != 11) {
                    errors.push("Account Number must be 11 digits.");
                    form["acc"].insertAdjacentHTML('afterend', '<span class="error">Account Number must be 11 digits.</span>');
                }

               
                // Validate IFSC Code
                let ifsc = form["ifsc"].value;
                let ifscPattern = /^[A-Z]{4}[0-9]{7}$/;
                if (ifsc == "") {
                    errors.push("IFSC Code is required.");
                    form["ifsc"].insertAdjacentHTML('afterend', '<span class="error">IFSC Code is required.</span>');
                } else if (!ifscPattern.test(ifsc)) {
                    errors.push("Invalid IFSC Code format.");
                    form["ifsc"].insertAdjacentHTML('afterend', '<span class="error">Invalid IFSC Code format.</span>');
                }


                // Validate Bank Name
                let baname = form["baname"].value;
                if (baname == "") {
                    errors.push("Bank Name is required.");
                    form["baname"].insertAdjacentHTML('afterend', '<span class="error">Bank Name is required.</span>');
                }

                // Validate Branch Name
                let brname = form["brname"].value;
                if (brname == "") {
                    errors.push("Branch Name is required.");
                    form["brname"].insertAdjacentHTML('afterend', '<span class="error">Branch Name is required.</span>');
                }

                // Display errors
                if (errors.length > 0) {
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body style="background-image:url('D:\login.jpg')">
        <form name="myform" method="post" action="login.php" onsubmit="return validateForm()" style="color: white;background-color: dimgray;width: 55%;margin-left: 20%;padding: 2%;margin-top: 2%;font-family: math;border-radius:5%">
            <h1>LOGIN FORM</h1>
            <h2>------------- Personal Details -------------</h2>
            <label>Name :</label>    <input type="text" placeholder="    Firstname                                      Middlename                               Lastname" name="name" style="width: 78%;height: 4%;"><br><br>
            <label>BirthDate :</label>    <input type="date" name="bod" style="width: 17%;height: 4%;"><br><br>
            <label>Addhar Card Number :</label>    <input type="number" name="adh" style="width: 34%;height: 4%;"><br><br>
            <h2>------------- Contact Details -------------</h2>
            <label>Mobile No. :</label>  <input type="number" name="mob" style="width: 34%;height: 4%;"><br><br>
            <label>Address :</label>  <input type="text" name="adr" style="width: 86%;height: 4%;"><br><br>
            <label>Email Id :</label>  <input type="text" name="email" style="width: 54%;height: 4%;"><br><br>
            <h2>------------- Bank Details -------------</h2>
            <label>Account No. :</label>  <input type="number" name="acc" style="width: 34%;height: 4%;"><br><br>
            <label>IFSC Code :</label>  <input type="text" name="ifsc" style="width: 34%;height: 4%;"><br><br>
            <label>Bank Name :</label>  <input type="text" name="baname" style="width: 34%;height: 4%;"><br><br>
            <label>Branch Name :</label>  <input type="text" name="brname" style="width: 34%;height: 4%;"><br><br>
            <input class="but" type="submit" value="SUBMIT" name="submit"><br>
        </form>
    </body>
</html>