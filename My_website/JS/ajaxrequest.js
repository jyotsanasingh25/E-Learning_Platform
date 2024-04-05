// document.getElementById("registrationForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Prevent form submission and page reload

//     var stuname = document.getElementById("username").value;
//     var stuemail = document.getElementById("email").value;
//     var stupass = document.getElementById("password").value;
//     var stuCpass = document.getElementById("confirm_password").value;
//     var stuaddress = document.getElementById("address").value;

//     // Ensure jQuery library is included before using $.ajax()

//     $ajax({
//         url:'Student/addstudent.php',
//         method:'POST',
//         data:{
//             stuSingup:"stusignup",
//             stuName: stuname,
//             stuEmail: stuemail,
//             stuPass: stupass,
//             stuC_Pass: stuCpass,
//             stuAddress: stuaddress,
//         },

//         success:function(data){
//             console.log(data);
//         }
//     });
// });
