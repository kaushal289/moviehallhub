// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyClknweVKXCUP-dpumF8ySrvQu6TBYGHcs",
  authDomain: "moviehallhub-5be63.firebaseapp.com",
  projectId: "moviehallhub-5be63",
  storageBucket: "moviehallhub-5be63.appspot.com",
  messagingSenderId: "42968964428",
  appId: "1:42968964428:web:b30d3825f1a50fd6dbc3e9",
  measurementId: "G-MGCRF3N36T"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
firebase.initializeApp(firebaseConfig);
  
  // Reference to the registration form
  var form = document.getElementById('registrationForm');
  
  // Submit event listener for the registration form
  form.addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission
  
    // Get user input values
    var username = document.getElementById('username').value;
    var location = document.getElementById('location').value;
    var contact = document.getElementById('contact').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
  
    // Create a new user with email and password
    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then(function (userCredential) {
        // Get the user object from the response
        var user = userCredential.user;
  
        // Save additional user information to the Firebase database
        firebase.database().ref('users/' + user.uid).set({
          username: username,
          location: location,
          contact: contact,
          email: email
        }).then(function () {
          // Redirect to login page after successful registration
          window.location.href = 'login.html';
        }).catch(function (error) {
          // Handle database error
          console.error('Error saving user information:', error);
        });
      })
      .catch(function (error) {
        // Handle authentication error
        console.error('Error creating user:', error);
      });
  });
  